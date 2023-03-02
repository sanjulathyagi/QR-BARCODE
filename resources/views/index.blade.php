@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <h1 class="text-danger pt-4 text-center mb-4">List of products</h1>
        <hr>
        <div class="pb-2">
            <a href="/create" class="btn btn-success">New post</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->Title }}</td>
                    <td>{{ $product->Price }}</td>
                    <td>{{ $product->Barcode }}</td>
                    <td>{{ $product->description }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>
@endsection
