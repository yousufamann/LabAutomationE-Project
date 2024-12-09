@extends('Layout.TestingDetailsTemplate')

@section('TestContent')
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <h1
                    style="color:rgb(24, 34, 184); font-family: Verdana, Geneva,
               Tahoma, sans-serif; font-weight:600; font-size:40px">
                    Approve Testing
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
                            {{-- style="color:white; background-color:rgb(17, 54, 100); --}}
                           {{-- /* font-size:18px; font-weight:500"> */ --}}
                            {{-- Action --}}
                        {{-- </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($TestApprove as $approvetesting)
                        <tr>
                            <td>{{ $approvetesting->id }}</td>
                            <td>{{ $approvetesting->trackingid }}</td>
                            <td>{{ $approvetesting->Trackingid }}</td>
                            <td>{{ $approvetesting->name }}</td>
                            <td>{{ $approvetesting->ProductName }}</td>
                            <td>{{ $approvetesting->TestingTypes }}</td>
                            <td>{{ $approvetesting->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
@endsection
