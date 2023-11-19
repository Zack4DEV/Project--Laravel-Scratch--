@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/public/admin/css/room.css') }}">
@endpush

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .roombox {
        background-color: #d1d7ff;
        padding: 10px;
    }
</style>

<div class="addroomsection">
    <form action="" method="POST">
        <label for="troom">Name :</label>
        <input type="text" name="staffname" class="form-control">

        <label for="bed">Work :</label>
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

    @if (isset($_POST['addstaff']))
        $staffname = $_POST['staffname'];
        $staffwork = $_POST['staffwork'];

        $result = DB::insert("INSERT INTO staff(name,work) VALUES ('$staffname', '$staffwork');--'");

        @while ($result)
            header("Location:staff");
        @endwhile
    @endif
</div>
