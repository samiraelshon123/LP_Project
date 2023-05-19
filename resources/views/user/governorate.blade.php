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
        <section class="about-city section-margin">
            <div class="container">
                <div class="row">
                    <div class="right-section col-md-6 text-capitalize">
                        <h1>cairo & giza</h1>
                        <p>Situated by the Nile, Egypt’s capital Cairo holds some of the country’s best historical and
                            contemporary offerings,
                            lively streets that never sleep, and diverse neighborhoods. The dynamic metropolis features
                            numerous heritage sites that
                            imbue the city with a distinct charm and offer a glimpse into its Islamic and Coptic
                            historie…</p>
                        <span class="table-cap">weather averages</span>
                        <table class="table table-bordered mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Winter <span>(DEC - FEB)</span></th>
                                    <th scope="col">Spring <span>(MAR - MAY)</span></th>
                                    <th scope="col">Summer <span>(JUN - AUG)</span></th>
                                    <th scope="col">Fall <span>(SEP - NOV)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">14°C</td>
                                    <td>21°C</td>
                                    <td>36°C</td>
                                    <td>23°C</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery">
                            <div class="row">
                                <div class="img-container col-10">
                                    <div class="img">
                                        <img src="https://egypt.travel/media/1136/cairo-giza-pyramids.jpg?mode=crop&width=480"
                                            alt="" id="imagebox">
                                    </div>
                                </div>
                                <div class="gallery-small-img col-2 h-100">
                                    <div class="img"> 
                                    @foreach($places as $place)
                                    <img src="{{ $place->image_for_web }}" style="height: 65px;width: 85px;"
                                            alt="" onclick="clickImageHandle(this)"> </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="where-to-go section-margin">
            <div class="container">
                <div class="main-heading">
                    <h2>events in cairo</h2>
                </div>
                <div id="owl-carousel3" class="owl-carousel owl-theme city-slider">
                @foreach($categories as $category)
                    @if(in_array($category->id, $tourisms))
                    <div class="card">
                        <div class="img">
                            <img src="{{ $category->image_for_web }}"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                            <p class="card-text">{{substr($category->description, 0, 200)}}...</p>
                            <a href="#" class="btn">View</a>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </section>
        @include('layouts.footer')