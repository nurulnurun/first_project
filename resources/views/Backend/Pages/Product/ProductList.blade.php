@extends('Backend.Master')

@section('Main Content')

<div>
    <h1>Product List</h1> <a href="#" class="btn btn-success btn-sm" style = "float:right; margin-top:-50px">Create new Product</a>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SL. No</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Stock</th>
                <th scope="col">Product Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
                
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>
                    
                </td>
                <td></td>
                <td></td>
                <td></td>
            <td>
                <a class="btn btn-success btn-sm" href="">Edit</a>
                <a class="btn btn-danger btn-sm" href="">Delete</a>
                <a class="btn btn-primary btn-sm" href="">View</a>
            </td>
            </tr>
                
        </tbody>
    </table>
</div>

@endsection