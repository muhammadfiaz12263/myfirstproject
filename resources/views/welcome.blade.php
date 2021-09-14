@extends(  'layouts.master' )

@section( 'title', 'Welcome' )
@section( 'content' )

<h1>Welcome Page</h1>

<ul>
    <?php foreach( $persons as $person ): ?>
    <li><?= $person; ?></li>
    <?php endforeach; ?>
</ul>
<ul>
    @foreach ( $persons as $person )
        <li> {{$person}}</li>
    @endforeach
</ul>

<p><strong>Name:</strong>{{ $name }}</p>
<!-- <p>{{ $js }}</p> -->
<!-- for as it is -->
<p>{!! $js !!}</p>
<p>Welcome Page Content</p>
@endsection