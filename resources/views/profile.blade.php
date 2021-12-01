@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')
 <!-- Page Content -->

    <div class="container">
        <!-- Profile Section-->
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="images/profile/{{$user->profile_image}}" class="rounded-circle" alt="Cinque Terre" width="236" height="236"> 
        </div>
        <div class="col-md-8 pt-5">
          <h3 class="profile-title">Name: {{$user->name}}</h3>
          <h4 class="profile-title">Gender: {{$user->gender}}</h4>
          <h4 class="profile-title">Age: {{$user->age}}</h4>
          <h4 class="profile-title">Weight(kg): {{$user->weight}}</h4>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-6">
          <div class="text-right">
            <!-- Button trigger modal -->
            <button class="btn btn-warning" data-toggle="modal" data-target="#BtnEditProfile">Edit Profile</button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="BtnEditProfile" tabindex="-1" role="dialog" aria-labelledby="BtnEditProfileTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="p-3">
                    <center>
                      <h4>
                        Edit profile
                      </h4><br>
                    </center>
                      <form action="/profile" method = "post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label class="font-weight-bold">Profile Image(JPG/PNG):</label>
                        <input type="file" id="myFile" name="profile_image"><br><br>
                        <label class="font-weight-bold">Profile Name:</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" class="rounded w-50" id="name" name="name" value="{{$user->name}}"><br>
                        <label class="font-weight-bold">Gender:</label>&nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="Male" value="Male"{{ old('gender') == 'Male'? 'checked="checked"' : ''}}>
                          <label class="form-check-label" for="Gender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="Female" value="Female"{{ old('gender') == 'Female'? 'checked="checked"' : ''}}>
                          <label class="form-check-label" for="Female">Female</label>
                        </div><br>
                        <label class="font-weight-bold">Age:</label>&nbsp;&nbsp;&nbsp;
                        <input type="number" class="rounded" id="age" name="age" value="{{$user->age}}"><br>
                        <label class="font-weight-bold">Weight(kg):</label>&nbsp;&nbsp;&nbsp;
                        <input type="number" class="rounded" id="weight" name="weight" value="{{$user->weight}}"><br><br>
                        <center><button type="submit" class="btn btn-primary">Save changes</button></center>
                      </form>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <button class="btn btn-primary" data-toggle="modal" data-target="#BtnDailyGoal">Daily Goal</button>

          <!-- Modal -->
          <div class="modal fade" id="BtnDailyGoal" tabindex="-1" role="dialog" aria-labelledby="DailyGoalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="p-3">
                    <center>
                      <h4>
                        Daily Goal(g)
                      </h4><br>
                      <form action="/profile/goal" method = "post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <input type="number" class="rounded" name="goal" placeholder="Volume" value="{{$user->goal}}"><br><br>
                      <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <center><h2 class="section-title mt-5"><a class="text-danger" href="#">History</a></h2></center>
      <h3 class="mt-5">Oct 03, 2021</h3>
      <div class="p-5 bg-dark">
        <a class="text-dark" href="#">
          <div class="bg-light rounded">
            <div class="row">
              <div class="col-md-4 col-6">
                <img src="images/download.jpg" class="rounded" alt="" width="100%">
              </div>
              <div class="col-md-8 col-6">
                <center class="p-5">
                  <h4>20g of Apple</h4><br>
                  <span>1:05 pm</span>
                </center>
              </div>
            </div>
          </div>
        </a>
        <a class="text-dark" href="#">
          <div class="bg-light rounded mt-5">
            <div class="row">
              <div class="col-md-4 col-6">
                <img src="images/rice.jpeg" class="rounded" alt="" width="100%">
              </div>
              <div class="col-md-8 col-6">
                <center class="p-5">
                  <h4>250g of Rice</h4><br>
                  <span>1:05 pm</span>
                </center>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    @endsection