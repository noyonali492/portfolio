@extends('dashboard.layout.master')
@section('maincontent')
<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
   
    <div class="page-breadcrumb  mb-3">
        {{ Session::get('msg')}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('service.create') }}" class="btn btn-primary d-flex align-items-center gap-1">
                
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
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                          <td> <img src="{{ $service->icon }}" alt="Image"/></td>
                            <td>{{ $service->description }}</td>
                            <td>
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
 @endsection


