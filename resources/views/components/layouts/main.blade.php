<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>
<header>
    <h6>Playlist</h6>
        <h1>Daily Mix 1</h1>
        <p>A playlist consisting of your fav artists</p>
</header>

<sidebar>
    <div class="nav-options">Home</div>
    <div class="nav-options">Search</div>
    <div class="nav-options">My Playlists</div>
    <div class="playlist-item">Playlist 1</div>
    <div class="playlist-item">Playlist 2</div>
</sidebar>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2023 Playlist Viewer | <a href="#">About</a> | <a href="#">Privacy</a></p>
</footer>
</body>
</html>
