@php
$rsql = "SELECT type FROM room";
$rre = mysqli_query($conn, $rsql);
$r = 0;
$sc = 0;
$gh = 0;
$sr = 0;
$dr = 0;

@while ($rrow = mysqli_fetch_array($rre))
$r = $r + 1;
$s = $rrow['type'];
@if ($s == "Superior Room")
$sc = $sc + 1;
@endif
@if ($s == "Guest House")
$gh = $gh + 1;
@endif
@if ($s == "Single Room")
$sr = $sr + 1;
@endif
@if ($s == "Deluxe Room")
$dr = $dr + 1;
@endif
@endwhile

$csql = "SELECT roomtype FROM payment;--'";
$cre = mysqli_query($conn, $csql);
$cr = 0;
$csc = 0;
$cgh = 0;
$csr = 0;
$cdr = 0;

@while ($crow = mysqli_fetch_array($cre))
$cr = $cr + 1;
$cs = $crow['roomtype'];

@if ($cs == "Superior Room")
$csc = $csc + 1;
@endif

@if ($cs == "Guest House")
$cgh = $cgh + 1;
@endif
@if ($cs == "Single Room")
$csr = $csr + 1;
@endif
@if ($cs == "Deluxe Room")
$cdr = $cdr + 1;
@endif
@endwhile
// room availablity
// Superior Room =>
$f1 = $sc - $csc;
@if ($f1 <= 0) $f1="NO" ;
@endif
// Guest House=>
    $f2 = $gh - $cgh;
    @if ($f2 <= 0) $f2="NO" ;
@endif
// Single Room=>
    $f3 = $sr - $csr;
    @if ($f3 <= 0) $f3="NO" ;
@endif
// Deluxe Room=>
    $f4 = $dr - $cdr;
    @if ($f4 <= 0) $f4="NO" ;
@endif
//total available room=>
    $f5 = $r - $cr;
    @if ($f5 <= 0) $f5="NO" ;
@endif @endphp
