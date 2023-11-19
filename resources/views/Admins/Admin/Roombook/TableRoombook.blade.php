<div class="roombooktable" class="table-responsive-xl">
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
            </tr>
        </thead>

        <tbody>
            @php
            $roombookresult = array();
            @endphp
            @foreach ($roombookresult as $res)
            <tr>
                <td>
                    @php('echo "$res[id]"')
                </td>
                <td>
                    @php('echo "$res[id]"')
                </td>
                <td>
                    @php('echo "$res[Name]"')
                </td>
                <td>
                    @php('echo "$res[Email]"')
                </td>
                <td>
                    @php('echo "$res[Country]"')
                </td>
                <td>
                    @php('echo "$res[Phone]"')
                </td>
                <td>
                    @php('echo "$res[roomtype]"')
                </td>
                <td>
                    @php('echo "$res[Bed]"')
                </td>
                <td>
                    @php('echo "$res[NoofRoom]"')
                </td>
                <td>
                    @php('echo "$res[Meal]"')
                </td>
                <td>
                    @php('echo "$res[cin]"')
                </td>
                <td>
                    @php('echo "$res[cout]"')
                </td>
                <td>
                    @php('echo "$res[nodays]"')
                </td>
                <td>
                    @php('echo "$res[stat]"')
                </td>
                <td class="action">
                    @php
                    if($res[stat] == "Confirm"){
                    echo " ";
                    } else{
                    $res_id = $res['id'];
                    }
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/EditConfirm/CRoombook?id=$res_id" )
                    }}'><button class='btn btn-success'>Confirm</button></a>
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/EditConfirm/ERoombook?id=" . " $res_id " )
                     }}'><button class="btn btn-primary">Edit</button></a>
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/AddDelete/DRoombook?id=" . " $res_id " )
                    }}'><button class='btn btn-danger'>Delete</button></a>
                    @endphp
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
