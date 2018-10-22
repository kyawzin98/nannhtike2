@extends('master')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
@endsection
@section('content')
    <div class="container">
        <form action="{{route('Tasks.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Customer Name</label>
                <input type="text" class="form-control" name="customer_name" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Device Name</label>
                <input type="text" class="form-control" name="device_name" id="" aria-describedby="helpId" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection