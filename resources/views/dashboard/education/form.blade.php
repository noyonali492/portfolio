@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a href="{{url('/educationlist')}}">Back</a></h4>
            <p class="card-description"> Education Form </p>
          
              <form class="forms-sample" action="{{url('/saveeducation')}}" method="post">
                @csrf
            
              <div class="form-group">
                <label for="exampleInputName1">skill_year</label>
                <input type="text" name="skill_year" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>


              <div class="form-group">
                  <label for="exampleInputName1">designation</label>
                  <input type="text" name="designation" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>

              <div class="form-group">
                  <label for="exampleInputName1">discription</label>
                  <textarea name="discription" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>

            </form>
          </div>
        </div>




  </div>
</div>
@endsection