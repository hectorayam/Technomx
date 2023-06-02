@extends('layouts.nav')

@section('content')
    <div class="container " style="margin-top: 250px">
       
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center ">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
                @else
                    <h4>No hay productos en el carrito</h4><br>
                    <a href="/" class="btn btn-dark">Continue en la tienda</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            @if($item->image)
                            <img src="{{asset($item->image)}}" alt="">
                            @else
                            <img src="{{asset('assets/images/img.png')}}" class="img-thumbnail" width="200" height="200" alt="">
                            @endif
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b>{{ $item->name }}</a></b><br>
                                <b>Precio: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                    </div>
                            
                            
                                        <button class="btn btn-secondary  btn-sm" style="margin-right: 10px;"><i class="fa fa-edit"></i></button>
                                    
                                </form>
                           <br>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark  btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md">Borrar Carrito</button> 
                    </form>
                     @endif
            </div>
                     @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br>
                    <form action="{{ route('mail.send') }}" method="POST">
                        @csrf
                    
                         @php
                        $username = auth()->user()->name;
                        @endphp
                         <input type="hidden" value="{{ $username }}" id="name" name="name"> 
                         <input type="hidden" value="{{\Cart::getTotal()}}" id="total" name="total"> 
                         <ul class="w-96 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="vue-checkbox" type="checkbox" name="shipping" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="vue-checkbox" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Enviar a domicilio (Revisa tu bandeja de entrada)</label>
                                </div>
                            </li>
                         </ul>
                         <br><a href="/" class="btn btn-dark">Continuar comprando</a>

                    <button type="submit" class="btn btn-bg-techno"> Hacer la orden  </button>
                    
                    </form>
                </div>
            @endif
          
        </div>
        <br><br>
    </div>
@endsection
