@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $user->name }}</h4></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection