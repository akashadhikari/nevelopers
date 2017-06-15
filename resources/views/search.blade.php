@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Search results for "{{ Request::input('query') }}"</h4></div>

                <div class="panel-body">

                    @if(!$users->count())
                        <p>No results found. Try again with a proper name.</p>
                    @else

                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($users as $user)
                                @include('user/partials/userblock')
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection