<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link hrel="" ref="">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{$title}}</title>
</head>
<body>

    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
                <div class="col-sm-10">
                    {{$content}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>
