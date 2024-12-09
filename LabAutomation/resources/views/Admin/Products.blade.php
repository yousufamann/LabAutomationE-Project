@extends('Layout.AdminTemplate')

@section('AdminContent')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1
                    style="color:rgb(24, 34, 184); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight:600; font-size:40px">
                    Products
                </h1>
            </div>
        </div>
        <center>
            <form action="{{url('productsearch')}}" method="get">
                @csrf
                <input type="search" name="search" class="form-control" style="width: 30%">
                <br>
                <button class="btn btn-primary">Search</button>
                <a href="{{url('productrefresh')}}" class="btn btn-success">Refresh</a>
            </form>
        </center>
        <div class="row">
            <div class="col-3 m-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Products
                </button>
            </div>
        </div>
    </div>

    <!-- Table Start -->
    <div class="row">
        <div class="col">
            <table class= "table text-center mx-auto" style="color:rgb(79, 84, 155)">
                <thead>
                    <tr>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">S.NO</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Tracking id</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Product Name</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Product Description</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Product Image</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Action</th>
                        <th style="color:rgb(72, 83, 243);font-size:18px;font-weight: 500">Assign</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <br>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Trackingid }}</td>
                            <td>{{ $item->ProductName }}</td>
                            <td>{{ $item->ProductDescription }}</td>
                            <td><img width="100px" height="90px" src="ProductImages/{{ $item->ProductImage }}"alt=""></td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <button class="btn btn-link editBtn"
                                            data-description="{{ $item->ProductDescription }}" data-id="{{ $item->id }}"
                                            data-name="{{ $item->ProductName }}" data-bs-toggle="modal"
                                            data-bs-target="#EditModal">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="col-lg-2" style="padding-top:8px">
                                        |
                                    </div>
                                    <div class="col-lg-5">
                                        <form action="products/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button type ="submit" class="btn"
                                                style="color:rgb(196, 46, 20);padding-top: 10px">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a class="btn" href="{{url('products/assign/'.$item->id)}}" >
                                    <img width="32" height="32" src="https://img.icons8.com/stencil/32/tasks.png" alt="tasks"/>
                                    </a>
                                    |
                                    <a href="{{url('download-PDF', $item->id)}}">record</a>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->

    <!-- Add Products Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="products" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="Product_Name">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" class="form-control" name="Product_Description">
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" class="form-control" name="Product_Image">
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

    <!-- Edit Products Modal-->
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" action="{{ url('items.update', ['item' => 0]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="editItemId" name="id" value="">
                        <div class = "mb-3">
                            <label>Product Name</label>
                            <input type="text" id="editName" class="form-control" name="productname"
                                value="">
                        </div>
                        <div class = "mb-3">
                            <label>Product Description</label>
                            <input type="text" id="editDescription" class="form-control" name="productdescription"
                                value="">
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
            $('.editBtn').on('click', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var description = $(this).data('description');

                // Set the data in the modal
                $('#editItemId').val(id);
                $('#editName').val(name);
                $('#editDescription').val(name);

                // Set the action for the form dynamically
                $('#editForm').attr('action', '/productupdate/' + id);
            });
        });
    </script>
@endsection
