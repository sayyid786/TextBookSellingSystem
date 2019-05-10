@extends('layouts.app')
@section('content')
<br>
@foreach($books as $book)
@if($book->quantity == 0)
<div class="row bg-white">
   <div class="col-md-3">
      <img class="img-fluid rounded mb-3 mb-md-0" src="/storage/image/{{$book->image}}" alt="">
   </div>
   <div class="col-md-5">
      <h3>Title: {{$book->title}}</h3>
      <p>Author:{{$book->author}}</p>
      <p>Price: £{{$book->price}}</p>
      <p>ISBN:{{$book->ISBN}}</p>
      @if(!empty($book->category->name))
      <p>Posted in: {{$book->category->name}}</p>
      @else
      <p>Posted in: Category unavailable</p>
      @endif
      <a class="btn btn-primary" href="books/{{$book->id}}">View Book</a>
   </div>
   <hr>
   <br>
</div>
<br>
@elseif($book->quantity > 0)
<div class="row bg-white">
        <div class="col-md-3">
           <img class="img-fluid rounded mb-3 mb-md-0" src="/storage/image/{{$book->image}}" alt="">
        </div>
        <div class="col-md-5">
           <h3>Title: {{$book->title}}</h3>
           <p>Author:{{$book->author}}</p>
           <p>Price: £{{$book->price}}</p>
           <p>ISBN:{{$book->ISBN}}</p>
           @if(!empty($book->category->name))
           <p>Posted in: {{$book->category->name}}</p>
           @else
           <p>Posted in: Category Unavaliable</p>
           @endif
           <a class="btn btn-primary" href="books/{{$book->id}}">View Book</a>
        </div>
        <hr>
        <br>
     </div>
@endif
@endforeach
<br>
@include('inc.footer')
@endsection