<!-- None Laravel Controllers -->

<!-- Room Add-->

@php
if (isset($_POST['addroom'])) {
    $typeofroom = $_POST['troom'];
    $typeofbed = $_POST['bed'];

    //$sql = $conn->query("INSERT INTO room VALUES ('','$typeofroom', '$typeofbed')");
    //$sql->execute();
    $rresult = $conn->prepare("INSERT INTO room VALUES ('','$typeofroom', '$typeofbed')")->execute();
}
@endphp

  <!-- Room Delete-->

@php
    <div class="room">
    $sql = $conn->query("SELECT * FROM room");
    $sql->execute();
    $re = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($re as $row) {
    $type = $row['type'];
    $bedding = $row['bedding'];
      if ($type == "Superior Room") {
            echo "<div class='roombox roomboxsuperior'>
                    <div class='text-center no-boder'>
                        <i class='fa-soltype fa-bed fa-4x mb-2'></i>
                        <h3>" . $type . "</h3>
                        <div class='mb-1'>" . $bedding . "</div>
                        <a href="roomdelete.php?type='. $type .'"><button class='btn btn-danger'>Delete</button></a>
                    </div>
                </div>";
        } else if ($type == "Deluxe Room") {
            echo "<div class='roombox roomboxdelux'>
                    <div class='text-center no-boder'>
                    <i class='fa-soltype fa-bed fa-4x mb-2'></i>
                    <h3>" . $type . "</h3>
                    <div class='mb-1'>" . $bedding . "</div>
                    <a href="roomdelete.php?type='. $type .'"><button class='btn btn-danger'>Delete</button></a>
                </div>
                </div>";
        } else if ($type == "Guest House") {
            echo "<div class='roombox roomboguest'>
            <div class='text-center no-boder'>
            <i class='fa-soltype fa-bed fa-4x mb-2'></i>
                        <h3>" . $type . "</h3>
                        <div class='mb-1'>" . $bedding . "</div>
                        <a href="roomdelete.php?type='. $type .'"><button class='btn btn-danger'>Delete</button></a>
                </div>
        </div>";
        } else if ($type == "Single Room") {
            echo "<div class='roombox roomboxsingle'>
                    <div class='text-center no-boder'>
                    <i class='fa-soltype fa-bed fa-4x mb-2'></i>
                    <h3>" . $row['type'] . "</h3>
                    <div class='mb-1'>" . $bedding . "</div>
                    <a href="roomdelete.php?type='. $type .'"><button class='btn btn-danger'>Delete</button></a>
                </div>
                </div>";
        }
    }
    </div>
@endphp
