@php
$rre = array("Superior Room","Deluxe Room","Guest House","Single Room");
$cre = array("Superior Room","Deluxe Room","Guest House","Single Room");
$s="";
$cs="";
@endphp

@foreach ($rre as $rrow)
$r = $r + 1;
$s = $rrow['type'];
@if($s == "Superior Room")
$sc = $sc + 1;
@endif
@if($s == "Guest House")
$gh = $gh + 1;
@endif
@if($s == "Single Room")
$sr = $sr + 1;
@endif
@if($s == "Deluxe Room")
$dr = $dr + 1;
@endif
@endforeach

@foreach ($cre as $crow)
$cr = $cr + 1;
$cs = $crow['roomtype'];

@if($cs == "Superior Room")
$csc = $csc + 1;
$f1 = $sc - $csc;
@endif

@if($cs == "Guest House")
$cgh = $cgh + 1;
$f2=$gh - $cgh;
@endif

@if($cs == "Single Room")
$csr = $csr + 1;
$f3=$sr - $csr;
@endif

@if($cs == "Deluxe Room")
$cdr = $cdr + 1;
$f4=$dr - $cdr;
@endif

$f5=$r - $cr;
@endforeach
