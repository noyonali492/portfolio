@extends('dashboard.layout.master')
@section('maincontent')

<div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Service Area</h5>
                    <form action="{{ route('service.update', $editservice->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="exampleInputCity1">Title</label>
                            <input type="text" name="title"  value="{{  $editservice->title }}" class="form-control" id="exampleInputCity1" placeholder="Location">
                          </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{  $editservice->description }}</textarea>
                          </div>

                        <!-- Background Image Display -->
                        
                        <div class="form-group">
                            <label for="exampleInputName1">Icon</label>
                            
                                <img src="{{ $editservice->icon }}" alt="Image"/>
                                <input value="{{ $editservice->icon }}" type="file" name="icon" id="" class="form-control" cols="30" rows="10"></input>
                           
                          </div>
                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>


         </div><!--end row-->
    </div>
  </main>


@endsection
