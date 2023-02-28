@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card px-5 mt-3 shadow">
                <h1 class="text-primary pt-4 text-center mb-4">Generate Barcode in Laravel</h1>

                <form action="/post" method="post">
                    @csrf
                    <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    <label for="">Price</label>
                        <input type="number" name="price" class="form-control" required>
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="5" required></textarea>
                    <button type="submit" class="btn btn-success" col-md-3>Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
