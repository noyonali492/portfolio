@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a href="{{url('/herolist')}}">Back</a></h4>
            <p class="card-description"> Basic form elements </p>
          
              <form class="forms-sample" action="{{url('/savehero')}}" method="post" enctype="multipart/form-data" >
                @csrf
            
              <div class="form-group">
                <label for="exampleInputName1">hello text</label>
                <textarea name="hello_text" id="" class="form-control" cols="30" rows="10"></textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleInputName1">user_name</label>
                <input type="text" name="user_name" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>
              
              <div class="form-group">
                <label for="exampleInputName1">designation</label>
                <input type="text" name="designation" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>

              <div class="form-group">
                  <label for="exampleInputName1">button_text</label>
                  <input type="text" name="button_text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>

              <div class="form-group">
                  <label for="exampleInputName1">button_url</label>
                  <input type="text" name="button_url" id="" class="form-control" cols="30" rows="10"></input>
                </div>

                <div class="form-group">
                  <label for="exampleInputName1">image</label>
                  <input type="file" name="heropic" id="" class="form-control" cols="30" rows="10"></input>
                </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>

            </form>
          </div>
        </div>




  </div>
</div>
@endsection