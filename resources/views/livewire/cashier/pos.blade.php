<div>
    <h3>Produk</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        @if(method_exists($product, 'hasDiscount') && $product->hasDiscount())
                            <span class="text-muted" style="text-decoration: line-through;">Rp {{ number_format($product->price, 2, ',', '.') }}</span>
                            <br>
                            <strong class="text-danger">Rp {{ number_format($product->price_after_discount, 2, ',', '.') }}</strong>
                            <small class="text-success">&nbsp;({{ (float)$product->discount_percent }}% off)</small>
                        @else
                            <strong>Rp {{ number_format($product->price, 2, ',', '.') }}</strong>
                        @endif
                    </td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
