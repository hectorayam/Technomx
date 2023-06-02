@extends('layouts.nav')
@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

@endsection
@section('content')
<div class="content list ">
    <div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-teal-300">
                        <div class="card-header   bg-techno">
                            <h4 class="card-title"></h4>
                            <p class="card-category text-black">Productos</p>
                        </div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg ">
        <div class="table-responsive">
        <table class= "text-sm text-left text-gray-500 dark:text-gray-400 table-striped table" id="example">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombre
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Catergoria
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Stock
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Precio
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$product->id}}
                    </td>
                    <td class="py-4 px-6">
                        {{$product->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{-- {{$product->subcategory->category->name}} --}}
                    </td>
                    <td class="py-4 px-6">
                        @if($product->status == "1")
                       <span class="badge span-stock"> Disponible</span>
                        @elseif($product->status == "0")
                        <span class="badge span-no-stock">  No Disponible </span>
                        @endif
                        
                    </td>
                    <td class="py-4 px-6">
                        ${{$product->price}}
                    </td>
                    <td class="py-4 px-6">
                        
                                                
                            {{-- <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Examinar"><i class="material-icons">library_books</i></a> --}}
                            
                          
                             
                               <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning " ata-toggle="tooltip" data-placement="bottom" title="Editar"><i class="  material-icons">edit</i></a>
                            
                            
                             
                             <form action="{{route('product.delete',$product->id)}}" method="POST" style="display: inline-block" onsubmit="return confirm('¿Seguro?')">
                               @csrf 
                               @method('DELETE')
                             <button class="btn btn-danger" type="submit">
                             <i class=" material-icons" data-toggle="tooltip" data-placement="bottom" title="Eliminar">close</i>
                             </button>
                             </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @section('js')
                                   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
                                    <script>
                                    
                                        $('#example').DataTable({
                                            responsive: true,
                                            autoWidth: false,
                                            fixedColumns: true,
                                            
                                            "language":{
                                                "lengthMenu":"Mostrar   "    +
                                            `<select class="content-center ">
                                                <option value='5'>5</option>
                                                <option value='10'>10</option>
                                                <option value='25'>25</option>
                                                <option value='50'>50</option>
                                                <option value='-1'>Todo</option>
                                            </select>`
                                                + " registros por pagina",
                                                "zeroRecords": "Nada encontrado - disculpa",
                                                "info": "Mostrando la paína _PAGE_ de _PAGES_",
                                                "infoEmpty": "No hay registros",
                                                "infoFiltered": "(filtrado de _MAX_ registos totales",
                                                'search': 'Buscar' ,
                                                'paginate':{
                                                    'next':'Siguiente',
                                                    'previous': 'Anterior'
                                                }
                                            }
                                        });
                                      
                                    </script>
                                    @endsection
        </div>
    </div>
                    </div></div></div></div></div></div>
       
@endsection
                            