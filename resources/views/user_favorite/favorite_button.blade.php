                @if (Auth::user()->is_favoriting($micropost->id))
                {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Unfavorite', ['class' => 'btn btn-success btn-xs']) !!}
                @else
                    {!! Form::open(['route' => ['user.favorite', $micropost->id], 'method' => 'post']) !!}
                    {!! Form::submit('Favorite', ['class' => "btn btn-default btn-xs"]) !!}
                    {!! Form::close() !!}
            {!! Form::close() !!}
    @endif
           