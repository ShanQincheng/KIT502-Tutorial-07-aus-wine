@extends("layouts.app")
@section("content")
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
                    <td>{{$wine->Name}}</td>
                    <td>{{$wine->Type}}</td>
                    <td>{{$wine->Quantity}}</td>
                    <td>{{$wine->Price}}</td>
                    <td>{{$wine->Region}}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
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
    </div>
@endsection