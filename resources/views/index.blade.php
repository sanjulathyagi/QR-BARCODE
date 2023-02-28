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
                <tr>
                    <td>1</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Barcode</td>
                    <td>text</td>
                </tr>
            </tbody>

        </table>

    </div>
</div>
@endsection
