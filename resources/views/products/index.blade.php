@include('component.app')
{{-- @include('component.header') --}}
    <body>
        <div class="container">
            <h1>Data Products </h1>
            <table>
                <tr>
                    <th>Id Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Create At</th>

                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id_product }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </table>
            <div>
                Showing
                {{ $products->firstItem() }}
                of
                {{ $products->lastItem() }}
                to
                {{ $products->total() }}
                entries
            </div>
            <div class="d-flex flex-row-reverse ">
                {{ $products->links() }}
            </div>
        </div>
    </body>

