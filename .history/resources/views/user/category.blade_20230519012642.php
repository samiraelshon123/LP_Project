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
<section class="cate-description section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="d-flex align-items-center border-bottom pb-2"><i class="fa fa-star circle-icon me-2"
                                aria-hidden="true"></i>
                            <span>what to
                                do</span>
                        </h3>
                        <h2>{{$category->name}}</h2>
                        <p>{{$category->description}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cate-items">
            <div class="container">
                <div class="row">
                @foreach($places as $place)
                    <div class="col-md-4">
                        <div class="card border-0 mb-5">
                            <div class="img h-50">
                                <img
                                    src="{{ $place->image_for_web }}"
                                    class="card-img-top h-100 rounded-0" alt="..."></div>
                            <div class="card-body p-0 pt-3 ">
                                <div class="card-top-title">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $place->name}}</h5>
                                        <span><i class="fa-solid fa-location-dot"></i> Luxor</span>
                                    </div>
                                    <p class="card-text">{{$place->description}}</p>
                                </div>
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
        </section>
@include('layouts.footer')