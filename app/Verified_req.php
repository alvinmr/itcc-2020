<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verified_req extends Model
{
    public static $dir_verifikasi = "uploads/verif";

    protected $fillable = [
        'group_id',
        'request_at',
        'filename',
        'note',
        'filetype',
    ];
    
    public function group(){
        return $this->belongsTo('App\Group', 'group_id');
    }

    public static function uploadVerification($file, $file_name){
        $destinationPath = public_path(self::$dir_verifikasi);
        $file->move($destinationPath, $file_name);
    }
}
