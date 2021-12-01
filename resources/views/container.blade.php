@extends('Layouts.master')
@extends('Layouts.navbar')

@section('content')
<!-- Page Content -->
  <div class="container-fluid bg-dark">
        <!--Create Container Section-->
      <div class="container pt-5">
         <center class="m-2">
          <h3 class="section-title text-light">Create Container</h3>
        </center>
        <div class="row pb-5">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-7">
            <div class="create-form rounded p-3">
              <form class="mt-3" action="/container/create" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="text-light font-weight-bold">Container Image(JPG/PNG):</label>&nbsp;&nbsp;&nbsp;
                <input type="file" id="myFile" name="container_image"><br><br>
                <span class="text-danger error-text container_image_error"></span>
                <label class="text-light font-weight-bold">Name:</label>&nbsp;&nbsp;&nbsp;
                <input type="text" class="rounded w-50" id="name" name="container_name"><br><br>
                <span class="text-danger error-text container_name_error"></span>
                <label class="text-light font-weight-bold">Volume:</label>&nbsp;&nbsp;&nbsp;
                <input type="text" class="rounded" id="volume" name="container_volume">&nbsp;&nbsp;&nbsp;
                <span class="text-danger error-text container_volume_error"></span>
                <div class="form-check form-check-inline">
                  <label class="form-check-label text-light" for="favorite">Mark as a favorite</label>
                  <input class="switch-input m-3" type="checkbox" name="favorite" value="1"{{ old('favorite') ? 'checked="checked"' : ''}}>
                </div><br><br>
                <button type="submit" class="btn btn-primary btn-block">Create</button>
              </form>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>

  <!-- validation error msg -->
  <!-- <script src = "jquery.min.js">

  </script>
  <script>
    var form = this;
    $.ajax({
    beforeSend:function(){
      $(from).find('span.error-text').text('');
    },
    success:function(data){
      if(data.code == 0){
        $.each(data.error, function(prefix,val){
          $(form).find('span.'+prefix+'_error').text(va;[0]);
        });
      }else{
        $(form)[0].reset();
      }
    }
  })
  </script> -->


    <div class="container mb-5">
      <center><h2 class="profile-title mt-5 mb-5">Container List</h2></center>

        @foreach ($container as $contain)
      <div class="bg-dark p-4 shadow-lg rounded mb-5">
        <div class="row">
          <div class="col-md-2 col-4">
            <img src="images/container/{{ $contain->container_image}}" alt="Broccoli" width="100%">
          </div>
          <div class="col-md-5 col-8">
            <center class="m-4 text-light">
              <h4 class="profile-title">{{ $contain->container_name }}</h4><br>
              <span>{{ $contain->container_volume }}g</span>
            </center>
          </div>
          <div class="col-md-5 col-12">
            <div class="m-5">
              <button class="btn btn-warning" data-toggle="modal" data-target="#EditModal1{{ $contain->id }}">EDIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
              <!-- Modal -->
              <div class="modal fade" id="EditModal1{{ $contain->id }}" tabindex="-1" role="dialog" aria-labelledby="EditModal1Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="p-3">
                        <center>
                          <h4>
                            Edit Container
                          </h4><br>
                        </center>
                          <form action="/container/update/{{ $contain->id }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                            <label class="font-weight-bold">Container Image(JPG/PNG):</label>
                            <input type="file" id="myFile" name="container_image"><br><br>
                            <label class="font-weight-bold">Name:</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" class="rounded w-50" name="container_name" value="{{ $contain->container_name }}"><br>
                            <label class="font-weight-bold">Volume:</label>&nbsp;&nbsp;&nbsp;
                            <input type="number" class="rounded" name="container_volume" value="{{ $contain->container_volume }}"><br>
                            <label class="font-weight-bold">Mark as a favorite:</label>&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="rounded"  name="favorite" value="1"{{ old('favorite') ? 'checked="checked"' : ''}}><br><br>
                             <center><button type="submit" class="btn btn-primary">Save changes</button></center>
                          </form>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal1">DELETE</button>

              <!-- Modal -->

              <div class="modal fade" id="DeleteModal1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="p-3">
                        <h4>Are you sure you want to delete?</h4><br>
                          <center>
                            <button type="button" class="btn btn-danger">Yes</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                          </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div><br><br>
  @endforeach
      <!-- pagination -->
      <span>
        {{$container->links()}}
      </span>
    </div>

  @endsection