<div class="media">
        <a class="pull-left" href="#">
                <img class="media-object" alt="" src=" {{ $user->gravatar() }} ">
        </a>
        <div class="media-body">
                <h4 class="media-heading"><a href="{{$user->username}}">{{ $user->name }}</a> {{'@'}}{{ $user->username }}</h4>
                Pokhara, Nepal
        </div>
</div>