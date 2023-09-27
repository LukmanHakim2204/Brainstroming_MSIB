<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Data Users</title>
  </head>
  <body>
    <div class="container">
        <h1>Data Users </h1>
        <table>
            <tr>
                <th>Id Seller</th>
                <th>Username</th>
                <th>Email</th>
                <th>Create At</th>
            </tr>
            @foreach ($sellers as $seller)
            <tr>
                <td>{{ $seller->id_seller }}</td>
                <td>{{ $seller->username }}</td>
                <td>{{ $seller->email }}</td>
                <td>{{ $seller->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div> 
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>