<!-- None Laravel Controllers -->

<!-- Staff Add -->
@php
if (isset($_POST['addstaff'])) {
    $staffname = $_POST['staffname'];
    $staffwork = $_POST['staffwork'];

    //$sql = $conn->query("INSERT INTO staff VALUES ('','$staffname', '$staffwork')");
    //$sql->execute();
    $sresult = $conn->prepare("INSERT INTO staff VALUES ('','$staffname', '$staffwork')")->execute();

}
@endphp

<!-- Staff Remove -->
@php
$sql = $conn->query("SELECT * FROM staff");
$sql->execute();
$st = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($st as $row) {
$name = $row['name'];
$work = $row['work'];
$id = $row['id'];
}

@endphp