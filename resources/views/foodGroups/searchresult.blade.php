@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')

<div class="container"><br><br>
    <center>
        <form action="search" method="get">
      <div class="input-group w-50">
        <input type="search" name="query" class="form-control rounded" value="{{$query}}" placeholder="Enter your searching keyword" aria-label="Search"
        aria-describedby="search-addon" />
        <button type="submit" class="btn btn-outline-primary">search</button>
      </div>
    </center><br><br>
</form>
    <h4>Search result for keyword "{{$query}}"</h4><br><br>
    <section id="food-groups">
    
      @foreach($foods as $food)
      <a href="{{ $food->group}}_{{ $food->id}}">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/foods/{{$food->image}}" width="100%" class="m-3 food-img" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">{{$food->name}}</h4>
                <p class="card-text">{{$food->about}}</p>
              </div>
            </div>
          </div>
        </div>
      </a>
@endforeach
<span>{{$foods->links()}}</span>
@endsection