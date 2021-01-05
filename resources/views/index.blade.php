
@extends('layout')
@section('head')

@endsection
@section('content')
 <div>
     <img src="img/banner.png" alt="">
 </div>    
 <div>
     <p>PROJECT ONE</p>
     <div class="container">
         <div class="row">
             <div class="col-6">
                 <div></div>
             </div>
         </div>
     </div>
 </div>  

 <div class="slider">
     <div class="blog1"></div>
     <div></div>
     <div></div>
     <div></div>
 </div>

 <div class="single-item">
     <div class="podcast">
         <img src="" alt="">
         <p class="description"> Lorem ipsum dolar sit amet</p>
         <p class="name">HAHA</p>
         <p class="role"> student</p>
     </div>
     <div class="podcast">
         <img src="" alt="">
         <p class="description"> Lorem ipsum dolar sit amet</p>
         <p class="name">HAHA</p>
         <p class="role"> student</p>
     </div>
     <div class="podcast">
         <img src="" alt="">
         <p class="description"> Lorem ipsum dolar sit amet</p>
         <p class="name">HAHA</p>
         <p class="role"> student</p>
     </div>
 </div>
 <script>

$(document).ready(function () {

  $('.single-item').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});


</script>
        @stop
 
