@extends('layouts.nav')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
   <div class = " flex justify-center">
                    <form method="POST" action="{{route('product.update', $product->id)}}" class="bg-white rounded-md shadow-2xl p-5 user  lg:w-1/2 " enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input class=" pl-2 w-1/2 outline-none border-none" type="text" name="name" placeholder="Nombre del Prodcuto" value="{{$product->name}}" />
                      </div>
                      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input class=" pl-2 w-1/2 outline-none border-none" type="text" name="slug" placeholder="URL del Prodcuto" value="{{$product->slug}}" />
                      </div>
                      <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                        <input class="pl-2  outline-none border-none "type="number" step="any" name="price"  placeholder="Precio" value="{{$product->price}}"/>
                      </div>
                      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <select class="form-control   text-black" name="subcategory_id" autofocus>
                            <option value="{{$product->subcategory->id}}">{{$product->subcategory->category->name}} - {{$product->subcategory->name}} </option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->category->name}} - {{$subcategory->name}} </option>

                            @endforeach
                                   
                                </select>
                            </div>
                            <div class="row et-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="description" >
                                        <textarea id="description" rows="4" name="description" placeholder="Descripcion" class="text-black" value="">{{$product->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row et-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="specification" >
                                        <textarea id="specification" rows="4" name="specification" placeholder="Especificaciones" class="text-black"value="">{{$product->specification}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row et-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="keyword" rows="4" name="keyword" placeholder="Palabras claves" class="text-black" >{{$product->keyword}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input {{$product->status == '1' ? 'checked' : ''}} id="vue-checkbox" type="checkbox" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox"  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Disponible</label>
                                    </div>
                                </li>
                            </ul>
                <div class=" z-10 top-0 w-full h-1/2 static">
                    <div class="extraOutline p-4 bg-white w-max bg-whtie m-auto rounded-lg">
                        <div class="file_upload p-5 relative border-4 border-dotted border-gray-300 rounded-lg" style="width: 300px">
                            <svg class="text-indigo-500 w-24 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" /></svg>
                            <div class="input_field flex flex-col w-max mx-auto text-center">
                                <label>
                                    <input class="text-sm cursor-pointer w-36 hidden" name="image" type="file" accept="image/*"  />
                                    <div class="text bg-indigo-600 text-white border border-gray-300 rounded font-semibold cursor-pointer p-1 px-3 hover:bg-indigo-200">Selecciona</div>
                                </label>
                
                                <div class="title text-indigo-500 uppercase">o suelta la imagen aqui</div>
                            </div>
                            
                        </div>
                    </div>
                    <div class=" z-10 top-0 flex justify-center ">
                        <button type="submit" class=" block w-1/2 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Editar</button>
                    </div>
                </div>
                
                
        </form>  
        @section('js')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
            <script>
            $('#description').summernote({
                    placeholder: 'Descripcion',
                    value: '{{$product->keyword}}',
                    tabsize: 2,
                    height: 100,
                    toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                //["table", ["table"]],
                //["insert", ["link", "picture", "video"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
                });
                $('#specification').summernote({
                    placeholder: 'Especifiacaciones',
                    tabsize: 2,
                    height: 100,
                    toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                //["table", ["table"]],
                //["insert", ["link", "picture", "video"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
                });
                $('#keyword').summernote({
                    placeholder: 'Palabras claves',
                    tabsize: 2,
                    height: 100,
                    value : '{{$product->keyword}}'
            //         toolbar: [
            //     ["style", ["style"]],
            //     ["font", ["bold", "underline", "clear"]],
            //     ["fontname", ["fontname"]],
            //     ["color", ["color"]],
            //     ["para", ["ul", "ol", "paragraph"]],
            //     //["table", ["table"]],
            //     //["insert", ["link", "picture", "video"]],
            //     ["view", ["fullscreen", "codeview", "help"]]
            // ],
                });
            </script>
        @endsection   
   </div>
   @endsection