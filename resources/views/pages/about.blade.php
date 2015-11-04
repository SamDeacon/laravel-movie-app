@extends('app')

@section('content')


    <h1>About me ({{$first}} {{$last}})</h1>
    @if (count($people))
    <h2>People I like:</h2>
    <ul>
        @foreach ($people as $person)
        <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif
    
    @if (count($cars))
    <h2>Cars I like:</h2>
    <ul>
        @foreach ($cars as $car)
        <li>{{ $car }}</li>
        @endforeach
    </ul>
    @endif

    
    

    
    
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
    dolor in hendrerit in vulputate velit esse molestie consequat,
    vel illum dolore eu feugiat nulla facilisis at vero eros et
    accumsan et iusto odio dignissim qui blandit praesent luptatum
    zzril delenit augue duis dolore te feugait nulla facilisi.
    Nam liber tempor cum soluta nobis!</p>
@stop