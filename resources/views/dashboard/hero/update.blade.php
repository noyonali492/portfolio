@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a href="{{url('/herolist')}}">Back</a></h4>
            <p class="card-description">Hero  </p>
          
              <form class="forms-sample" action="{{url('/update-hero')}}" method="post" enctype="multipart/form-data" >
                @csrf
            
              <div class="form-group">
                <label for="exampleInputName1">hello text</label>
                <textarea name="hello_text" id="" class="form-control" cols="30" rows="10">{{$editHero->hello_text}}</textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleInputName1">user_name</label>
                <input type="text" value="{{$editHero->user_name}}" name="user_name" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>
              
              <div class="form-group">
                <label for="exampleInputName1">designation</label>
                <input type="text" value="{{$editHero->designation}}" name="designation" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>

              <div class="form-group">
                  <label for="exampleInputName1">button_text</label>
                  <input type="text" value="{{$editHero->button_text}}" name="button_text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>

              <div class="form-group">
                  <label for="exampleInputName1">button_url</label>
                  <input type="text" value="{{$editHero->button_url}}" name="button_url" id="" class="form-control" cols="30" rows="10"></input>
                </div>

                <div class="form-group">
                  <label for="exampleInputName1">image</label>
                  <input type="file" value="{{$editHero->image}}" name="heropic" id="" class="form-control" cols="30" rows="10"></input>
                </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <input type="hidden" name="id" value="{{$editHero->id}}">
            </form>
          </div>
        </div>




  </div>
</div>
@endsection