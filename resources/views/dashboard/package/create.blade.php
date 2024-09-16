@extends('dashboard.layout.master')
@section('maincontent')

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
        <div class="page-breadcrumb  mb-3">
            <div class="d-flex justify-content-between">

                <a href="{{ route('package') }}" class="btn btn-primary d-flex align-items-center gap-1">
                     Back
                </a>

            </div>
        </div>


         <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Package Area</h5>
                    <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Package Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration" class="form-control" required>
                        </div>
                        <!-- Features Input -->
                        <div class="form-group">
                            <label for="features">Features</label>
                            <div id="features-wrapper">
                                <div class="d-flex mb-2">
                                    <textarea name="features[]" id="features" class="form-control" placeholder="Enter feature"></textarea>
                                    <button type="button" class="btn btn-success ml-2" onclick="addFeature()">Add</button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Package</button>
                    </form>



                </div>
            </div>


         </div><!--end row-->
    </div>
  </main>
  <!--end main wrapper-->




<script>
    function addFeature() {
        const wrapper = document.getElementById('features-wrapper');
        const featureDiv = document.createElement('div');
        featureDiv.className = 'd-flex mb-2';

        featureDiv.innerHTML = `
            <textarea name="features[]" class="form-control" placeholder="Enter feature"></textarea>
            <button type="button" class="btn btn-danger ml-2" onclick="removeFeature(this)">Remove</button>
        `;

        wrapper.appendChild(featureDiv);
    }

    function removeFeature(button) {
        const featureDiv = button.parentNode;
        featureDiv.remove();
    }
</script>
@endsection
