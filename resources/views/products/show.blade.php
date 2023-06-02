@extends('layouts.nav')

@section('content')
<div class="content list ">
    <div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-teal-300">
    <div class="container px-5 py-24 mx-auto ">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
       
                            @if($product->image)
                            <img src="/images/{{$product->image}}" class="lg:w-1/2 w-1/2 h-1/4 object-cover object-center rounded border border-gray-200" alt=""  >
                            @else
                            <img src="{{asset('assets/images/img.png')}}" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" alt=""  >
                            @endif
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
          <div class="flex mb-4">
            <h2 class="text-sm title-font text-gray-500 tracking-widest text-black">Descripcion</h2>
            <br>

          </div>
          <div class=" mb-4">
          <p class="leading-relaxed">{!! $product->description!!}</p>
          </div>
          <div class="flex mb-4">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">Espesificaciones</h2>

          </div>
          <div>
            <p class="leading-relaxed">{!!$product->specification!!}</p>

        </div>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                <div class="flex flex-row h-10 w-1/2 rounded-lg relative bg-transparent mt-1">
                    <button type="button" data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                      <span class="m-auto text-2xl font-thin">−</span>
                    </button>
                    <input  class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="quantity" value="1">
                    <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                        <span class="m-auto text-2xl font-thin">+</span>
                      </button>
                    </div>
                <input type="hidden" value="{{ $product->image}}" id="img" name="img"> 
                
          </div>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">${{$product->price}}</span>
            <button type="submit" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Agegar al carrito</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
      
        .custom-number-input input:focus {
          outline: none !important;
        }
      
        .custom-number-input button:focus {
          outline: none !important;
        }
      </style>
      
      <script>
        function decrement(e) {
          const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
          );
          const target = btn.nextElementSibling;
          let value = Number(target.value);
          value--;
          target.value = value;
        }
      
        function increment(e) {
          const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
          );
          const target = btn.nextElementSibling;
          let value = Number(target.value);
          value++;
          target.value = value;
        }
      
        const decrementButtons = document.querySelectorAll(
          `button[data-action="decrement"]`
        );
      
        const incrementButtons = document.querySelectorAll(
          `button[data-action="increment"]`
        );
      
        decrementButtons.forEach(btn => {
          btn.addEventListener("click", decrement);
        });
      
        incrementButtons.forEach(btn => {
          btn.addEventListener("click", increment);
        });


        function PasarValor()
            {
            document.getElementById("valor2").value = document.getElementById("valor1").value;
            }

      </script>
      
@endsection