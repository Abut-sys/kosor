<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h5>Categories</h5>
            <ul class="list-group">
                <li class="list-group-item {{ is_null($selectedCategory) ? 'active' : '' }}" wire:click.prevent="selectCategory(null)" style="cursor:pointer;">
                    All
                </li>
                @foreach($categories as $cat)
                    <li class="list-group-item {{ $selectedCategory === $cat ? 'active' : '' }}" wire:click.prevent="selectCategory('{{ $cat }}')" style="cursor:pointer;">
                        {{ $cat }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-9">
            <h4>Products {{ $selectedCategory ? ' — ' . $selectedCategory : '' }}</h4>

            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted">{{ $product->category }}</p>

                                <p class="card-text">
                                    @if(method_exists($product, 'hasDiscount') && $product->hasDiscount())
                                        <span class="text-muted" style="text-decoration: line-through;">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                        <br>
                                        <strong class="text-danger">Rp {{ number_format($product->price_after_discount, 0, ',', '.') }}</strong>
                                        <small class="text-success">&nbsp;({{ (float)$product->discount_percent }}% off)</small>
                                    @else
                                        <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
                                    @endif
                                </p>

                                <p class="card-text"><small class="text-secondary">Stock: {{ $product->stock }}</small></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No products found.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
