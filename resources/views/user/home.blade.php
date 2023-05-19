@include('layouts.header')

      <section class="hero-slider">
        <div id="carouselExampleAutoplaying" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
              <video class="d-block w-100" controls autoplay muted loop>
                <source ng-src="{{asset('asset/imgs/homepage/pexels-the-instagrapher-7501203-1920x1080-24fps.mp4')}}" type="video/mp4"
                  src="{{asset('asset/imgs/homepage/pexels-the-instagrapher-7501203-1920x1080-24fps.mp4')}}">
              </video>
            </div>
            <div class="carousel-item">
              <img src="{{asset('asset/imgs/homepage/farah-samy-29Y5RyH16Ws-unsplash.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('asset/imgs/homepage/simon-berger-BZxbeLsZaeo-unsplash.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <video class="d-block w-100" controls autoplay muted loop>
                <source ng-src="{{asset('asset/imgs/homepage/1075155494-preview.mp4')}}" type="video/mp4"
                  src="{{asset('asset/imgs/homepage/1075155494-preview.mp4')}}">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block w-100" controls autoplay muted loop>
                <source ng-src="{{asset('asset/imgs/homepage/1084366585-preview.mp4')}}" type="video/mp4"
                  src="{{asset('asset/imgs/homepage/1084366585-preview.mp4')}}">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </div>
    <section class="travel-safe section-margin">
      <div class="container">
        <div class="p-3 d-flex justify-content-center align-iems-center">
          <p >Travel Safe</p>
        </div>
      </div>
    </section>
    <section class="where-to-go section-margin">
      <div class="main-heading">
        <h2>where to go</h2>
        <p>Everyday is a journey and your journey starts here</p>
      </div>
      <div id="owl-carousel1" class="owl-carousel owl-theme city-slider">
      @foreach($governorates as $k=> $governorate)
      <?php $n = $k+1;?>
        <div class="item item{{$n}}">
          <img src="{{ $governorate->image_for_web }}" alt="">
          <div class="text-white text-capitalize caption fw-bold">
            <div class="d-flex align-items-center top-caption ">
              <i class="fa-regular fa-compass me-2"></i>
              <p class="m-0">where to go</p>
            </div>
            <h4><a href="cityInfo.html" class="text-white">{{$governorate->name}}</a></h4>
          </div>
        </div>
      @endforeach
       
      </div>
    </section>
    <section class="what-to-do section-margin">
      <div class="main-heading">
        <h2>what to do</h2>
        <p>Your very own bucket list</p>
      </div>
      <div id="owl-carousel2" class="owl-carousel owl-theme city-slider">
      @foreach($categories as $k=> $category)
      <?php $n = $k+1;?>
        <div class="item tour{{ $n}}">
          <img src="{{ $category->image_for_web }}" alt="">
          <div class="text-white text-capitalize caption fw-bold">
            <div class="d-flex align-items-center top-caption">
              <i class="fa-regular fa-compass me-2"></i>
              <p class="m-0">what to do</p>
            </div>
            <h4><a href="category.html" class="text-white">{{$category->name}}</a></h4>
            <button class="px-2 py-1 text-uppercase bg-transparent text-white border-white fw-bold">explore</button>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    @include('layouts.footer')