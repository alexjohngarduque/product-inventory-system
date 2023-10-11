<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Homepage</title>
</head>

<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        <br>
        @endif
    </div>

    <div>
        <a href="{{ route('product.create') }}">Add Product</a>
        <br>
        <br>
    </div>

    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td colspan="2">
                    <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    <form style="display:inline;" method="post" action="{{ route('product.delete', ['product' => $product]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>

</html>