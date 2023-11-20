<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Product Details</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Descriptions</th>
                <th>Describe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pros as $pro)
            <tr class="product">
                <td>{{ $pro['Id'] }}</td>
                <td>{{ $pro['Name'] }}</td>
                <td>{{ $pro['Descriptions'] }}</td>
                <td>{{ $pro['Describe'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
