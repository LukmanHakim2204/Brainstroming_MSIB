@include('component.app')

<div class="container mt-4">
    <h1> Data Transaksi</h1>
    <table class="table-dark">
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Waktu Transaksi</th>
                <th scope="col">Nama Penjual</th>
                <th scope="col">Nama Transaksi</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Quantity</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @php
            $count = 1; // Inisialisasi variabel penghitung
            @endphp
            @foreach ($transactions as $transaction)
            <tr class="table-success">
                <th scope="row">{{ $count++ }}</th>
                <td>{{ $transaction->date_transaction }}</td>
                <td>{{ $transaction->seller->name }}</td> {{-- Ganti dengan nama penjual --}}
                <td>{{ $transaction->user->username }}</td>
                <td>{{ $transaction->product->product_name }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->subtotal_price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
