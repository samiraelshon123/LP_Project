<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex flex-wrap border-end fisrt-sec">
            <ul class="mx-5 mb-5">
              <li class="fw-bold">Where to go</li>
              @foreach($governorates as $governorate)
                  <li><a href="">{{$governorate->name}}</a></li>
              @endforeach
              
            </ul>
            <ul class="mb-5">
              <li class="fw-bold">What to do</li>
              @foreach($categories as $category)
                
                <li><a href="">{{$category->name}}</a></li>
              @endforeach
             
            </ul>
            <ul class="mx-5">
              <li class="fw-bold">Visit Planner</li>
              <li><a href="">Travel Safe</a></li>
              <li><a href="">Before your trip</a></li>
              <li><a href="">During Your Trip</a></li>
            </ul>
            <ul>
              <li class="fw-bold">Other</li>
              <li><a href="">About Egypt</a></li>
              <li><a href="">News</a></li>
              <li><a href="">Events</a></li>
              <li><a href="route('user.contact')}}">Contact us</a></li>
            </ul>
          </div>
        
          <div class="col-md-5 third-sec">
            <h3>Find us on #ExperienceEgypt</h3>
            <ul class="d-flex mb-4">
            <li class="me-1">
                      <a href="{{$socialMedia->facebook_link}}"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="me-1">
                      <a href="{{$socialMedia->twitter_link}}"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="me-1">
                      <a href="{{$socialMedia->instagram_link}}"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="me-1">
                      <a href="{{$socialMedia->youtube_link}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="me-1">
                      <a href="{{$socialMedia->tiktok_link}}"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
            </ul>
            <h3>Subscribe to Our Newsletter</h3>
            <span class="fs-6">Get the latest offers!</span>
            <input type="text" placeholder="Enter Your Email" class="my-3">
            <button class="btn btn-dark">Subscribe</button>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="{{asset('asset/js/app.js')}}"></script>
  </body>

</html>