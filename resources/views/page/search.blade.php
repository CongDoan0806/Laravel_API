@extends('page.master')
@section('content')
    <div class="container d-flex flex-wrap gap-5 justify-content-between">
        @if($products->isEmpty())
            <div class="">Khong tim thay Product</div>
        @endif
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="/source/image/product/{{ $product->image }}" class="card-img-top" alt="{{ $product->image }}" style="max-height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->name }}</p>
                    <p class="card-text">{{ $product->unit_price }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
</html>