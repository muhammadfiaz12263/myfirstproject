@extends(  'layouts.master' )

@section( 'title', 'database' )
@section( 'content' )

<h1>database Page</h1>


<ul>
    @foreach ( $projects as $project )
        <li> {{ $project->name }}</li>
    @endforeach
</ul>


<p>database Page Content</p>
@endsection
