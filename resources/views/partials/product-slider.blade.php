<div class="slider product-slider">
  @foreach($products as $product)

    <div class="slider-item">
      <a href="{{ route('products.show', [app()->getLocale(), $product->id]) }}" class="product">
        <h5 class="product-name">{{ $product->name }}</h5>
        <img src="{{ asset($product->imgUrl) }}" alt="product {{ $product->name }}">
      </a>
    </div>

  @endforeach
</div>
