@section('room_section')
<div class="addroomsection">
    <form action="route('to_create_room')" method="POST">
        <label for="troom">Type of Room :</label>
        <select name="troom" class="form-control">
            <option value selected></option>
            <option value="Superior Room">SUPERIOR ROOM</option>
            <option value="Deluxe Room">DELUXE ROOM</option>
            <option value="Guest House">GUEST HOUSE</option>
            <option value="Single Room">SINGLE ROOM</option>
        </select>

        <label for="bed">Type of Bed :</label>
        <select name="bed" class="form-control">
            <option value selected></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
        </select>

        <button type="submit" class="btn btn-success" name="addroom">Add Room</button>
    </form>
</div>

<div class="room">
    @foreach($re as $row)
    echo "<div class='roombox'>
        <div class='text-center no-border'>
            <i class='fa fa-users fa-5x'></i>
            <h3>" . {{ $row['type'] }} . "</h3>
            <div class='mb-1'>" . {{ $row['bedding'] }} . "</div>
            <a href="asset('URL::to('/room/delete')')"><button class='btn btn-danger'>Delete</button></a>
        </div>
    </div>";
    @endforeach
</div>

@while($redeletesql)
<div class="roombox">
    <div class="text-center no-border">
        <i class="fa fa-users fa-5x"></i>
        <h3>{{ $row['type'] }}</h3>
        <div class="mb-1">{{ $row['bedding'] }}</div>
        <a href="asset('URL::to('/room/delete')')"><button class="btn btn-danger">Delete</button></a>
    </div>
</div>
@endwhile
@endsection
