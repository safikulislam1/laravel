<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    
   <div class="container mt-5">
        <div class="row">
            @if (count($product) > 0)
                @foreach ($product as $item)
                <div class="col-lg-4 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('images/1.svg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Auther Name - <br> {{ $item->auther }}</h5>
                        <p class="card-text"> {{ $item->name }}</p>
                        <p class="card-text"> {{ $item->created_at }}</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                    </div>
            </div>
                @endforeach  
            @endif
        </div>
   </div>
</body>
</html>