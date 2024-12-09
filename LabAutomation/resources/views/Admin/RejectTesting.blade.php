@extends('Layout.TestingDetailsTemplate')

@section('TestContent')
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h1
                    style="color:rgb(24, 34, 184); font-family: Verdana, Geneva,
           Tahoma, sans-serif; font-weight:600; font-size:40px">
                    Reject Testing
                </h1>
            </div>
        </div>
    </div>

    <!-- Table Start -->
    <div class="row mt-3">
        <div class="col">
            <table class="table text-center" style="color: rgb(141, 158, 179)">
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
                        {{-- <th --}}
                        {{-- style="color:white; background-color:rgb(17, 54,
                         100); --}}
                        {{-- /* font-size:18px; font-weight:500"> */ --}}
                        {{-- Action --}}
                        {{-- </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($TestReject as $rejecttesting)
                        <tr>
                            <td>{{ $rejecttesting->id }}</td>
                            <td>{{ $rejecttesting->trackingid }}</td>
                            <td>{{ $rejecttesting->Trackingid }}</td>
                            <td>{{ $rejecttesting->name }}</td>
                            <td>{{ $rejecttesting->ProductName }}</td>
                            <td>{{ $rejecttesting->TestingTypes }}</td>
                            <td>{{ $rejecttesting->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
@endsection
