<div class="slider product-slider">
  @foreach($products as $product)

    <div class="slider-item">
      <a href="{{ route('products.show', [app()->getLocale(), $product->id]) }}" class="product-card">
        <img src="{{ asset($product->imgUrl) }}" alt="product {{ $product->name }}">
        <h5 class="product-name">{{ $product->name }}</h5>
        <div class="button product-see-more">More</div>
      </a>
    </div>

  @endforeach
</div>
