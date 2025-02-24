<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Danh sách sản phẩm</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Thêm sản phẩm</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td><img src="{{ $product['avatar'] }}" alt="{{ $product['name'] }}" style="width:100px; height:100px"></td>
                        <td>{{ $product['createdAt'] }}</td>
                    
                        <td>
                            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
                            @csrf    
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>