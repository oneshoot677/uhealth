@extends('layout.frontend');

@section('content')

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-info">Let's Consult</a>
      </div>
    </div>
  </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to U-HealthTek <br> Center</h1>
            <p class="text-grey mb-4">Living a healthy lifestyle is a crucial for overall well-being, and hospitals play a vital role in promoting healthy habits. A healthy hospital environment not only benefits patients but also staff and visitors. By prioritizing healthy living, hospitals can create a supportive environment that fosters overall well-being and sets patients, staff, and visitors on the path to a healthier lifestyle.</p>
            <a href="{{route('frontend.about')}}" class="btn btn-info">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="{{asset('frontend/one-health-master/assets/img/bg-doctor.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp bg-info text-white">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
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
        <div class="item">
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
        <div class="item">
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

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="{{route('frontend.news')}}" class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_1.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
                <h5 class="post-title"><a href="{{route('frontend.news')}}">List of Countries without Coronavirus case</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_4.jpg')}}" alt="">
                  </div>
                        <span>Roger Adams</span>
                  </div>
                  <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="{{route('frontend.news')}}" class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_2.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('frontend.news')}}">Recovery Room: News beyond the pandemic</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_3.jpg')}}" alt="">
                  </div>
                  <span>Sam Jackson</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="{{route('frontend.news')}}"class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_3.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('frontend.news')}}">What is the impact of eating too much sugar?</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_2.jpg')}}" alt="">
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{route('frontend.news')}}"class="btn btn-info">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-info mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
</div>
@endsection