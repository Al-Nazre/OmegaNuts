@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')
  <!-- Page Content -->
  
   <div class="container"><br>
    <center><h3 class="section-title">Food Groups</h3></center><br><br>
    <section id="food-groups">
      <a href="/vegetables">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/vegetables.jpg" width="100%" class="m-3" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">Vegetables</h4>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt illum molestias ipsum officiis rem est doloremque autem? Sapiente fugit temporibus totam, officia, consequuntur expedita quasi modi fuga veritatis doloremque tempore?</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a href="fruits">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/fruits.jpg" width="100%" class="m-3" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">Fruits</h4>
                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a href="legumes">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/legumes.jpg" width="100%" class="m-3" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">Legumes</h4>
                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a href="nuts">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/dairy.jpg" width="100%" class="m-3" alt="">
        
            </div>
            <div class="col-md-8">
              <div class="card-body m-3">
                <h4 class="card-title">Nuts & Seeds</h4>
                <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
              </div>
            </div>
          </div>
        </div>
      </a>
    </section>
   </div>
@endsection