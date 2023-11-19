@include('Admins.Admin.Invoice')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('/public/Admin/css/roombook.css') }}">
@endpush

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="searchsection">
    <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
</div>

<div class="roombooktable" class="table-responsive-xl">

    @php
    $paymantresult = DB::select("SELECT * FROM payment");
    $nums = mysqli_num_rows($paymantresult);
    @endphp

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
                <!-- <th>Delete</th> -->
            </tr>
        </thead>

        <tbody>
            @foreach ($paymantresult as $res)
            $r2=$res['id'] + 6;
            $res_id = $res['id'];
            <tr>
                <td>
                    @php echo $res['id'] @endphp
                </td>
                <td>
                    @php echo $r2 @endphp
                </td>
                <td>
                    @php echo $res['Name'] @endphp
                </td>
                <td>
                    @php echo $res['roomtype'] @endphp
                </td>
                <td>
                    @php echo $res['Bed'] @endphp
                </td>
                <td>
                    @php echo $res['cin'] @endphp
                </td>
                <td>
                    @php echo $res['cout'] @endphp
                </td>
                <td>
                    @php echo $res['noofdays'] @endphp
                </td>
                <td>
                    @php echo $res['NoofRoom'] @endphp
                </td>
                <td>
                    @php echo $res['meal'] @endphp
                </td>
                <td>
                    @php echo $res['roomtotal'] @endphp
                </td>
                <td>
                    @php echo $res['bedtotal'] @endphp
                </td>
                <td>
                    @php echo $res['mealtotal'] @endphp
                </td>
                <td>
                    @php echo $res['finaltotal'] @endphp
                </td>
                <td class="action">
                    <a href='{{
                        asset( "/resources/views/Admins/Invoice?id=" . " $res_id " )
                     }}'><button class="btn btn-primary"><i class="fa-solid fa-print"></i>Print</button></a>
                    <!--
                        <a href='{{
                        asset( "/resources/views/Admins/Admin/AddDelete/DPayment?id=" . " $res_id " )
                     }}'><button class="btn btn-danger">Delete</button></a>
                    -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
