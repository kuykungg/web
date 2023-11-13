@extends('layouts.masterfrontend')
@section('about')
<div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
          <img src="{{asset('front/assets/img/G9-sport .jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">

        </p>
      </div>
    </div>
@endsection
@section('hero')
<div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span>G9-Sport Shop</span></h1>
        <h2>Deliver good products!</h2>

        <div class="btns">

        </div>
      </div>


    </div>
  </div>
@endsection
@section('content')
<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="section-title">
      <h2>Product</h2>
      <p>Some photos from Our G9-Sport Shop</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
        @foreach ($product as $product)
        <div class="col-md-4">

            <div class="card m-1 shadow-sm">

                <img class="card-img-top img-thumbnail rounded float-left rounded float-right" src="{{$product->image}}">
                <div class="card-body">
                    <div style="text-align: center;">
                        <div class="d-none d-print-block d-print-none">
                            {{$record = App\Models\Brand::find($product->brand_id);}}
                            {{$brand_name = $record->name}}
                        </div>
                        <div style="text-align: center; font-weight: bold; font-size: 20px">{{$brand_name}} {{$product->name}}<br></div>
                        <span style="font-size: 15px;"></span>สี:<span style="font-size: 15px;">{{$product->color}}<br></span>
                        <span style="font-size: 15px;"></span>ขนาด:<span style="font-size: 15px;">{{$product->size}}<br></span>
                        <span style="font-size: 15px;"></span>อุปกรณ์:<span style="font-size: 15px;">{{$product->tool}}<br></span>
                        <span style="font-size: 15px;">{{$product->price}}</span> <span style="font-size: 15px;">bath</span>

                    </div>

                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        </div>
        {{-- model --}}

        @endforeach
    </div>

      {{-- <div class="col-lg-3 col-md-4">
            @foreach ($product as $product)
            <div class="d-none d-print-block d-print-none">
                @php
                $record = App\Models\Brand::find($product->brand_id);
                $brand_name = $record->name;
                @endphp
            </div>
            <div class="col-sm">
                <a href="{{route('detail', $product->product_id)}}">

                <div class="card" style="width: 18rem;">
                    <img src="{{$product->image}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$brand_name}} {{$product->name}}</h5>
                        <p class="card-text">{{$brand_name}} {{$product->name}}
                        <!-- <br>รหัสสินค้า : 580456-400
                        <br>สถานะของสินค้า : สินค้าพร้อมส่ง -->
                        <br>{{$product->price}} บาท<br>
                        สี {{$product->color}}<br>
                        ขนาด{{$product->size}}<br>
                         อุปกรณ์{{$product->tool}}</p>

                        </p>
                    </div>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div> --}}

</section><!-- End Gallery Section -->
<!-- modal page -->

<!-- <div class="modal">
  <div class="modal-bg"></div>
  <div class="modal-page">

  </div>

</div> -->

<!-- modal page -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <!-- <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </div>
  </div>

  <div data-aos="fade-up">
    <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
  </div>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <!-- <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div> -->

          <!-- <div class="open-hours">
            <i class="bi bi-clock"></i>
            <h4>Open Hours:</h4>
            <p>
              Monday-Sunday:<br>
              11:00 AM - 23:00 PM
            </p>
          </div> -->

          <!-- <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>skycom1919@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>080-056-0217</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> -->

      <!-- </div>

    </div>

  </div> -->

  <!-- Button trigger modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


@endsection
