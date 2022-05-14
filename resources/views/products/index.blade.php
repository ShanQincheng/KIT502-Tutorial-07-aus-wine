@extends("layouts.app")
@section("content")
    <div class="container">
        <h1>Products</h1>

        @foreach($products as $product)
            <span>
                {{-- dispaly the id --}}
                Found: {{$product->id}}
            </span>
            <h2>
                {{-- display product name --}}
                {{$product->product_name}}
            </h2>
            <p>
                {{--display the price --}}
                Price: ${{$product->price}}
            </p>
        @endforeach

        <a href="{{route('products')}}"> Go to Product page</a>
    </div>
@endsection