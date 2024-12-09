@extends('Layout.AdminTemplate')

@section('AdminContent')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1
                    style="color:rgb(24, 34, 184); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight:600; font-size:40px">
                    Testing Types
                </h1>
            </div>
            <center>
                <form action="{{url('testingsearch')}}" method="get">
                    @csrf
                    <input type="search" name="search" class="form-control" style="width:30%">
                    <br>
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('testingrefresh')}}" class="btn btn-success">Refresh</a>
                </form>
            </center>
        </div>
        <div class="row">
            <div class="col-3 m-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Testing Types
                </button>
            </div>
        </div>
    </div>

    <!-- Table Start -->
    <div class="row mt-4">
        <div class="col">
            <table class= "table text-center mx-auto" style="color: rgb(79, 84, 155)">
                <thead>
                    <tr>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                              font-weight: 500">
                            S.NO </th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                               font-weight: 500">
                            Testing Type </th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                              font-weight: 500">
                            Description </th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                              font-weight: 500">
                            Testing Type Image </th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                            font-weight: 500">
                            Action
                        </th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;
                            font-weight: 500">
                            Testing Record
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($TestingTypes as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->TestingTypes }}</td>
                            <td>{{ $item->Description }}</td>
                            <td><img width="100px" height="90px" src="Testing_TypeImage/{{ $item->TestingTypeImages }}"
                                    alt="">
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <button class="btn btn-link Editbtn" data-description="{{ $item->Description }}"
                                            data-id="{{ $item->id }}" data-name="{{ $item->TestingTypes }}"
                                            data-bs-toggle="modal" data-bs-target="#EditModal">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="col-lg-2" style="padding-top: 8px">
                                        |
                                    </div>
                                    <div class="col-lg-5">
                                        <form action="testingtypes/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button type ="submit" class="btn btn-link" style="color:rgb(199, 12, 12)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td><a href="{{url('Download-testing',$item->id)}}">Records</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->

    <!-- Add Testing Types Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Testing Type Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="testingtypes" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Testing Type</label>
                            <input type="text" class="form-control" name="Testing_Type">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="TestingType_Description">
                        </div>
                        <div class="form-group">
                            <label>Testing Type Image</label>
                            <input type="file" class="form-control" name="TestingType_Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Testing Types Modal-->
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Testing Type
                        Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="EditForm" action="{{ url('items.updates', ['item' => 0]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="EditItemId" name="id" value="">
                        <div class = "mb-3">
                            <label>Testing Type</label>
                            <input type="text" id="EditName" class="form-control" name="Testing_Types"
                                value="">
                        </div>
                        <div class = "mb-3">
                            <label>Description</label>
                            <input type="text" id="EditDescription" class="form-control"
                                name="TestingTypes_Description" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            Update Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            // When the edit button is clicked
            $('.Editbtn').on('click', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var description = $(this).data('description');
                // Set the data in the modal
                $('#EditItemId').val(id);
                $('#EditName').val(name);
                $('#EditDescription').val(description);
                // Set the action for the form dynamically
                $('#EditForm').attr('action', '/testingtypeupdate/' + id);
            });
        });
    </script>
@endsection
