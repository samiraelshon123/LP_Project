<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/category.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/cityinfo.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/searchpage.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/contactus.css')}}">



  </head>

  <body>
    <div class="hero mb-5">
      <header>
        <div class="container">
          <div class="d-flex position-relative">
            <div class="left-header border">
              <a href="/"><img src="{{asset('asset/imgs/logo.jpeg')}}" alt="" /></a>
            </div>
            <div class="right-header text-capitalize w-100">
              <div class="top-header d-flex ps-4 pt-2 align-items-center
                justify-content-between border-bottom">
                <div class="navbar">
                  <ul class="d-flex">
                    <li class="border-end px-1"><a href="">about egypt</a></li>
                    <li class="border-end px-1"><a href="">media center</a></li>
                    <li class="px-1"><a href="{{route('user.contact')}}">contact us</a></li>
                  </ul>
                </div>
                <div class="icons-wrapper">
                  <ul class="d-flex">
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
                </div>
                <form action="{{route('user.search')}}" method="post" class="d-flex" role="search" >
                  @csrf
                  <select  name="governorate" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  @foreach($governorates as $governorate)
                    <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                  @endforeach
                 
                  </select>
                  <select name="category" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                  @endforeach
                  </select>
                  <button type="submit " class="border-0 bg-transparent ms-2 border-end px-2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </form>
              </div>
              <div class="bottom-header px-4 py-3">
                <ul class="menu-list d-flex fw-bold ">
                  <li class="position-relative">
                    <a href="" class="text-dark me-4 d-flex align-items-center">
                      <span class="me-1">where to go</span>
                      <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <div class="sub-menu d-flex border sub1">
                      <div class="sub-menu-left">
                        <h3 class="text-center m-3 fw-bold">DESTINATION</h3>
                      </div>
                      <div class="sub-menu-right p-3">
                        <ul class="text-nowrap d-flex flex-column
                          justify-content-around h-100 w-100 fw-normal">
                          @foreach($governorates as $governorate)
                            <li class="border-bottom p-2"><a href="{{route('user.governorate', $governorate->id)}}" class="text-dark">{{$governorate->name}}</a></li>
                          @endforeach
                          
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="position-relative">
                    <a href="" class="text-dark d-flex align-items-center">
                      <span class="me-2">what to do</span>
                      <i class="fa-solid fa-angle-down"></i></a>
                    <div class="sub-menu d-flex border sub2">
                      <div class="sub-menu-left">
                        <h3 class="text-center m-3 fw-bold">EXPERIENCE</h3>
                      </div>
                      <div class="sub-menu-right p-3">
                        <ul class="text-nowrap d-flex flex-column
                          justify-content-around h-100 w-100 fw-normal">
                          @foreach($categories as $category)
                            <li class="border-bottom p-2"><a href="{{route('user.category', $category->id)}}" class="text-dark">{{$category->name}}</a></li>
                         @endforeach
                         
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn position-absolute btn-menu" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                class="fa-solid fa-bars"></i></button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
              aria-labelledby="offcanvasWithBothOptionsLabel">
              <div class="offcanvas-body">
                <div class="accordion border-0" id="accordionExample">
                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Where To Go
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <ul>
                        @foreach($governorates as $governorate)
                            <li class="border-bottom pb-2">{{$governorate->name}}</li>
                          @endforeach
                         
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What To Do
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <ul>
                            @foreach($categories as $category)
                            <li class="border-bottom pb-2">{{$category->name}}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </header>