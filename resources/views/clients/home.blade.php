@extends('layout.app')
@section('content')
    <div class="row">
        @foreach ($listProduct as $item)
            <div class="col-xl-4 col-md-6">
                <div class="card" style="width: 18rem; margin: 0.5rem;">
                    <a href="#"> <img src="{{ $item->image_url }}" alt="Thanhdz" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product_name }}</h5>
                        <p class="card-text">{{ $item->price }}</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
