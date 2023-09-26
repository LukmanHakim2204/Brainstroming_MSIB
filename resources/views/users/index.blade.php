<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Data Users</h2>

    <table>
        <tr>
            <th>Id User</th>
            <th>Username</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Create At</th>

        </tr>
        @foreach ($users as $users)
            <tr>
                <td>{{ $users->id_user }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->address }}</td>
                <td>{{ $users->phone }}</td>
                <td>{{ $users->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
