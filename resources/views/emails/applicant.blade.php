@component('mail::message')
# Hello, Admin Ombe Coffe

{{$applicant->nama}} Telah Mendaftar Sebagai {{$applicant->posisi}} di Store {{$applicant->nama_store}} dengan email {{$applicant->email}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
