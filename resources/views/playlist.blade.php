<x-layouts.main pageName="Playlist - {{$playlistId}}">

    @section('content')
        <x-layouts.song-list :songs="$songs">
        </x-layouts.song-list>
    @endsection

</x-layouts.main>
