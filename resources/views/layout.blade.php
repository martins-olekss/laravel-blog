<html>
<head>
    <title>3dom</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/posts">Post list</a></li>
        <li><a href="/posts/create">Add new post</a></li>
    </ul>
</nav>

@yield('content')

</body>
</html>
