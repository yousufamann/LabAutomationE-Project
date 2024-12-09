@extends('Layout.AdminTemplate')

@section('AdminContent')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1
                style="color:rgb(24, 34, 184); font-family: Verdana, Geneva,
                Tahoma, sans-serif; font-weight:600; font-size:40px">
                    Assign Products
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <form action="{{ url('product/assign/' . $product->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tester</label>
                    <select name="user" class="form-control" id="">
                        @foreach ($user as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Types
                    </label>
                    <select name="testingType" class="form-control" id="">
                        @foreach ($testingTypes as $testingType)
                            <option value="{{ $testingType->id }}">{{ $testingType->TestingTypes }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
