<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .product {
            flex: 1;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>

    <div class="container">
        @foreach ($products as $product)
        @if($product['name'] == $n )
        <div class="product">
            <p><strong>Name:</strong> {{ $product['name'] }}</p>
            <p><strong>Brand:</strong> {{ $product['brand'] }}</p>
            <p><strong>Price:</strong> {{ $product['Price'] }}</p>
        </div>
        @endif
        @endforeach
    </div>
</body>
</html>
