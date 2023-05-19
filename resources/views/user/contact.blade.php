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

    <section class="contact section-margin">
            <div class="container">
                <div class="header text-center mb-5">
                    <h1 class="text-uppercase">contact us</h1>
                    <p>We care about your feedback and input. Please feel free to call us via the below contact
                        information or send us a
                        message
                    </p>
                </div>
                <div class="row">
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    @if(session('add_message'))
           <h1 style="color: rgb(73, 208, 73); font-size: 20px">{{session('add_message')}}</h1>
        @endif
                    <div class="col-md-7 border-end">
                        <form action="{{route('user.storeContact')}}" method="post">
                           @csrf
                            <div class="mb-3">
                                <label for="name"  class="form-label">Full Name *</label>
                                <input type="text" name="full_name" class="form-control" id="name" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected disabled>Open this select menu</option>
                                    <option value="0">male</option>
                                    <option value="1">female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="number" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message *</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-5 map">
                        <iframe class="py-4"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221266.9062023509!2d30.742480944793996!3d29.94218040502262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e126df199d%3A0x24a6cf9d2fda5678!2s6th%20of%20October%20City%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1678532112873!5m2!1sen!2seg"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="info mb-5">
                            <h4>Headquarters</h4>
                            <p>6 October Cite, Egypt</p>
                        </div>
                        <div class="info">
                            <h4>Email Address</h4>
                            <p>promotion@mota.gov.eg</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

@include('layouts.footer')