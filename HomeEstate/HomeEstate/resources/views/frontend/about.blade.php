@extends('layout.frontend');

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image:url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>U</span>-HealthTek Laboratory</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-info text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>U</span>-HealthTek Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>U</span>-HealthTek Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
          <div class="text-lg">
            <p>Living a healthy lifestyle is a crucial for overall well-being, and hospitals play a vital role in promoting healthy habits. A healthy hospital environment not only benefits patients but also staff and visitors. By prioritizing healthy living, hospitals can create a supportive environment that fosters overall well-being and sets patients, staff, and visitors on the path to a healthier lifestyle.</p>
            <p>Maintaining good physical health reduces risk of chronic diseases. boosts, energy, and enchance overall quality of life. Regular check-up, screenings and preventive care also support physical health. Physical health refers to the body's ability to function optimally, enabling indivuals to perform dialy tasks maintain independence, and enjoy life. </p>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_1.jpg')}}" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_3.jpg')}}" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rohit Kumar</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{asset('frontend/one-health-master/assets/img/mobile_app.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="{{asset('frontend/one-health-master/assets/img/google_play.svg')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{asset('frontend/one-health-master/assets/img/app_store.svg')}}" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

@endsection
