@extends('Layouts.master')


@section('content')

<!-- Page Content -->
    <div class="container">
      <div class="p-5">
        <form action="/temp/create" method="post" enctype="multipart/form-data">
        @csrf
        <label class="font-weight-bold">Image(JPG/PNG):</label>
        <input type="file" id="myFile" name="image"><br><br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname">Name</label>
              <input type="text" class="form-control" id="inputname" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <label for="input-energy">Energy (kcal)</label>
              <input type="number" step="any" class="form-control" id="input-energy" name="energy" placeholder="energy">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCalcium">Calcium (mg)</label>
            <input type="number" step="any" class="form-control" id="inputCalcium" name="calcium" placeholder="input Calcium">
          </div>
          <div class="form-group">
            <label for="Vitamin">Vitamin C</label>
            <input type="number" step="any" class="form-control" id="Vitamin" name="vitamin_c" placeholder="Vitamin c">
          </div>
          <div class="form-group col-md-6">
              <label for="inputname">about</label>
              <input type="text" class="form-control" id="inputname" name="about" placeholder="about">
            </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputgroupname">Select Food Group</label>
              <select id="inputgroupname" class="form-control" name="group">
                <option value="vegetable">Vegetable</option>
                <option value="legumes">Legumes</option>
                <option value="fruits">Fruits</option>
                <option value="nuts & seeds">Nuts & Seeds</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">create</button>
        </form>
      </div>
    </div>
       @endsection