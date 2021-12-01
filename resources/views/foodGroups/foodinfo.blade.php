@extends('Layouts.master')
@extends('Layouts.navbar')
@section('content')
<!-- Page Content -->
  <div class="container mt-5">
      <div class="row mt-5 pt-5">
          <div class="col-md-5">
              <div class="project-info-box mt-0">
                  <h5>{{ $food->name}}</h5>
                  <p class="mb-0">{{ $food->about}}</p>
              </div><!-- / project-info-box -->
  
              <div class="project-info-box">
                <p class="font-weight-bolder">Food Category with nutritional values per 100 gram
                  servings:</p> <br>
                  <p><b>Energy:</b> {{ $food->energy}} kcal</p>
                  <p><b>Calcium:</b> {{ $food->calcium}} mg</p>
                  <p><b>Vitamine C:</b> {{ $food->vitamin_c}} mg</p>
                  <p><b>Categories:</b> {{ $food->group}}</p>
              </div><!-- / project-info-box -->
  
              <div class="project-info-box mt-0 mb-0">
                  <p class="mb-0">
                      <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                      <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                      <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                      <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
                      <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                  </p>
              </div><!-- / project-info-box -->
          </div><!-- / column -->
  
          <div class="col-md-7">
              <img src="images/foods/{{ $food->image}}" width="100%" class="m-2 food-img" >
              <!-- / project-info-box -->
          </div><!-- / column -->
      </div>
    </div>
    @endsection