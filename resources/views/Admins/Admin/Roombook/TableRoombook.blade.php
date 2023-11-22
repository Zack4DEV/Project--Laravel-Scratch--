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
            $id = $request->session()->get('id');
            $roombookresult = DB::table("roombook");
            ->select(array("id","Name","Email","Country","Phone","roomtype","Bed","NoofRoom","Meal","cin","cout","nodays","stat"))
            ->where('id',"=","$id");
            ->get();
            @endphp
            @foreach ($roombookresult as $res)
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
                    {{ $res->Email }}
                </td>
                <td>
                    {{ $res->Country }}
                </td>
                <td>
                    {{ $res->Phone }}
                </td>
                <td>
                    {{ $res->roomtype }}
                </td>
                <td>
                    {{ $res->Bed }}
                </td>
                <td>
                    {{ $res->NoofRoom }}
                </td>
                <td>
                    {{ $res->Meal }}
                </td>
                <td>
                    {{ $res->cin }}
                </td>
                <td>
                    {{ $res->cout }}
                </td>
                <td>
                    {{ $res->nodays }}
                </td>
                <td>
                    {{ $res->stat }}
                </td>
                <td class="action">
                    @php
                    if($res->stat] == "Confirm"){
                    echo " ";
                    } else{
                    }
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/EditConfirm/CRoombook?id=$res->id" )
                    }}'><button class='btn btn-success'>Confirm</button></a>
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/EditConfirm/ERoombook?id=" . " $res->id " )
                     }}'><button class="btn btn-primary">Edit</button></a>
                    <a href='{{
                        asset( "/resources/views/Admins/Admin/AddDelete/DRoombook?id=" . " $res->id " )
                    }}'><button class='btn btn-danger'>Delete</button></a>
                    @endphp
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
