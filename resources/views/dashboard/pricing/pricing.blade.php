@extends('dashboard.layout.master')
@section('maincontent')
<h1>Pricing List</h1> 



@foreach ( $package_features as $key => $item)

   @php
   $noyon= $item->package_feature; 
   $alim=unserialize($noyon);
    print_r($alim)
    
   @endphp
   

@endforeach
@endsection