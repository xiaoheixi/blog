<!DOCTYPE html>
<html>
    <head>
        <title>Product Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Product Management</h1>
        <a href="{{url('createProduct')}}" class="btn btn-primary">Add Product</a>
        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Type</th>
                <th>Link</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($productContent as $product)
                <tr>
                    <td>{{$product->name}}</a></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{ $product->image }}" class="img-thumbnail" width="75" />{{$product->image}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->productLink}}</td>
                    <td><a href="/product/{{ $product->name }}/edit">Modify</a></td>
                    <td>
                        <form action="/product/{{ $product->name }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
