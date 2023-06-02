@extends('layouts.nav')

@section('content')
<div class="new_arrivals user ">
    <div class="container ">
        <div class="row">
            <div class="col">
              <div class="product-grid user" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                Resultados de busqueda para: {{$search}}
                @foreach($synonyms as $synonym)
                @if($synonym->status=="1")
                    <div class="product-item men" onclick="location.href='{{route('product.show',$synonym->slug)}}';" style="cursor: pointer;">
                        <div class="product discount product_filter"  >
                          
                        <div class="product_image" >
                            @if($synonym->image)
                            <img src="/images/{{$synonym->image}}" alt=""  >
                            @else
                            <img src="{{asset('assets/images/img.png')}}" alt=""  >
                            @endif
                        </div>
                            
                            
                            
                        {{-- <div class="favorite favorite_left"></div> --}}
                        {{-- <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div> --}}
                        <div class="product_info">
                            <h6 class="product_name"><a href="">{{$synonym->name}}</a></h6>
                            <div class="product_price">$ {{$synonym->price}}</div>
                            {{-- <span>$590.00</span> --}}
                        </div>
                        </div>
                        
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $synonym->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $synonym->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $synonym->price }}" id="price" name="price">
                        
                            <input type="hidden" value="{{ $synonym->image}}" id="img" name="img"> 
                       
                            

                            <input type="hidden" value="1" id="quantity" name="quantity">


                        <div class="red_button add_to_cart_button"><button type="submit" class="red_button add_to_cart_button"> Agregar al carrito</button></div>
                    </div>
                </form>
                 @endif
                    @endforeach 
              </div>
            </div>
        </div>
    </div>
</div>