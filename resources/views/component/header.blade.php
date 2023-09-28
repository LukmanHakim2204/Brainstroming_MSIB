<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" >Beli Dong</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- Membuat menu navbar di sebelah kanan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Users.index') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Products.index') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Transaction.index') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Sellers.index') }}">Seller</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
