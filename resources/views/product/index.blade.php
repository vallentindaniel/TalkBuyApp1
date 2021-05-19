


<!DOCTYPE html>
<html>
<head>
<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>


<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
            </ul>
        </div>
    </div>
</nav>




<section>
    <div class="container mt-2">
        <h1>Cele mai noi</h1>
        <div class="card-group justify-content-center">
            @foreach($products as $product)
            <div class="card" style="border-width: 5px;min-width: 300px;max-width: 360px;">
            <img class="card-img-top w-100 d-block" src="{{'/public/storage/'.$product->img}}" />
                <div class="card-body">
                    <h6 class="text-success float-right card-title">{{ $product->price }}</h6>
                    <h4 class="card-title">{{!! $product->title !!}} </h4>
                    <p class="card-text">{{!! html_entity_decode($product->description) !!}}</p>
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-star"></i>Imi place
                    </button>
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-eye"></i>Vezi produs
                    </button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>




<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


