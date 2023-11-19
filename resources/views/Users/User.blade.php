@extends('Layouts.App')

@push('css')
<link rel="stylesheet" href="{{ asset('/public/css/home.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('/public/admin/css/roombook.css') }}">
@endpush
<style>
    #guestdetailpanel {
        display: none;
    }

    #guestdetailpanel .middle {
        height: 450px;
    }
</style>

@include('Users.Navbar')
@include('Users.Home')
@include('Users.Rooms')
@include('Users.Facilities')
@include('Users.Contactus')
@include('Users.BoxScript')
