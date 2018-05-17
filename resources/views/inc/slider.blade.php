@extends('layouts.app')

<!--              Start of Slider                -->
  <div class="carousel slide" id="myCarousel" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" ></li>
              <li data-target="#myCarousel" data-slide-to="2" ></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img   src="{{asset('images/plumber.jpg')}}" id="img-slider"  >
          <div class="carousel-caption">
          <h1>get to know bootstrap</h1>
              <br>
              <button type="button" value="Get Started" class="btn btn-default">Get Started</button>
          </div>
          </div>
          <div class="item">
              <img  src="{{asset('images/painter.jpg')}}" id="img-slider" >
          </div>
           <div class="item">
              <img   src="{{asset('images/electrical-contractor.jpg')}}" id="img-slider" >
          </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
          <!--              End of Slider            -->
