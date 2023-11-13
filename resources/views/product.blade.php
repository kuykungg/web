<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>G9-SPORT shop</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
</head>
<body>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="{{route('productspage')}}">product</a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('productspage')}}">product</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./Nav bar -->
    <!-- sort bar -->
<div class="container mt-5">
    <form action="{{route('productspage')}}" method ="POST" class="form-inline">
        @csrf
        <div class="form-group ar-3">
            <label  for="largeSelect">sort by:</label>
            <select class="from-control."  id="largeSelect" name="sortby" >
                <option value="1"@if ($sortby == 1) selected @endif>popular</option>
                <option value="2"@if ($sortby == 2) selected @endif>alphabet a-z</option>
                <option value="3"@if ($sortby == 3) selected @endif>alphabet z-a</option>
                <option value="4"@if ($sortby == 4) selected @endif>oldest</option>
                <option value="5"@if ($sortby == 5) selected @endif>newest</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>
    <!-- /sort bar -->
    <div class="bg-light">
        <div class="container">
            <div class="row">

                @foreach ($product as $product)
                <div class="col-md-4">

                    <div class="card m-1 shadow-sm">
                        <img class="card-img-top img-thumbnail" src="{{$product->image}}">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <div class="d-none d-print-block d-print-none">
                                    {{$record = App\Models\Brand::find($product->brand_id);}}
                                    {{$brand_name = $record->name}}
                                </div>
                                <div style="text-align: center; font-weight: bold; font-size: 20px">{{$brand_name}} {{$product->name}}</div>
                                <span style="font-size: 15px;">{{$product->price}}</span> <span style="font-size: 15px;">bath</span>
                            </div>
                            <div class="text-center">
                                <!-- button detail -->
                                <form action="{{route('detail',$product->product_id)}}">
                                    <button class="information">
                                        details
                                    </button>
                                </form>


                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>
    <footer>
        <p class="text-center center-block">
            Developer By <a href="https://www.facebook.com/profile.php?id=100093050460973">G9-SPORT</a>
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
