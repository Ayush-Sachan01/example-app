<!DOCTYPE html>
<html>
<head>
    <title>Song List</title>
    <style>
        /* Just some basic styling for the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Song List</h2>

<table>
    <tr>
        <th>Song Name</th>
        <th>Artist</th>
    </tr>
    @foreach ($songs as $song)
    <tr>
        <td>{{ $song -> getTitle() }}</td>
        <td>{{ $song -> getArtist() }}</td>
    </tr>
    @endforeach

    <!-- Add more rows as needed -->
</table>

</body>
</html>

