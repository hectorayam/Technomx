@extends('layouts.nav')

@section('content')
<div class="new_arrivals user ">
    <div class="container ">
        <div class="row">
            <div class="col">
               
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                    @foreach($category->subcategory as $sub)
                    @foreach($sub->product as $product)
                    @if($product->status=="1")
                        <div class="product-item men"onclick="location.href='{{route('product.show',$product)}}';" style="cursor: pointer;">
                            <div class="product discount product_filter" onclick="location.href='{{route('product.show',$product)}}';" style="cursor: pointer;">
                               
                            <div class="product_image">
                                @if($product->image)
                                <img src="/images/{{$product->image}}" alt="">
                                @else
                                <img src="{{asset('assets/images/img.png')}}" alt="">
                                @endif
                            </div>
                                
                                
                                
                             <div class="product_info">
                                <h6 class="product_name"><a href="">{{$product->name}}</a></h6>
                                <div class="product_price">$ {{$product->price}}</div>
                            </div>
                            </div>
                            
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                            
                                <input type="hidden" value="{{ $product->image}}" id="img" name="img"> 
                        
                                

                                <input type="hidden" value="1" id="quantity" name="quantity">


                            <div class="red_button add_to_cart_button"><button type="submit" class="red_button add_to_cart_button"> Agregar al carrito</button></div>
                        </div>
                    </form>
                        @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
