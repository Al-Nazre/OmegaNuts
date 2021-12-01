@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')

 <!-- Page Content -->
   <div class="container"><br>
    <center><h3 class="section-title">{{$title}}</h3></center><br><br>
    <section id="food-groups">
        @foreach($foods as $food)
      <a href="{{ $food->group}}_{{ $food->id}}" >
     
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/foods/{{ $food->image}}" width="100%" class="m-3 food-img" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">{{ $food->name}}</h4>
                <p class="card-text">{{ $food->about}}</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </section>
  
      <span>
        {{$foods->links()}}
      </span>
   
   </div>
    

@endsection