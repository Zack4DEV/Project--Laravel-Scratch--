@php
$rre = DB::table('room')
->select('type')
->where('id', "=", "$id")
->get();

$r = 0;
$sc = 0;
$gh = 0;
$sr = 0;
$dr = 0;
@endphp

@foreach ($rre as $rrow)
$r = $r + 1;
$s = $rrow->type;
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

@php

$cre = DB::table('payment')
->select('roomtype')
->where('id', "=", "$id")
->get();

$cr = 0;
$csc = 0;
$cgh = 0;
$csr = 0;
$cdr = 0;

@endphp

@foreach ($cre as $crow)
$cr = $cr + 1;
$cs = $crow->roomtype;

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

@if ($f5 <= 0) $f5="NO";
@endif
@php
$f5=$r - $cr;
@endphp
@endforeach
