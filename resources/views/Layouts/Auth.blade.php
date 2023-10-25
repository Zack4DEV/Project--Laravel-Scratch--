@push('css')
<link rel="stylesheet" href="{{ asset('/storage/app/public/css/login.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('/storage/app/public/css/flash.css') }}">
@endpush



@include('Layouts.Logo')
@include('Layouts.AuthLoginContainer')
@include('Layouts.Auth.Signup.SignupUser')
@inlcude('Layouts.AuthScript')
