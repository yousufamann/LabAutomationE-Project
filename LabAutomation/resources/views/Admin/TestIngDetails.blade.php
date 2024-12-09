@extends('Layout.TestingDetailsTemplate')

@section('TestContent')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h1 class="text-center"
                    style="color:rgb(52, 102, 163);font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 600;font-size: 40px">
                    Testing Details</h1>
            </div>
        </div>
    </div>

    <!-- Table Start -->
    <div class="row mt-3">
        <div class="col">
            <table class="table text-center" style="color: rgb(92, 122, 161)">
                <thead>
                    <tr>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            S.NO
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                             font-size:18px; font-weight:500">
                            Trackingid
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            Product Trackingid
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            User Name
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            Product Name
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            Testing Types
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                            font-size:18px; font-weight:500">
                            Status
                        </th>
                        <th
                            style="color:white; background-color:rgb(17, 54, 100);
                          font-size:18px; font-weight:500">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($TestingDetails as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->trackingid }}</td>
                            <td>{{ $item->Trackingid }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->ProductName }}</td>
                            <td>{{ $item->TestingTypes }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href= "approve/{{ $item->id }}">
                                  <button class="btn btn-success"> Approve</button>
                                </a>
                                <a href= "reject/{{ $item->id }}" >
                                    <button class="btn btn-danger">Reject</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
@endsection
