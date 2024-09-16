@extends('dashboard.layout.master')
@section('maincontent')

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
     


    <div class="page-breadcrumb  mb-3">
        <div class="d-flex justify-content-between">
           
            <a href="{{ route('package.create') }}" class="btn btn-primary d-flex align-items-center gap-1">
                <i class="material-icons-outlined">create</i>
            </a>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Features</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->duration }}</td>
                            <td>{{ $package->features }}</td>
                            <td>
                                <a href="{{ route('package.edit', $package->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('package.destroy', $package->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>
  </main>
  <!--end main wrapper-->
<!--end main wrapper-->

<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->
@endsection


