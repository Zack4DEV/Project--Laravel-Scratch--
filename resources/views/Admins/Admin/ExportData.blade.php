@extends('Admins.Admin.Roombook');


@php

$result = DB::table("roombook")
        ->select("*")
        ->where('id', $id)
        ->get();

$roombook_record = array();
@endphp

@foreach( $result as $rows)
$roombook_record[] = $rows;
@endforeach

@if (isset($_POST["exportexcel"]))

$filename = "hotel_roombook_data_".date('Ymd') .".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
@if(!empty($roombook_record))

@foreach($roombook_record as $record)

@if(!$show_coloumn)
echo implode("\t",array_keys($record)) . "\n";
$show_coloumn = true;

@endif

echo implode("\t", array_values($record)) . "\n";
@endif

@endif

@php("exit")
@endif
