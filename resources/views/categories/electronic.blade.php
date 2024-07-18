@extends('my_design.index')
@section('electrical')
<div class="product-container">
    @foreach($product as $productItem)
        <div class="product-card">
            <img src="{{ asset('images/' . $productItem->ImagePath) }}" alt="صورة المنتج" style="width: 200px; height: 200px; object-fit: cover;">
            <p style="color: brown">{{ $productItem->name }}</p>
            <p>{{ $productItem->description }}</p>
            <p class="price">${{ $productItem->price }}</p>
            <form action="{{ route('product.destroy', $productItem->id) }}" method="post">
                @csrf
                {{-- form method spoofing --}}
                @method('delete')
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
        </div>
    @endforeach
</div>


@endsection