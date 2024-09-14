@extends('dashboard.layout.master')
@section('maincontent')

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
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
              <p class="card-description">  <a href="{{url('/addhero')}}">Add New </a>
              </p>
              <div class="table-responsive">
                <form action="" method="POST" id="">
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
                      <td> <a href="{{ url('/edit-hero/'.$singlevalue->id)}}">Edit</a> || <a class="delete" data-id="{{$singlevalue->id}}" href=""> Delete </a> </td>
                    </tr>
                        
                    @endforeach
                   
                  </tbody>
                </table>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>  


<script>
  $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
  </script>
  <script>
    $(document).ready(function(){

            $(document).on('click','.delete',function(e){
                e.preventDefault();
                let heriId = $(this).data('id');
                //alert(heriId);
                if(confirm('Are you sure to Delete')){
                  $.ajax({
                        url:"{{ route('delete.hero')}}",
                        method:'get',
                        data:{id:heriId},
                        success:function(res){
                        if(res.status=='success'){
                          
                            $('.table').load(location.href+' .table');
                        }
                      }
            
                  });
                }
        
            });

    });

  </script>
  

  

@endsection