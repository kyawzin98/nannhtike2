@extends('master')
@section('content')
    <div class="row row-eq-height my-3">
        <div class="col-md-3 col-sm-6">
            <a href="{{route('Tasks.index')}}" class="text-primary">
                <div class="card no-b mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="icon-list s-18"></i></div>
                            <div><span class="badge badge-pill badge-primary">4:30</span></div>
                        </div>
                        <div class="text-center">
                            <div class="s-48 my-3 font-weight-lighter">68</div>
                            View All List
                        </div>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#" class="text-success">
                <div class="card no-b mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="icon-work s-18"></i></div>
                            <div><span class="badge badge-pill badge-danger">4:30</span></div>
                        </div>
                        <div class="text-center">
                            <div class="s-48 my-3 font-weight-lighter">170</div>
                            Finished Work
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#" class="text-danger">
                <div class="card no-b mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="icon-work s-18"></i></div>
                            <div><span class="badge badge-pill badge-danger">4:30</span></div>
                        </div>
                        <div class="text-center">
                            <div class="s-48 my-3 font-weight-lighter">170</div>
                            Unfinished Work
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{route('Tasks.create')}}" class="text-success">
                <div class="card no-b mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="text-success">40+35</span></div>
                        </div>
                        <div class="text-center">
                            <div class="s-48 my-3 font-weight-lighter">
                                <i class="icon-plus"></i>
                            </div>
                            Add Work To List
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection