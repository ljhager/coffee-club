@extends('layouts.master')

@section('title')
    Coffee Shopping Cart
@endsection

@section('content')
  @foreach($coffee->chunk(3) as $productChunk)
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images\coffee1.png" alt="Mug of Coffee">
        <div class="caption">
          <h3>Product Title</h3>
          <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet quos sint ipsam voluptas omnis rem, maxime eum id accusamus culpa facilis quod nisi fugit sed corrupti expedita voluptate aspernatur esse.</p>
        <div class="clearfix">
            <div class="pull-left price">$12</div>
            <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  $endforeach
@endsection