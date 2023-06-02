@extends('layouts.nav')

@section('content')

<div class="content list ">
  <div class="container-fluid ">
  <div class="row">
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-12">
                  <div class="card bg-teal-300">

               <form method="post" action="{{route('perfil.update',$user)}}"  class="form-horizontal"> 
                @csrf
                @method('PUT')
                <div class="card">
                <div class="card-header  bg-techno">
                 <h4 class="card-title"></h4>
                 <p class="card-category text-black"> Tu informacion</p>
                </div>
              <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <div class="row">
                  <label for="name"class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                      <input class="form-control text-black" name="name"  type="text" value="{{auth()->user()->name}}"autofocus/>
                        <span id="name-error" class="error text-danger" for="input-name"></span>
                  </div>
                </div>
                <div class="row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-7">
                      <input class="form-control text-black" name="email "  type="email" value="{{auth()->user()->email}}" autofocus/>
                        <span id="name-error" class="error text-danger" for="input-name"></span>
                  </div>
                    </div>  
                <div class="row">
                  <label for="password"class="col-sm-2 col-form-label">Contraseña</label>
                  <div class="col-sm-7">
                      <input class="form-control text-black" name="password"  type="password" placeholder="Ingrese la contraseña" autofocus/>
                        <span id="name-error" class="error text-danger" for="input-name"></span>
                  </div>
                </div>
                
                
              </div>
                <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar cambios </button>
              </div>
              </div>
              
            </div>
            </div>
          </form>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
            <div class="card bg-teal-300">
              <div class="card-header   bg-techno">
                  <h4 class="card-title"></h4>
                  <p class="card-category text-black">Tus ordenes</p>
              </div>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg ">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
          <th scope="col" class="py-3 px-6">
              ID
          </th>
          <th scope="col" class="py-3 px-6">
              Nombre del Cliente
          </th>
          <th scope="col" class="py-3 px-6">
              Pago Total
          </th>
          <th scope="col" class="py-3 px-6">
                        Metodo de entrega 
                    </th>
          <th scope="col" class="py-3 px-6">
              Estatus
          </th>
          
          <th scope="col" class="py-3 px-6">
              Acciones
          </th>
      </tr>
  </thead>
  <tbody>
      @foreach($orders as $order)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{$order->id}}
          </td>
          <td class="py-4 px-6">
              {{$order->user->name}}
          </td>
          <td class="py-4 px-6">
              {{$order->total}}
          </td>
          @if($order->shipping =="0")
                    <td class="py-4 px-6">
                      <span class="badge span-techno"> En tienda</span>
                    </td>
                    @elseif($order->shipping =="1")
                    <td class="py-4 px-6">
                      <span class="badge span-shipping">A domicilio</span>
                    </td>
                    @endif
          @if($order->status->name == 'Entregado')
          <td class="py-4 px-6">
          <span class="badge span-success">{{$order->status->name}}</span>
          </td>
          @else
          <td class="py-4 px-6">
          <span class="badge span-warning">{{$order->status->name}}</span>
          </td>
          @endif
  
          <td class="py-4 px-6">                    
              <a href="{{route('order.show',$order->id)}}" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Examinar"><i class="material-icons">library_books</i></a> 
              @can('Admin')
              <a href="{{route('order.edit',$order->id)}}" class="btn btn-warning " ata-toggle="tooltip" data-placement="bottom" title="Editar"><i class="  material-icons">edit</i></a>
              @endcan    
                  {{-- <form action="{{route('product.delete',$product->id)}}" method="POST" style="display: inline-block" onsubmit="return confirm('¿Seguro?')">
                     @csrf 
                     @method('DELETE')
                   <button class="btn btn-danger" type="submit">
                   <i class=" material-icons" data-toggle="tooltip" data-placement="bottom" title="Eliminar">close</i>
                   </button>
                   </form> --}}
              
          </td>
      </tr>
      @endforeach 
  </tbody>
</table>
</div>
          </div></div></div></div></div></div>
    </div>
</div>
  </div>
</div>
   
@endsection

