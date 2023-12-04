<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Staff')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" src="{{ URL::asset('/admin/css/room.css') }}">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
<style>
    .roombox {
        background-color: #d1d7ff;
        padding: 10px;
    }
</style>




<div class="addstaffsection">
    <form action="route('to_create_staff')" method="POST">
        <label for="nstaff">Name :</label>
        <input type="text" name="staffname" class="form-control">

        <label for="wstaff">Work :</label>
        <select name="staffwork" class="form-control">
            <option value selected></option>
            <option value="Manager">Manager</option>
            <option value="Cook">Cook</option>
            <option value="Helper">Helper</option>
            <option value="cleaner">Cleaner</option>
            <option value="weighter">weighter</option>
        </select>

        <button type="submit" class="btn btn-success" name="addstaff">Add Staff</button>
    </form>
</div>


@while($redeletesql)
<div class="staffbox">
    <div class="text-center no-border">
        <i class="fa fa-users fa-5x"></i>
        <h3>{{ $row['name'] }}</h3>
        <div class="mb-1">{{ $row['work'] }}</div>
        <a src="{{ URL::to('/admin/staff/delete') }}""><button class="btn btn-danger">Delete</button></a>
    </div>
</div>
@endwhile
    </body>
</html>