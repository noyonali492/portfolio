@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a href="{{url('/expertiselist')}}">Back</a></h4>
            <p class="card-description"> Basic form elements </p>
          
              <form class="forms-sample" action="{{url('/updateexpertise')}}" method="post">
                @csrf
            
              <div class="form-group">
                <label for="exampleInputName1">skill_year</label>
                <input type="text" value="{{$editexpertise->skill_year}}" name="skill_year" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>


              <div class="form-group">
                  <label for="exampleInputName1">designation</label>
                  <input type="text" value="{{$editexpertise->designation}}" name="designation" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>

              <div class="form-group">
                  <label for="exampleInputName1">discription</label>
                  <textarea name="discription" id="" class="form-control" cols="30" rows="10">{{$editexpertise->discription}}</textarea>
                </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <input type="hidden" name="id" value="{{$editexpertise->id}}">
            </form>
          </div>
        </div>




  </div>
</div>
@endsection