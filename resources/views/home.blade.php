<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- Header -->
    <header class="bg-dark text-white text-center py-3">
        <h1>My Laravel Shop</h1>
    </header>

    <!-- Banner -->
    <section class="banner text-center my-4">
        <img src="https://via.placeholder.com/1200x400" class="img-fluid" alt="Banner">
    </section>

    <!-- Sản phẩm -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/'.$product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['price'] }}</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 My Laravel Shop. All Rights Reserved.</p>
    </footer>

</body>
</html>
