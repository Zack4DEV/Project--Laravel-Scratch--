@extends('Admins.Admin.Invoice')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Payment')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ URL::asset('/admin/css/roombook.css') }}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>


<div class="searchsection">
    <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
</div>

<div class="roombooktable" class="table-responsive-xl">

    @foreach ($paymantresult as $res);

    <table class="table table-bordered" id="table-data">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Room Nº</th>
                <th scope="col">Name</th>
                <th scope="col">Room Type</th>
                <th scope="col">Bed Type</th>
                <th scope="col">Check In</th>
                <th scope="col">Check In</th>
                <th scope="col">No of Day</th>
                <th scope="col">No of Room</th>
                <th scope="col">Meal Type</th>
                <th scope="col">Room Rent</th>
                <th scope="col">Bed Rent</th>
                <th scope="col">Meals</th>
                <th scope="col">Total Bill</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @foreach($paymantresult as $res)
        <tbody>
            <tr>
                <td>
                    {{ $res->id }}
                </td>
                <td>
                    {{ $res->id }}
                </td>
                <td>
                    {{ $res->Name }}
                </td>
                <td>
                    {{ $res->roomtype }}
                </td>
                <td>
                    {{ $res->Bed }}
                </td>
                <td>
                    {{ $res->cin }}
                </td>
                <td>
                    {{ $res->cout }}
                </td>
                <td>
                    {{ $res->noofdays }}
                </td>
                <td>
                    {{ $res->NoofRoom }}
                </td>
                <td>
                    {{ $res->meal }}
                </td>
                <td>
                    {{ $res->roomtotal }}
                </td>
                <td>
                    {{ $res->bedtotal }}
                </td>
                <td>
                    {{ $res->mealtotal }}
                </td>
                <td>
                    {{ $res->finaltotal }}
                </td>
                <td class="action">
                    <a href="{{ URL::to( '/admin/invoice' ) }}"><button class="btn btn-primary"><i class="fa-solid fa-print"></i>Print</button></a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
    </body>
</html>