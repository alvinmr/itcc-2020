<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Verified_req;
use App\Participant;
use DB;
use App\UserMessageTemporary;
use App\Jury;
use Carbon\Carbon;
use App\Competition;
use App\BerkasWeb;
use App\HasilLomba;
use App\Notifications\NotifToInboxAfterVerification;
use PDF;
use Mail;
use App\Mail\EmailParticipant;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::where('competition_id','=',Auth::user()->competition_id)
            ->get();

        /*$participant = Participant::with('group')->where('competition_id','=',Auth::user()->competition_id)->get();*/

        $participant = DB::table('participants')
            ->join('groups', 'groups.id','=','participants.group_id')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->select('participants.*', 'groups.group_name', 'groups.institution', 'groups.verified')
            ->get();


        $jumlahPeserta = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.id as total_peserta')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahPeserta;

        $jumlahTim = DB::table('groups')
            ->select('groups.id')
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        $jumlahVeget = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.vegetarian')
            ->where('participants.vegetarian','=',1)
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahVeget;

        $jumlahNonVeget = DB::table('participants')
            ->join('groups','groups.id','=','participants.group_id')
            ->select('participants.vegetarian')
            ->where('participants.vegetarian','=',0)
            ->where('groups.competition_id','=',Auth::user()->competition_id)
            ->get();

        // return $jumlahNonVeget;

        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.dashboard-admin', compact('group','participant','jumlahPeserta','jumlahTim','jumlahVeget','jumlahNonVeget','jumlahPesan'));
    }

    function showKirimEmailForm(){
        $groups = Group::where('competition_id', Auth::user()->competition_id)
            ->get();


        return view('admin.kirimEmail', compact('groups'));
    }


    function kirimEmail(Request $request){
        $email = new EmailParticipant($request);
        $group = Group::find($request->tim);
        Mail::to($group->email)->send($email);

        return back()->with('success', 'Berhasil mengirim email ke '. $group->group_name);
    }


    public function showFormPembayaran()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.verifikasiPeserta', compact('jumlahPesan'));
    }

    public function showFormVerifikasi()
    {

        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        // $verif_reqs = Verified_req::whereHas('Group',function($q){
        //     $q->where('verified','!=',1)->orWhereNull('verified');
        // })->with('Group')->get();


        // $verif_reqs = DB::table('verified_reqs')
        //     ->join('groups','verified_reqs.group_id','=','groups.id')
        //     ->join('competitions','groups.competition_id','=','competitions.id')
        //     ->join('participants','participants.group_id','=','groups.id')
        //     ->leftJoin('shirts','shirts.size','=','participants.size')
        //     ->select('verified_reqs.*',
        //             'groups.group_name',
        //             'groups.institution', 
        //             'groups.verified',
        //             'groups.regist_cost',
        //             DB::raw('sum(IFNULL(shirts.price,0)) as shirt_total'))
        //     ->where('groups.competition_id','=',Auth::user()->competition_id)
        //     ->where('groups.verified','!=',1)
        //     ->orWhereNull('groups.verified')
        //     ->groupBy('groups.id')
        //     ->get();


        $verif_reqs = DB::table('verified_reqs')
            ->join('groups','verified_reqs.group_id','=','groups.id')
            ->join('competitions','groups.competition_id','=','competitions.id')
            ->join('participants','participants.group_id','=','groups.id')

            ->select('verified_reqs.*',
                    'groups.group_name',
                    'groups.institution', 
                    'groups.verified',
                    'groups.regist_cost',
                    'groups.competition_id',
                    'participants.buy_shirt'
                   )
            ->where('groups.competition_id',Auth::user()->competition_id)
            ->whereNull('groups.verified')
            ->groupBy('verified_reqs.group_id',
                        'verified_reqs.id',
                        'verified_reqs.request_at',
                        'verified_reqs.filename',
                        'verified_reqs.note',
                        'verified_reqs.filetype',
                        'verified_reqs.created_at',
                        'verified_reqs.updated_at',
                        'groups.group_name',
                        'groups.institution', 
                        'groups.verified',
                        'groups.regist_cost',
                        'groups.competition_id',
                        'participants.buy_shirt')
            // ->orWhereNull('groups.verified')
            ->get();

        $dir_file = Verified_req::$dir_verifikasi;

        // return $verif_reqs;

        return view('admin.verifikasiAdmin', compact('jumlahPesan','verif_reqs', 'dir_file'));
    }

    public function verifikasi(Request $request){
        $group = Group::find($request->group_id);
        $group->verified = 1;
        $group->verified_at = Carbon::now();
        $group->verifying_admin = Auth::user()->id;
        $group->save();

        foreach ($group->participants as $participant){
            $participant->code = $participant->generate_code();
            $participant->save();
        }

        Group::find($request->group_id)->notify(new NotifToInboxAfterVerification);
        return redirect('/admin')->with('success', 'Berhasil melakukan verifikasi peserta');
    }

    public function showFormLogUpload()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.uploadlogs', compact('jumlahPesan'));
    }

    public function showFormTambahPeserta()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        if (Auth::user()->competition_id==3) {
            return view('admin.tambahPesertaLCC', compact('jumlahPesan'));
        }elseif (Auth::user()->competition_id==1 or Auth::user()->competition_id==2) {
            return view('admin.tambahPeserta', compact('jumlahPesan'));
        }
    }

    public function showFormTambahJuri()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.tambahJuri', compact('jumlahPesan'));
    }

    public function showFormInputPenilaian()
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        return view('admin.inputFormNilai', compact('jumlahPesan'));
    }

    public function storeJury(Request $request)
    {
        $juri = $this->validate($request, [
            'fullname' => 'required|string',
            'email' => 'required|email',
            'competition_id' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ],[
            'fullname.required' => 'Kolom nama harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'competition_id.required' => 'Kolom kategori harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Konfirmasi password harus diisi',
        ]);

        $juri = new Jury();
        $juri->fullname = $request->fullname;
        $juri->email = $request->email;
        $juri->competition_id = $request->competition_id;
        $juri->username = $request->username;
        $juri->password = bcrypt($request->password);
        $juri->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan juri');
    }        

    public function storeGroup(Request $request)
    {
        $data = $this->validate($request, [
            'groupname' => 'required|string',
            'institution' => 'required|string',
            'fullname' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'vegetarian' => 'required',
            'photo' => 'required',
            'username' => 'required|string|unique:groups,username',
            'password' => 'required|confirmed',
        ],[
            'groupname.required' => 'Kolom nama group harus diisi',
            'institution.required' => 'Kolom institusi harus diisi',
            'fullname.required' => 'Kolom nama harus diisi',
            'birthday.required' => 'Kolom tanggal lahir harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'contact.required' => 'Kolom kontak harus diisi',
            'vegetarian.required' => 'Kolom vegetarian harus diisi',
            'photo.required' => 'Kolom identitas harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'username.unique'   => 'Username sudah digunakan',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Kolom konfirmasi password harus diisi',
        ]);

        $data = new Group();
        $data->group_name = $request->groupname;
        $data->institution = $request->institution;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = $request->email;
        $data->verified_email = 1;
        $data->competition_id = Auth::user()->competition_id;
        $data->save();

        $peserta = new Participant();
        $peserta->captain = 1;
        $peserta->group_id = $data->id;
        $peserta->full_name = $request->fullname;
        $peserta->birthdate = $request->birthday;
        $peserta->email = $data->email;
        $peserta->contact = $request->contact;
        $peserta->vegetarian = $request->vegetarian;
        $peserta->buy_shirt = $request->buy_shirt;
        $peserta->photo = $data->competition_id."_".$request->fullname.".".$request->file('photo')->getClientOriginalExtension();
        Participant::uploadPhoto($request->file('photo'), $peserta->photo);
        $peserta->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan peserta');
    }

    public function storePeserta(Request $request)
    {
        $data = $this->validate($request, [
            'institution' => 'required|string',
            'fullname' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'vegetarian' => 'required',
            'photo' => 'required',
            'username' => 'required|string|unique:groups,username',
            'password' => 'required|string|confirmed',
        ],[
            'institution.required' => 'Kolom institusi harus diisi',
            'fullname.required' => 'Kolom nama harus diisi',
            'birthday.required' => 'Kolom tanggal lahir harus diisi',
            'email.required' => 'Kolom email harus diisi',
            'contact.required' => 'Kolom kontak harus diisi',
            'vegetarian.required' => 'Kolom vegetarian harus diisi',
            'photo.required' => 'Kolom kartu identitas harus diisi',
            'username.required' => 'Kolom username harus diisi',
            'username.unique'   => 'Username sudah digunakan',
            'password.required' => 'Kolom password harus diisi',
            'password.confirmed' => 'Kolom konfirmasi password harus diisi',
        ]);

        $data = new Group();
        $data->group_name = $request->fullname;
        $data->institution = $request->institution;
        $data->username = $request->username;
        $data->password = bcrypt($request->password); 
        $data->email = $request->email;
        $data->verified_email = 1;
        $data->competition_id = Auth::user()->competition_id;
        $data->save();

        $peserta = new Participant();
        $peserta->captain = 1;
        $peserta->group_id = $data->id;
        $peserta->full_name = $request->fullname;
        $peserta->birthdate = $request->birthday;
        $peserta->email = $data->email;
        $peserta->contact = $request->contact;
        $peserta->vegetarian = $request->vegetarian;
        $peserta->buy_shirt = 0;
        $peserta->photo = $data->competition_id."_".$request->fullname.".".$request->file('photo')->getClientOriginalExtension();
        Participant::uploadPhoto($request->file('photo'), $peserta->photo);
        $peserta->save();

        return redirect('/admin')->with('success', 'Berhasil menambahkan peserta');

    }

    public function showKelolaKompetisi($id)
    {
        $jumlahPesan = UserMessageTemporary::where('admin_id','=',Auth::user()->id)
            ->where('view','=',0)
            ->get();

        $kompetisi = Competition::find($id);

        return view('admin.kelola-kompetisi', compact('jumlahPesan','kompetisi'));
    }

    public function updateKompetisi(Request $request, $id)
    {
        $kompetisi = Competition::find($id);

        $kompetisi->short_name = $request->short_name;
        $kompetisi->long_name = $request->long_name;
        $kompetisi->regist_cost = $request->regist_cost;
        $kompetisi->description = $request->description;
        $kompetisi->save();

        return redirect()->back()->with('success', 'Berhasil memperbaharui data kompetisi');
    }

    function print(){
        $participants = Group::where('competition_id', Auth::user()->competition_id)
            ->join('participants', 'participants.group_id', '=', 'groups.id')
            ->where('groups.verified', 1)
            ->get();
        // return $participants;
        // return view('admin.print', compact('participants'));
        $table = PDF::loadview('admin.print', compact('participants'));
        return $table->stream('peserta_'.Auth::user()->competition->long_name.'.pdf');
    }

    public function showBerkasWeb()
    {
        if (Auth::user()->competition_id != 2) {
            return redirect('admin')->with('warning', 'Anda tidak bisa mengakses alamat ini');
        }

        $berkas = Group::with('berkasWeb')
            // ->join('participants', 'participants.group_id','=','groups.id')
            ->where('competition_id', Auth::user()->competition_id)
            ->get();

        // return $berkas;
        return view('admin.berkasWeb', compact('berkas'));
    }

    public function showPartisipantsUploadFileAndroid(){
        $part = Group::leftJoin('files', 'files.group_id', '=', 'groups.id')
            ->leftJoin('videoapks', 'videoapks.group_id', '=', 'groups.id')
            ->where('competition_id', Auth::user()->competition_id)
            ->selectRaw('groups.*, files.title, files.link as proposalLink, videoapks.link as videoLink')
            ->get();

        return view('admin.partisipantUploadFile', compact('part'));
    }

    public function showPartisipantsUploadFileIdea(){
        $part = Group::leftJoin('files', 'files.group_id', '=', 'groups.id')
            ->leftJoin('posters', 'posters.group_id', '=', 'groups.id')
            ->leftJoin('powerpoints', 'powerpoints.group_id', '=', 'groups.id')
            ->where('competition_id', Auth::user()->competition_id)
            ->selectRaw('groups.*, files.title, files.link as proposalLink, posters.file, powerpoints.link as powerPointLink')
            ->get();

        return view('admin.partisipantUploadFileIdea', compact('part'));
    }

    public function showPartisipantsUploadFileInovasi(){
        $part = Group::leftJoin('files', 'files.group_id', '=', 'groups.id')
            ->leftJoin('posters', 'posters.group_id', '=', 'groups.id')
            ->where('competition_id', Auth::user()->competition_id)
            ->selectRaw('groups.*, files.title, files.link as proposalLink, posters.file')
            ->get();

        return view('admin.partisipantUploadFileInovasi', compact('part'));
    }
    
    public function showFormHasilLomba()
    {
        $hasilLomba = HasilLomba::where('competition_id','=',Auth::user()->competition_id)
            ->get();

        $competition = Competition::where('id','=',Auth::user()->competition_id)
            ->get();

        return view('admin.hasilLomba', compact('hasilLomba','competition'));
    }

    public function createHasilLomba(Request $request)
    {
        $data = $this->validate($request, [
            'nama_tim' => 'required|string',
            'judul_karya' => 'required|string',
            'predikat' => 'required|string',
        ],[
            'nama_tim.required' => 'Kolom nama tim harus diisi',
            'judul_karya.required' => 'Kolom judul karya harus diisi',
            'predikat.required' => 'Kolom predikat harus diisi',
        ]);

        $data = new HasilLomba();
        $data->competition_id = $request->competition_id;
        $data->nama_tim = $request->nama_tim;
        $data->judul_karya = $request->judul_karya;
        $data->predikat = $request->predikat;
        $data->save();

        return redirect('/admin/hasil_lomba')->with('success', 'Berhasil menambahkan hasil lomba');
    }

    public function editHasilLomba($id)
    {
        $hasilLomba = HasilLomba::where('id','=',$id)
            ->get();

        $competition = Competition::where('id','=',Auth::user()->competition_id)
            ->get();

        foreach ($hasilLomba as $hasil) {
            $data['nama_tim'] = $hasil->nama_tim;
            $data['judul_karya'] = $hasil->judul_karya;
            $data['predikat'] = $hasil->predikat;
            $data['competition_id'] = $hasil->competition_id;
        }

        return view('admin.editHasilLomba', compact('competition', 'id'), $data);
    }

    public function updateHasilLomba(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama_tim' => 'required|string',
            'judul_karya' => 'required|string',
            'predikat' => 'required|string',
        ],[
            'nama_tim.required' => 'Kolom nama tim harus diisi',
            'judul_karya.required' => 'Kolom judul karya harus diisi',
            'predikat.required' => 'Kolom predikat harus diisi',
        ]);

        $data = HasilLomba::find($id);
        $data->competition_id = $request->competition_id;
        $data->nama_tim = $request->nama_tim;
        $data->judul_karya = $request->judul_karya;
        $data->predikat = $request->predikat;
        $data->save();

        return redirect('/admin/hasil_lomba')->with('success', 'Berhasil memperbarui hasil lomba');
    }

    public function deleteHasilLomba($id)
    {
        $hasilLomba = HasilLomba::find($id);
        $hasilLomba->delete();
        return redirect('/admin/hasil_lomba')->with('success', 'Berhasil menghapus hasil lomba');
    }

}
