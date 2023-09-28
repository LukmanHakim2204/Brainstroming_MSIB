@include('component.app')

    <div class="container mt-4">
      <div class="alert alert-primary" role="alert">
        Data Transasaksi
      </div>
      <table class="table-dark" >
        <thead>
          <tr class="table-primary">
            <th scope="col">iD</th>
            <th scope="col">Waktu Transaksi</th>
            <th scope="col">Nama Transaksi</th>
            <th scope="col">Jenis Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Price</th>
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
            <td>{{ $transaction->user->username }}</td>
            <td>{{ $transaction->product->product_name }}</td>
            <td>{{ $transaction->quantity }}</td>
            <td>{{ $transaction->subtotal_price }}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>