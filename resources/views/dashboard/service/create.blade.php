@extends('dashboard.layout.master')
@section('maincontent')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Service</h4>
        <a href="{{ route('service') }}">Back</a>
        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
       <div class="form-group">
            <label for="exampleInputName1">Icon</label>
            <input type="file" name="icon" id="" class="form-control" cols="30" rows="10"></input>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputCity1" placeholder="Location">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
