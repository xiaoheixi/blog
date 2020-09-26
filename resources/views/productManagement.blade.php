<!DOCTYPE html>
<html>

<head>
    <title>Product Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1>Welcome to Product Management</h1>
        <div class="row">
            @component('layouts.components.adminSideNavBar')
            @endcomponent
            <table class="tableProduct table-bordered" style="width:76%">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Link</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                @foreach($productContent as $product)
                <tr>
                    <td>{{$product->name}}</a></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{ $product->cover_img }}" class="img-thumbnail" width="75" />{{$product->cover_img}}
                    </td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->productLink}}</td>



                    <td><a href="/product/{{ $product->name }}/edit"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Update</button></td> <br>

                    <form class="formDeleteButtonAdminPanel" action="/product/{{ $product->name }}" method="post">
                            @csrf
                            @method('DELETE')

                   <td> <button type="submit" class="btn btn-danger">Delete</button></td>
                   </form>
                    </td>

                    <td>


                        
                        
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <button type="button" class="btnCreateProduct">Add New</button>
        </div>
    </div>
</body>

</html>



<!--

<td><a href="/product/{{ $product->name }}/edit"><button class="modifyButton">Modify</button></a>
                    </td>
                    <td>
                        <form class="formDeleteButtonAdminPanel" action="/product/{{ $product->name }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="deleteButton">Delete</button>
                        </form>
!-->
