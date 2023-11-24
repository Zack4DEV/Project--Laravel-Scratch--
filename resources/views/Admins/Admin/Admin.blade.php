@include('Admins.Admin.Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('/public/admin/css/admin.css') }}">
<link rel="stylesheet" href="asset('/public/css/flash.css')">
<!-- fontowesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('js')
<script src="asset('/public/admin/javascript/script.js')"></script>
@endpush

@section('admin_section')
<nav class="uppernav">
        <div class="logo">
            <p>Hotel</p>
        </div>
        <div class="logout">
        <a href="{{ URL::to('/logout') }}"><button class="btn btn-primary">Logout</button></a>
    </div>
    </nav>

    <nav class="sidenav">
        <ul>
            <li class="pagebtn active"><img src="asset(/public/admin/image/icon/dashboard.png)">&nbsp&nbsp&nbsp Dashboard</li>
            <li class="pagebtn"><img src="asset(/public/admin/image/icon/bed.png)">&nbsp&nbsp&nbsp Room Booking</li>
            <li class="pagebtn"><img src="asset(/public/admin/image/icon/wallet.png)">&nbsp&nbsp&nbsp Payment</li>
            <li class="pagebtn"><img src="asset(/public/admin/image/icon//bedroom.png)">&nbsp&nbsp&nbsp Rooms</li>
            <li class="pagebtn"><img src="asset(/public/admin/image/icon/staff.png">&nbsp&nbsp&nbsp Staff</li>
        </ul>
    </nav>


    <div class="mainscreen">
        <iframe class="frames frame1 active" src="{{ URL::to('/dashboard') }}" frameborder="0"></iframe>
        <iframe class="frames frame2" src="{{ URL::to('/roombook') }}" frameborder="0"></iframe>
        <iframe class="frames frame3" src="{{ URL::to('/payment') }}" frameborder="0"></iframe>
        <iframe class="frames frame4" src="{{ URL::to('/room') }}" frameborder="0"></iframe>
        <iframe class="frames frame4" src="{{ URL::to('/staff') }}" frameborder="0"></iframe>
    </div>

    <div id="mobileview">
        <h5>Admin panel doesn't show in mobile view</h4>
    </div>

@endsection
