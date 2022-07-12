@extends("layouts.base")

@section('style')
   

    <style>
        .nav-ab  .nav-link
        {
            color: #222;
            
        }
    
        .nav-ab  .nav-link:hover
        {
            background: rgb(180, 9, 9)!important;
            color: white;
            
        }
    .info-text *
    {
    text-align:justify;
    } 
    </style>
@endsection
@section('content')


<div class="row py-5">
<div class="px-5 col-lg-3 col-xm-2 border-end border-2  nav-ab " style="border-color:rgb(116, 116, 116)!important " >
    <ul class="nav d-flex   top-0 flex-column text-center" style="position: sticky">
        <il class="nav-item"><a href="{{ route('info') }}" class="nav-link">about</a></il>
        <il class="nav-item"><a href="{{ route('policies') }}" class="nav-link">policies</a></il>
        <il class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">gallery</a></il>
        <il class="nav-item"><a href="{{ route('partners') }}" class="nav-link">partners</a></il>
    </ul>
</div>
 <div class="col-lg-6 text-center col-xm-8 info-text">
  @yield("m")  
 </div>
</div>


    
@endsection

