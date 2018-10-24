@extends('master')
@section('content')
    <div class="cotainer">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{route('Tasks.update',$task->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Customer Name</label>
                        <input type="text" class="form-control" name="customer_name" id="" value="{{$task->customer_name}}" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" id="" value="{{$task->phone}}" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Device Name</label>
                        <input type="text" class="form-control" name="device_name" id="" value="{{$task->device_name}}" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection