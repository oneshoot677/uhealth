@extends('layout.frontend');

@section('content')

 <div class="page-banner overlay-dark bg-image" style="background-image:url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Covid19</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_1.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="{{asset('frontend/one-health-master/assets/img/person/person_3.jpg')}}" alt="">
                      </div>
                      <span>Adams wills</span>
                    </div>
                    <span class="mai-time"></span> 1 week ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Patient Services</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_2.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">Dental<a href="blog-details.html"> The Recovery Room: News beyond the pandemic</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                      <img src="{{asset('frontend/one-health-master/assets/img/person/person_4.jpg')}}" alt="">
                      </div>
                      <span>Favour James</span>
                    </div>
                    <span class="mai-time"></span> 2 weeks ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Dental</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_3.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">Shifting goalposts: Research in the time of the coronavirus</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                      <img src="{{asset('frontend/one-health-master/assets/img/person/person_2.jpg')}}" alt="">
                      </div>
                      <span>Collier Ben</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Neurology</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_4.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">What are the nonmedical factors most closely linked to death risk?</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                      <img src="{{asset('frontend/one-health-master/assets/img/person/person_1.jpg')}}" alt="">
                      </div>
                      <span>Williams Jack</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Cardiology</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_5.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">Do gut bacteria contribute to ethnic health disparities</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                      <img src="{{asset('frontend/one-health-master/assets/img/person/person_3.jpg')}}" alt="">
                      </div>
                      <span>James Sawyer</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Patient Services</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_6.jpg')}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">The Recovery Room: News beyond the pandemic</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                      <img src="{{asset('frontend/one-health-master/assets/img/person/person_4.jpg')}}" alt="">
                      </div>
                      <span>Micheal Abraham</span>
                    </div>
                    <span class="mai-time"></span> 1 month ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Pharmacy</a>
                <a href="#" class="tag-cloud-link">Medication</a>
                <a href="#" class="tag-cloud-link">Drugs</a>
                <a href="#" class="tag-cloud-link">Healthcare</a>
                <a href="#" class="tag-cloud-link">Treatment</a>
                <a href="#" class="tag-cloud-link">Wellness</a>
                <a href="#" class="tag-cloud-link">SideEffects</a>
                <a href="#" class="tag-cloud-link">MedicalResearch</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                <li><a href="#">ClinicalTrials<span>12</span></a></li>
                <li><a href="#">Medication Safety <span>22</span></a></li>
                <li><a href="#">New Drug Approval <span>37</span></a></li>
                <li><a href="#">Research and Development <span>42</span></a></li>
                <li><a href="#">Global Pharmacy <span>14</span></a></li>
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Living a healthy lifestyle is a crucial for overall well-being, and hospitals play a vital role in promoting healthy habits. A healthy hospital environment not only benefits patients but also staff and visitors. By prioritizing healthy living, hospitals can create a supportive environment that fosters overall well-being and sets patients, staff, and visitors on the path to a healthier lifestyle.</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  @endsection