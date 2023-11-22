@include('Admins.Admin.Dashboard')
@include('Admins.Admin.Roombook')
@include('Admins.Admin.RoombookEdit')
@include('Admins.Admin.Payment')
@include('Admins.Admin.Room')
@include('Admins.Admin.Staff')

@include('Admins.Admin.UpperSideMainView.View')
@include('Admins.Admin.UpperSideMainView.Upper')
@include('Admins.Admin.UpperSideMainView.Side')
@include('Admins.Admin.UpperSideMainView.Main')


@push('css')
<link rel="stylesheet" href="{{ asset('/public/admin/css/admin.css') }}">
<link rel="stylesheet" href="asset('/public/css/flash.css')">
<!-- fontowesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<script src="{{ asset('/public/admin/javascript/script.js"></script>
