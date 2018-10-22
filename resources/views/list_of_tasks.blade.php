@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header mb-3">
                    <h3 class="my-title">Responsive Hover Table</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm focused" style="width: 150px;">
                            <input name="table_search" class="form-control float-right" placeholder="Search"
                                   type="text">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-secondary"><i class="icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Device Name</th>
                            <th>Problem</th>
                            <th>Date</th>
                            <th colspan="2">
                                <a href="{{route('dashboard')}}" class="btn btn-primary">
                                    <span class="icon-home"></span>&ensp;Dashboard
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->customer_name}}</td>
                                <td>{{$task->phone}}</td>
                                <td>{{$task->device_name}}</td>
                                <td>
                                    <span class="badge text-white badge text-white-pill badge text-white-success">Approved</span>
                                </td>
                                <td>Bacon ipsum dolor sit</td>
                                <td>
                                    <a href="{{route('Tasks.edit',$task->id)}}" class="btn btn-dark">
                                        <i class="icon-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-lg toast-action"
                                            data-title="Hey, Bro!"
                                            data-message="Paper Panel has toast as well."
                                            data-type="info"
                                            data-position-class="toast-bottom-right">
                                        Info Toast</button>
                                    <a href="javascript:" class="btn btn-danger"
                                       onclick="event.preventDefault();document.getElementById('delete_task_{{$task->id}}').submit();">
                                        <i class="icon-trash"></i>
                                    </a>
                                    <form id="delete_task_{{$task->id}}" action="{{route('Tasks.destroy',$task->id)}}"
                                          method="post" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-body table-responsive no-padding">
                    <button onclick="$('#my_modal').modal('show')" class="btn btn-warning">
                        Click Me
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modelTitleId"></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="$('#my_modal').modal('hide')">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('script')

@endsection