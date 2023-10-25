@php
$id = $_GET['id'];
$staffdeletesql = "DELETE FROM staff WHERE id = $id;--'";
$result = mysqli_query($conn, $staffdeletesql);
header("Location:staff");
@endphp

<div class="room">
    @php
    $sql = "SELECT * FROM staff;--'";
    $re = mysqli_query($conn, $sql)
    while ($row = mysqli_fetch_array($re)) {
    echo "<div class='roombox'>
        <div class='text-center no-boder'>
            <i class='fa fa-users fa-5x'></i>
            <h3>" . $row['name'] . "</h3>
            <div class='mb-1'>" . $row['work'] . "</div>
            <a href='staffdelete?id=" . $row[' id'] . "'><button class='btn btn-danger'>Delete</button></a>
						</div>
                    </div>" ; } @endphp </div>

                @if (isset($_POST['addstaff']))
                $staffname = $_POST['staffname'];
                $staffwork = $_POST['staffwork'];

                $sql = "INSERT INTO staff(name,work) VALUES ('$staffname', '$staffwork');--'";
                $result = mysqli_query($conn, $sql);

                @if ($result)
                header("Location:staff");
                @endif
                @endif

                <div class="room">
                    @php
                    $sql = "SELECT * FROM staff;--'";
                    $re = mysqli_query($conn, $sql)
                    @endphp
                    @while ($row = mysqli_fetch_array($re)) {
                    echo "<div class='roombox'>
                        <div class='text-center no-boder'>
                            <i class='fa fa-users fa-5x'></i>
                            <h3>" . $row['name'] . "</h3>
                            <div class='mb-1'>" . $row['work'] . "</div>
                            <a href='staffdelete?id=" . $row[' id'] . "'><button class='btn btn-danger'>Delete</button></a>
						</div>
                    </div>" ; } @endwhile
</div>
