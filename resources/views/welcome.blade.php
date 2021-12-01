@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')
   <!-- Page Content -->
  <section id="slider" class="mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner slide-bg">
        <div class="carousel-item active">
          <img class="d-block w-100 slide-img" src="images/16.09.20blog1-620x342.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut?</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, recusandae? Sit quo quidem nostrum eum?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slide-img" src="images/slider-bg.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut?</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, recusandae? Sit quo quidem nostrum eum?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slide-img" src="images/nu-slid-3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut?</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, recusandae? Sit quo quidem nostrum eum?</p>
          </div>
        </div>
      </div>
    </div>
     <form action="search" method="get">
    <div class="slide-srch">
      <div class="input-group">
        <div class="form-outline">
          <input type="search" id="form1" name="query" class=" srch-slide-input" placeholder="Search in food group..." />
        </div>
        <button type="submit" class="btn-dark srch-btn">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
    </form>
  </section>
  <section id="food-grp" class="mt-5">
    <center>
      <h3 class="section-title mb-5">Food Groups</h3>
    </center>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-12 mb-5">
          <a href="/vegetables">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="images/vegetables.jpg"
                    alt="..."
                    class="img-fluid"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Vegetables</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to
                      additional content. This content is a little bit longer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 mb-5">
          <a href="fruits">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="images/fruits.jpg"
                    alt="..."
                    class="img-fluid"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Fruits</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to
                      additional content. This content is a little bit longer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 mb-5">
          <a href="legumes">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="images/legumes.jpg"
                    alt="..."
                    class="img-fluid"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Legumes</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to
                      additional content. This content is a little bit longer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 mb-5">
          <a href="nuts">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="images/dairy.jpg"
                    alt="..."
                    class="img-fluid"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Nuts & Seeds</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to
                      additional content. This content is a little bit longer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="mb-5">
    <center>
      <h3 class="section-title">About</h3>
    </center>
    <div class="container h-100">
      <div class="row align-top">
        <div class="col-md-6 col-lg-4 column">
          <div class="card gr-1">
            <div class="txt">
              <h1>WHO WE</br>
                ARE</h1>
              <p>Visual communication and problem-solving</p>
            </div>
            <a href="#">more</a>
            <div class="ico-card">
            <i class="fa fa-rebel"></i>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 column">
          <div class="card gr-2">
            <div class="txt">
              <h1>WHAT WE</br>
                DO</h1>
              <p>How design is implemented on the web.</p>
            </div>
            <a href="#">more</a>
          <div class="ico-card">
            <i class="fa fa-codepen"></i>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 column">
          <div class="card gr-3">
            <div class="txt">
              <h1>WHY WE DO IT </br>Since WHEN?</h1>
              <p>User Interface and User Experience Design.</p>
            </div>
            <a href="#">more</a>
          <div class="ico-card">
            <i class="fa fa-empire"></i>
          </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <section id="contact" class="pb-5 pt-5 bg-dark">
    <center>
      <h3 class="section-title mb-5 text-light">Contact us</h3>
    </center>
    <div class="container">      
      <div class="row">
        <div class="col-md-4 text-light">
          <b>Customer service:</b> <br />
          Phone: +1 129 209 291<br />
          E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
          <br /><br />
          <b>Headquarter:</b><br />
          Company Inc, <br />
          Las vegas street 201<br />
          55001 Nevada, USA<br />
          Phone: +1 145 000 101<br />
          <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />
      
      
          <br /><br />
          <b>Hong kong:</b><br />
          Company HK Litd, <br />
          25/F.168 Queen<br />
          Wan Chai District, Hong Kong<br />
          Phone: +852 129 209 291<br />
          <a href="mailto:hk@mysite.com">hk@mysite.com</a><br />
      
      
        </div>
        <div class="col-md-8">
            <form action="/post" method="post">
              <input class="form-control" name="name" placeholder="Name..." /><br />
              <input class="form-control" name="phone" placeholder="Phone..." /><br />
              <input class="form-control" name="email" placeholder="E-mail..." /><br />
              <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
              <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
            </form>
        </div>
      </div>
      
    </div>
  </section>

 
  @endsection
