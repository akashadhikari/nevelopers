@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user->name }}'s profile</div>

                <div class="panel-body">
                    Stuff
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user->name }}'s profile</div>

                <div class="panel-body">
                    Stuff
                </div>
            </div>
        </div>
    </div>
</div>
@endsection