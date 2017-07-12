@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
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

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h5>What are you up to?</h5></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
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