<!-- None Laravel Controllers -->

@php
$ptsql = $conn->query("SELECT * FROM payment");
$ptsql->execute();
$result = $ptsql->fetchAll(PDO::FETCH_ASSOC);
@endphp

@foreach($result as $res)
$id = $res['id']; 
$name = $res['name']; 
$roomtype = $res['roomtype']; 
$bed = $res['bed']; 
$cin = $res['cin']; 
$cout = $res['cout']; 
$noofdays = $res['noofdays']; 
$noofroom = $res['noofroom']; 
$bed = $res['bed']; 
$cin = $res['cin']; 
$bedtotal = $res['bedtotal']; 
$mealtotal = $res['mealtotal']; 
$finaltotal = $res['finaltotal']; 

@endforeach