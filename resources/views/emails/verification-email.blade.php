@component('mail::message')
	
<b>Selamat!</b> anda telah berhasil mendaftar sebagai Peserta ITCC 2020 pada  <b>Cabang Lomba {{$comp}}</b>.<br>
Langkah selanjutnya adalah aktivasi akun Anda dengan menekan tombol dibawah ini.<br>
<span style="color: red; font-size: 8px;">*anda tidak dapat melanjutkan ke tahap pendaftaran selanjutnya sebelum akun anda aktif</span>

@component('mail::button', ['url' => url('/verifyemail/'.$email_token) ])
Aktivasi Akun
@endcomponent

Terimakasih,<br>
Admin ITCC 2020
@endcomponent