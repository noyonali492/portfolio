@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Expertise</h4>
              <br>
             
              {{ Session::get('msg')}}
              <hr>
              <p class="card-description">  <a href="{{url('/addexpertise')}}">Add New </a> <code>.table-striped</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> SL.No </th>
                      <th> skill_year </th>
                      <th> designation </th>
                      <th> discription </th>

                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i=0; 
                 @endphp
                    @foreach ($expertiselist as $singlevalue)
                    <tr>
                      <td class="py-1">
                       {{++$i}}
                      </td>
                      <td>
                        {{ $singlevalue->skill_year }}
                      </td>
                      <td> {{ $singlevalue->designation }} </td>
                      <td> {{ $singlevalue->discription }} </td>
                      <td> <a href="">Edit</a> || <a href=""> Delete </a> </td>
                    </tr>
                        
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>




  </div>
</div>  
@endsection