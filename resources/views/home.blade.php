@extends('template.layout')

@section('content')  
</div>   

  @foreach ($berita as $b)
  <div class="main">
    <div class="card">
      <div class="head-card">
        <img src="{{asset('img/hutan.webp')}}" alt="">
      </div>
     <div class="body-card">
        <h1>{{$b->title}}</h1>
        <p>{{$b->content}}.</p>
        <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
     </div>
    </div> 
  @endforeach            
    
   </div> 
@endsection