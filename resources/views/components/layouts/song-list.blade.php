<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Artists</th>
        <th>Album</th>
        <th>Duration</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($songs as $songs )
    <tr>
        <td>1</td>
        <td>{{$songs->getTitle()}}</td>
        <td>{{$songs->getArtist()}}</td>
        <td>Album 1</td>
        <td>3:30</td>
    </tr>
    @endforeach
    </tbody>
</table>
