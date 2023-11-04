<div class="roombooktable" class="table-responsive-xl">
    @php
    $roombooktablesql = "SELECT * FROM roombook;--'";
    $roombookresult = mysqli_query($conn, $roombooktablesql);
    $nums = mysqli_num_rows($roombookresult);
    @endphp
    <table class="table table-bordered" id="table-data">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Room Nº</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">Phone</th>
                <th scope="col">Type of Room</th>
                <th scope="col">Type of Bed</th>
                <th scope="col">No of Room</th>
                <th scope="col">Meal</th>
                <th scope="col">Check-In</th>
                <th scope="col">Check-Out</th>
                <th scope="col">No of Day</th>
                <th scope="col">Status</th>
                <th scope="col" class="action">Action</th>
                <!-- <th>Delete</th> -->
            </tr>
        </thead>

        <tbody>

            @while ($res = mysqli_fetch_array($roombookresult))
            $r2 = $res['id'] + 6;
            @endwhile
            <tr>
                <td>
                    @php echo "$res['id']" @endphp
                </td>
                <td>
                    @php echo "$r2" @endphp
                </td>
                <td>
                    @php echo "$res['Name']" @endphp
                </td>
                <td>
                    @php echo "$res['Email']" @endphp
                </td>
                <td>
                    @php echo "$res['Country']" @endphp
                </td>
                <td>
                    @php echo "$res['Phone']" @endphp
                </td>
                <td>
                    @php echo "$res['roomtype']" @endphp
                </td>
                <td>
                    @php echo "$res['Bed']" @endphp
                </td>
                <td>
                    @php echo "$res['NoofRoom']" @endphp
                </td>
                <td>
                    @php echo "$res['Meal']" @endphp
                </td>
                <td>
                    @php echo "$res['cin']" @endphp
                </td>
                <td>
                    @php echo "$res['cout']" @endphp
                </td>
                <td>
                    @php echo "$res['nodays']" @endphp
                </td>
                <td>
                    @php echo "$res['stat']" @endphp
                </td>
                <td class="action">
                    @php
                    if ($res['stat'] == "Confirm"){
                    echo " ";
                    }else{
                    $res_id = $res['id'];
                    echo <a href='{
                        asset( "/resources/views/Admins/Admin/EditConfirm/CRoombook?id=" . " $res_id " )
                    }}'>
                        <button class='btn btn-success'>Confirm</button></a>;
                    }
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/EditConfirm/ERoombook?id=" . " $res_id " )
                     }}'><button class="btn btn-primary">Edit</button></a>
                    <a href='{
                        asset( "/resources/views/Admins/Admin/AddDelete/DRoombook?id=" . " $res_id " )
                    }}'><button class='btn btn-danger'>Delete</button></a>
                    @endphp

                </td>
            </tr>
            @php
            @endphp
        </tbody>
    </table>
</div>
