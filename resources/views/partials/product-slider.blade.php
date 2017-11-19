@if( isset($products) && count($products) > 0 )
  <div class="slider product-slider">
    @foreach($products as $product)

      <div class="slider-item">
        <a href="{{ route('products.show', [app()->getLocale(), $product->id]) }}" class="product-card">
          <img src="{{ asset('products/' . $product->imgUrl) }}" alt="product {{ $product->name }}">
          <h5 class="product-name">{{ $product->name }}</h5>
          <div class="button product-see-more">@lang('product/index.more_btn')</div>
        </a>
      </div>

    @endforeach
  </div>
@else
  <p class="text-center">No product.</p>
@endif

