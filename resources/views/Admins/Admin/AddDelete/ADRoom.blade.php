@php
$id = $_GET['id'];
$roomdeletesql = "DELETE FROM room WHERE id = $id;--'";
$result = mysqli_query($conn, $roomdeletesql);
header("Location:room");
@endphp

@if (isset($_POST['addroom']))
$typeofroom = $_POST['troom'];
$typeofbed = $_POST['bed'];

$sql = "INSERT INTO room(type,bedding) VALUES ('$typeofroom', '$typeofbed');--'";
$result = mysqli_query($conn, $sql);

@if ($result)
header("Location:room");
@endif
@endif


<div class="room">
    @php
    $sql = "SELECT * FROM room;--'";
    $re = mysqli_query($conn, $sql)
    @endphp
    @while ($row = mysqli_fetch_array($re))
    $id = $row['type'];
    @if ($id == "Superior Room")
    echo "<div class='roombox roomboxsuperior'>
        <div class='text-center no-boder'>
            <i class='fa-solid fa-bed fa-4x mb-2'></i>
            <h3>" . $row['type'] . "</h3>
            <div class='mb-1'>" . $row['bedding'] . "</div>
            <a href='roomdelete?id=" . $row[' id'] . "'><button class='btn btn-danger'>Delete</button></a>
						</div>
                    </div>" ; @elseif ($id=="Deluxe Room" ) echo "<div class='roombox roomboxdelux'>
                        <div class='text-center no-boder'>
                        <i class='fa-solid fa-bed fa-4x mb-2'></i>
                        <h3>" . $row['type'] . "</h3>
                        <div class='mb-1'>" . $row['bedding'] . "</div>
                        <a href='roomdelete?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a>
                    </div>
                    </div>" ; @elseif ($id=="Guest House" ) echo "<div class='roombox roomboguest'>
                <div class='text-center no-boder'>
                <i class='fa-solid fa-bed fa-4x mb-2'></i>
							<h3>" . $row['type'] . "</h3>
                            <div class='mb-1'>" . $row['bedding'] . "</div>
                            <a href='roomdelete?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a>
					</div>
            </div>" ; @elseif ($id=="Single Room" ) echo "<div class='roombox roomboxsingle'>
                        <div class='text-center no-boder'>
                        <i class='fa-solid fa-bed fa-4x mb-2'></i>
                        <h3>" . $row['type'] . "</h3>
                        <div class='mb-1'>" . $row['bedding'] . "</div>
                        <a href='roomdelete?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a>
                    </div>
                    </div>" ; @endif @endwhile </div>
