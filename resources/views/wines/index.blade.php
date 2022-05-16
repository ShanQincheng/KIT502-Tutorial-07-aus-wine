@extends("layouts.app")
@section("content")
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="container">
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addNewWineModal">
            Add a new wine</button>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Region</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wines as $wine)
                <tr>
                    <td id="name-wine-{{$loop->index}}" name="name-wine-{{$loop->index}}">{{$wine->Name}}</td>
                    <td id="type-wine-{{$loop->index}}" name="type-wine-{{$loop->index}}">{{$wine->Type}}</td>
                    <td id="qty-wine-{{$loop->index}}" name="qty-wine-{{$loop->index}}">{{$wine->Quantity}}</td>
                    <td id="price-wine-{{$loop->index}}" name="price-wine-{{$loop->index}}">{{$wine->Price}}</td>
                    <td id="region-wine-{{$loop->index}}" name="region-wine-{{$loop->index}}">{{$wine->Region}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editWineModal"
                                value="{{$loop->index}}" onclick="editWine(this.value)">Edit</button>
                        <button type="button" class="btn btn-danger"
                                value="{{$wine->Name}}" onclick="deleteWine(this.value)">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('home')}}"> Go to Home page</a>
    </div>

    <!-- modal -->
    <div>
        @include('wines.add-new-wine')
        @include('wines.edit-wine')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/wines-index.js') }}"></script>
@endpush