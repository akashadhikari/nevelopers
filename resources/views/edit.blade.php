@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Profile</div>

                <div class="panel-body">

                    <form class="form-vertical" role="form" method="post" action="{{ route('edit') }}">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                        <label for="name" class="control-label">Full name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="">
                                </div>

                                <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" value="">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <button tupe="submit" class="btn btn-default">Update</button>
                        </div>

                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </form>        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

