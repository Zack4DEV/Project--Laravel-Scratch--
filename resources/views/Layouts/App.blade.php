@stack('css')
@stack('js')

@include('Layouts.Login')

@push('css')
<link rel="stylesheet" href="{{ asset('/public/css/login.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('/public/css/flash.css') }}">
@endpush

@push('js')
<script src="{{ asset('/public/javascript/auth.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush

@section('carouselExampleControls')
<div id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="{{ asset('/public/image/__hotel1.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="{{ asset('/public/image/__hotel2.jpg') }}">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="{{ asset('/public/image/__hotel3.jpg') }}">
        </div>
    </div>
</div>
<div class="logo">
    <p>Hotel</p>
</div>
@endsection
