@extends('layouts.nav')

@section('content')
    
<div class = " flex justify-center user">
    <form method="POST" action="{{route('order.update', $order->id)}}" class="bg-white rounded-md shadow-2xl p-5 user  lg:w-1/2 " enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card bg-teal-300">

        <div class="card-header   bg-techno">
            <h4 class="card-title"></h4>
            <p class="card-category text-black">Orden</p>
        </div>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg ">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    
                    <th scope="col" class="py-3 px-6">
                        Producto
                    </th>
                    <th scope="col" class="py-3 px-6">
                      Cantidad
                    </th>
                    
                </tr>
                </thead>
                <tbody>
                 @foreach($order->orderitems as $item) 
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$item->products->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item->quantity}}
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
                    </div>
      <br>
      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
        <select class="form-control text-black" name="status_id" autofocus>
            <option value="{{$order->status->id}}">{{$order->status->name}}</option>
            @foreach($statuses as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>

            @endforeach
                   
                </select>
            </div>
            
            <ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input {{$order->shipping == '1' ? 'checked' : ''}} id="vue-checkbox" type="checkbox" name="shipping" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox"  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">A domicilio</label>
                    </div>
                </li>
            </ul>

<div class=" z-10 top-0 flex justify-center ">
<button type="submit" class=" block w-1/2 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Editar</button>
</div>
</form>     
</div>
@endsection