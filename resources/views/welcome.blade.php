@extends('layouts.frontend.app')

@section('content')


  <div class="haut-job">
    
    
    <div class="item item2"><a href="{{ route('login') }}"><p>Connexion</p></a></div>
    
    <div class="item item1"><a href="#"><p>Menu</p></a></div>
  </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
<!-- debut slide1  -->
          <div class="swiper-slide">
            <div class="title-job">
              <div class="col-md-12"><p>GROUP</p></div>
            </div>
            <div class="container home-company">
              <h1>Créateur de succès</h1>
            </div>
            <img src="{{asset('assets/frontend/img/black2.jpg')}}" class="cover">
          </div>

        
         

          <!-- fin slide 1 -->
 <div class="swiper-slide">
  <div class="title-job">
    <div class="col-md-12"><p>A propos</p></div>
  </div>
  <div class="site-section cta-big-image" id="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 img-desc">
          <figure class="circle-bg">
          <img src="{{asset('assets/frontend/img/logo.png')}}" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-5 ml-auto desc d-flex align-items-center">
          <div class="mb-4">
            <h3 class="h3 mb-4 text-black">For the next great business</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>


            
          </div>
          

          
        </div>
      </div>
    </div>  
  </div>
    
 </div>

          <div class="swiper-slide">

  <div class="title-job">
  <div class="col-md-12"><p>Jobs</p></div>
</div>


<div class="container-job">
  <!-- .<img src="img/texture.jpg" class="img-job"> -->


    <div class="row">
      @foreach($jobs as $job)
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card job">
                <div class="card-body">
                  <h5 class="card-title">{{$job->title}}
                    </h5>
                    <div class="localisation"><small>{{$job->address}}</small> </div>
                <a href="{{route('job.show',[$job->id,$job->slug])}}" class="go-job">
                 Plus <img src="{{asset('assets/frontend/img/arrow-job.svg')}}" class="arrow-job">
               </a>
                </div>
              </div>
          </div>
          @endforeach
 
     </div>  
       <div class="row all-job">
 <a href="{{route('alljobs')}}"> <img src="{{asset('assets/frontend/img/more.svg')}}" class="more-job"> <small class="plus-job ml-2">Plus</small></a>
 </div>
</div>





          </div>
          <div class="swiper-slide">
            <div class="title-job">
              <div class="col-md-12"><p>Blog</p></div>
            </div>

            <div class="container-blog">

            



            
            <div class="col-lg-4 col-md-4 mb-3">
              <a href="#">
              <div class="card blog">
                   <img src="img/article2.jpeg" class="img-blog">
                <div class="card-body">
                  <h5 class="card-title-blog">Ingénieur Informatique h/f
                    THIS JOB IS IN,  THIS JOB IS IN THIS JOB IS IN THIS JOB IS IN
                    </h5>
                
                </div>
                </div>
                </div>
              </a> 
              <div class="number"><h2>01</h2></div>
                <div class="col-lg-4 col-md-4 mb-3">
                  <a href="#">
                  <div class="card blog">
                       <img src="img/article4.jpeg" class="img-blog">
                    <div class="card-body">
                      <h5 class="card-title-blog">Ingénieur Informatique h/f
                        THIS JOB IS IN,  THIS JOB IS IN THIS JOB IS IN THIS JOB IS IN
                        </h5>
                     
                    </div>
                    </div>
                    </div>
                  </a>
                  <div class="number2"><h2>02</h2></div>
                    <div class="col-lg-4 col-md-4 mb-3">
             <a href="#">
                      <div class="card blog">
                           <img src="img/article3.jpeg" class="img-blog">
                        <div class="card-body">
                          <h5 class="card-title-blog">Ingénieur Informatique h/f
                            THIS JOB IS IN,  THIS JOB IS IN THIS JOB IS IN THIS JOB IS IN
                            </h5>
                         
                        </div>
                        </div>
                        <div class="row all-job mt-4">
                          <a href="#"> <img src="img/more.svg" class="more-job"> <small class="plus-job ml-2">Plus</small></a>
                         </div>
                        </div>
                     </a>   
                     <div class="number3"><h2>03</h2></div>
            </div>
<!-- fin container job -->





           
            </div>
          <!-- <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div>
          <div class="swiper-slide">Resize me!</div> -->
      
        </div>
      
      </div>

</div>



<div class="swiper-button-next next-button ">
  <img src="{{asset('assets/frontend/img/next1.svg')}}">
</div>
<div class="swiper-button-prev prev-button ">
  <img src="{{asset('assets/frontend/img/prev2.svg')}}">
</div>

<div class="footer">
  <div class="menu-left-bas">
    <div class="swiper-pagination"></div> 
    <div class="info-company">
      <p>BlackRidge</p>
    </div>
    <div class="address-company">
      <p>9 Rue du Laboratoire, 1911 Luxembourg</p>
    </div>

   
</div>
</div>
<!-- fin container -->
   

  <div class="so"><img src="{{asset('assets/frontend/img/face.svg')}}"></div>
  <div class="so2"><img src="{{asset('assets/frontend/img/link.svg')}}"></div>
</div>

@endsection
