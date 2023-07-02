@extends('master')
@section('content')
<div class="container">
 <div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{$products->gallery}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Back</a>
        <h2>{{$products->name}}</h2>
        <h3> Price : ${{$products->price}}</h3>
        <h3>Details : {{$products->description}}</h3>
        <h3>Category : {{$products->category}}</h3>
       <br><br>
       <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$products['id']}}">
        <button class="btn btn-primary">Add Card</button>
       </form>
       
       <br><br>
       <button class="btn btn-success">Buy Now</button>

    </div>
 </div>
</div>
@endsection
