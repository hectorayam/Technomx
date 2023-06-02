@extends('layouts.nav')

@section('content')

<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container user 2xl:mx-auto">
    <div class="flex justify-start item-start space-y-2 flex-col">
        <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Orden # {{$order->id}}</h1>
        
    </div> 
    <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
        <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
            <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Productos de la orden</p>
                @foreach($order->orderitems as $item)
                <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                    
                    
                    {{-- {{$item->products->name}} --}}
                    
                   
                    <div class="pb-4 md:pb-8 w-full md:w-40">
                        @if($item->products->image)
                                <img src="{{asset($item->products->image)}}" alt="">
                                @else
                                <img src="{{asset('assets/images/img.png')}}" alt="">
                                @endif
                    </div>
                    
                    <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                        <div class="w-full flex flex-col justify-start items-start space-y-8">
                            <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">{{$item->products->name}}</h3>
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-sm dark:text-white leading-none text-gray-800"></p>
                                <p class="text-sm dark:text-white leading-none text-gray-800"></p>
                                <p class="text-sm dark:text-white leading-none text-gray-800"></p>
                            </div>
                        </div>
                        <div class="flex justify-between space-x-8 items-start w-full">
                            <p class="text-base dark:text-white xl:text-lg leading-6">${{$item->products->price}}</p>
                            <p class="text-base dark:text-white xl:text-lg leading-6 text-gray-800">{{$item->quantity}}</p>
                            <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">${{$item->price}}</p>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                <div class="flex justify-between items-center w-full">
                    <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                    <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">${{$order->total}}</p>
                </div>
            </div>
            {{-- <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                    {{-- <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3> --}}
                    <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                        <div class="flex justify-between w-full">
                            {{--<p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$56.00</p>--}}
                        </div>
                        <div class="flex justify-between items-center w-full">
                           {{--<p class="text-base dark:text-white leading-4 text-gray-800">Discount <span class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">STUDENT</span></p>
                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">-$28.00 (50%)</p>--}}
                        </div>
                        <div class="flex justify-between items-center w-full">
                           {{-- <p class="text-base dark:text-white leading-4 text-gray-800">Shipping</p>
                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$8.00</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                        <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">${{$order->total}}</p>
                    </div>
                </div>--}}
                
            </div> 
        </div>
       

    </div>
</div>

@endsection