@include('Users.Logout')
<nav>
    <div class="logo">
      <img class="hotellogo" src="{{ asset('/public/image/hotellogo.jpg') }}" alt="">
      <p>Hotel</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#thirdsection">Facilites</a></li>
      <li><a href="#contactus">contact us</a></li>
      <a href="{{ asset('/resources/views/Users/Logout') }}"><button class="btn btn-danger">Logout</button></a>
    </ul>
</nav>
