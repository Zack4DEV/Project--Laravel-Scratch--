@foreach ($rre as $rrow)
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
@endforeach

@foreach ($cre as $crow)
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
@endforeach
// room availablity
// Superior Room =>
@php
$f1 = $sc - $csc;
@endphp
@if ($f1 <= 0)
$f1="NO";
@endif

@php
$f2 = $gh - $cgh;
@endphp
@if ($f2 <= 0)
$f2="NO";
@endif

@php
$f3 = $sr - $csr;
@endphp
@if ($f3 <= 0)
$f3="NO";
@endif

@php
$f4 = $dr - $cdr;
@endphp
@if ($f4 <= 0)
$f4="NO";
@endif

@php
$f5 = $r - $cr;
@endphp
@if ($f5 <= 0)
$f5="NO";
@endif
