@extends('dashboard.layout.master')
@section('maincontent')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Hero</h4>
              <br>
             
              {{ Session::get('msg')}}
              <hr>
              <p class="card-description">  <a href="{{url('/addhero')}}">Add New </a> <code>.table-striped</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> SL.No </th>
                      <th> hello_text </th>
                      <th> user_name </th>
                      <th> designation </th>
                      <th> button_text </th>
                      <th> button_url </th>
                     <th> image </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i=0; 
                 @endphp
                    @foreach ($herolist as $singlevalue)
                    <tr>
                      <td class="py-1">{{++$i}}</td>
                      <td>{{$singlevalue->hello_text}}</td>
                      <td>{{$singlevalue->user_name}} </td>
                      <td> {{$singlevalue->designation}} </td>
                      <td>{{$singlevalue->button_text}}</td>
                      <td>{{$singlevalue->button_url}} </td>
                      <td> <img src="{{$singlevalue->image}}" alt="Image"/></td>
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