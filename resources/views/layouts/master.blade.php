<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/employee.css">
    <title>@yield( 'title' )</title>
</head>
<body>
    @include( 'common.header' )
    @include( 'common.navbar' )
    @include( 'common.sidebar' )
    @yield( 'content' )
    @include( 'common.footer' )
</body>
</html>