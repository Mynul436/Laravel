@extends('master')
@section('content')
<div class="container custom-product">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach($products as $value)
            
            <div class="item {{$value['id']==1?'active':''}}">
              <a href="detail/{{$value['id']}}">
                <img class="slider-img" src="{{$value['gallery']}}">
                <div class="carousel-caption slider-text">
                  <h3>{{$value['name']}}</h3>
                  <p>{{$value['description']}}</p>
                  <p> Price : {{$value['price']}}</p>

                </div>
              </a>
             
            </div>

          @endforeach
          </div>
 
 
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wraper">

        <h3>Trending Products</h3>
        @foreach($products as $value)
        <div class="trending-item">
          <a href="detail/{{$value['id']}}">
            <img class="trending-img" src="{{$value['gallery']}}">
            <div class="">
              <h3>{{$value['name']}}</h3>
            </div>
          </a>
        </div>
        @endforeach
      </div>

</div>


@endsection