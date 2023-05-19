@include('layouts.header')

<section>
      <div>
        <div class="main-img">
          <img
            src="{{asset('asset/imgs/searchpage/abdullah-helwa-xcSzpi6zbW0-unsplash.jpg')}}"
            alt=""
            class="w-100 h-100"
          />
        </div>
        <div class="container">
          <section class="section-margin">
            <div id="owl-carousel4" class="owl-carousel owl-theme city-slider">
            @foreach($places as $n=>$place)
            <?php $k = $n+1;?>
              <div class="item tour{{$k}}">
                <img src="{{ $place->image_for_web }}" alt="" />
              </div>
            @endforeach
            </div>
          </section>
        </div>
      </div>
    </section>
    <section class="places mb-5">
      <div class="container">
      @foreach($places as $place)
        <div class="row place border-bottom py-4 my-5">
          <div class="col-md-6">
            <div class="img-wraper">
              <img
                src="{{ $place->image_for_web }}"
                alt=""
                class="w-100 h-100"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="description">
              <h4>{{$place->name}}</h4>
              <p>
               {{$place->description}}
              </p>
              <div class="map">
                <iframe
                  class=""
                  
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221266.9062023509!2d30.742480944793996!3d29.94218040502262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e126df199d%3A0x24a6cf9d2fda5678!2s6th%20of%20October%20City%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1678532112873!5m2!1sen!2seg"

                  width="100%"
                  height="100%"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </section>

@include('layouts.footer')
