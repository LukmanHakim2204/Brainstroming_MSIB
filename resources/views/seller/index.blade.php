@include('component.app')
<body>
    @section('content')
        <div class="container">
            <h1>Data Seller </h1>
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
                        <td>{{ $seller->name }}</td>
                        <td>{{ $seller->email }}</td>
                        <td>{{ $seller->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

    </html>
