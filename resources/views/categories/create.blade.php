@extends('layouts.nav')

@section('content')
<div class = " flex justify-center">
    <form method="post" action="{{route('category.store')}}" class="bg-white rounded-md shadow-2xl p-5 user  lg:w-1/2 " >
        @csrf
      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
        <input class=" pl-2 w-1/2 outline-none border-none" type="text" name="name" placeholder="Nombre de la categoria" />
      </div>
      
      <div class=" z-10 top-0 flex justify-center ">
        <button type="submit" class=" block w-1/2 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Agregar</button>
    </div>
    </form>
</div>