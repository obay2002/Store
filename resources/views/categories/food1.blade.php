@extends('my_design.index')
@section('food')

<div class="product-container">
    @foreach($product as $productItem)
    <div class="product-card">
        <img src="{{ asset('images/' . $productItem->ImagePath) }}" alt="صورة المنتج" style="width: 200px; /* تعيين العرض المطلوب */
        height: 200px; /* تعيين الارتفاع المطلوب */
        object-fit: cover; ">
        <p>{{ $productItem->description }}</p>
        <p class="price">${{ $productItem->price }}</p>
    </div>
    @endforeach
</div>

@endsection