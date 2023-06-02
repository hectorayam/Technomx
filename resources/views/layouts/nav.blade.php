<!DOCTYPE html>
<html lang="en">
<head>

<title>Techno Electrocnics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Template Main CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet"/>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"/>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <!-- Template Main JS File -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.js')}}"></script>
  <script src="{{asset('js/easing.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <style>
    .menu-product{
	overflow-y: scroll;
	
}
    </style>
  @yield('css')
</head>

<body>
<header class="header header-cel trans_300">
    <!-- Top Navigation -->

    <div class= "background-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="top_nav_left top_nav_mail right">

             Tel: 33 2495 6360
          </div>

        </div>
              <div class="col-md-6 ">
            <div class="top_nav_left top_nav_cel right">
              <i class="material-icons">place</i> López Cotilla 125, Zona Centro support@techno-mx.com
            </div>
</div>
      </div>
    </div>
    </div>

      <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 menu-cel">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="p-4 flex flex-row items-center justify-between">
            <a  href="{{route('index')}}">
            <img src="{{asset('assets/images/techno.png')}}" alt="" width="150" height="130" class="d-inline-block align-text-top">
            </a>
            @if(auth()->user())
           <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"> Bienvenido {{ auth()->user()->name }}</a>
            @else
            @endif
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="static flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

            <form class="order-first mb-10 md:mb-0 md:order-last md:pr-8 border-search" action="{{route('product.search')}}">
              <input class="w-36 py-1 pl-3 pr-10 rounded-full focus:outline-0 border-2 border-black	" type="text" placeholder="Buscar"
                  name="query">
              <button class="-ml-8 border-6 bg-trasparent " type="submit"><i
                      class="fa fa-search text-gray-400"></i></button>
          </form>
          <a class="md:hidden text-white text-2xl " href="javascript:void(0)" onclick="toggleMenu()"><i
            id="toggle-menu-icon" class="fa-bars fa-solid"></i></a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold menu-button  dark-mode:bg-transparent dark-mode:hover:bg-blue dark-mode:focus:bg-blue dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-700  focus:bg-blue focus:outline-none focus:shadow-outline" href="{{route('index')}}">Inicio</a>


            <div @click.away="open = false" class="relative " x-data="{ open: false }">
              <button @click="open = !open" class="flex 	flex-row menu-button rounded-lgitems-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Productos </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>

              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="menu cel   right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class=" menu-product  h-60  px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                  <ul >
                    <li>
                  <a class="block px-4 py-2 mt-2 menu-button text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('shop')}}">Todo</a>
                    </li>
                  @foreach ($menu as $c)
                  <li>
                  <a class="grid px-4 py-2 mt-2 menu-button text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('product',$c->id)}}">{{$c->name}}</a>
                  </li>
                  @endforeach
                  </ul>

                </div>
              </div>
            </div>





            @can('Admin')
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('order.index')}}">Ordenes</a>
            @endcan

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span><i class="fa fa-user" aria-hidden="true"></i> </span>

              </button>

              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="menu cel right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                  @if (Route::has('login'))
                    @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                      @csrf
                      </form>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('perfil', auth()->user()->name)}}">Perfil</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>

                  @else
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('login') }}">Login</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('register') }}">Registrarse</a>

                  @endauth
                  @endif




                </div>
              </div>
            </div>

                @if (Route::has('login'))
                @auth
                    @php
                    $userID = auth()->user()->id;
                    @endphp
              <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ \Cart::session($userID)->getTotalQuantity()}}</span>

                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="menu cel right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-56">
                  <div class=" menu-product h-60 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">


                  @if(count(\Cart::session($userID)->getContent()) > 0)
                  @foreach(\Cart::session($userID)->getContent() as $item)
                      <li class="list-group-item">
                          <div class="row  " >
                              <div class="col-lg-3">
                                @if($item->image)
                                <img src="/images/{{$item->image}}" style="width: 150px; height: 50px;" alt="">
                                @else
                                <img src="{{asset('assets/images/img.png')}}"style="width: 150px; height: 50px;"  alt="">
                                @endif
                              </div>
                              <div class="col-lg-6">
                                  <b>{{$item->name}}</b>
                                  <br><small>Cantidad: {{$item->quantity}}</small>
                              </div>
                              <div class="col-lg-3">
                                  <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
                              </div>
                              <hr style="width:90%">
                          </div>
                      </li>
                  @endforeach
                  <br>
                  <li class="list-group-item">
                      <div class="row">
                          <div class="col-lg-10">
                              <b>Total: </b>${{ \Cart::getTotal() }}
                          </div>
                          <div class="col-lg-2">

                          </div>
                      </div>
                  </li>
                  <br>
                  
                  <div class="row" style="margin: 0px;">
                      <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
                          Ver y editar carrito <i class="fa fa-arrow-right"></i>
                      </a>
                      <br>


                  </div>
              @else
                  <li class="list-group-item">Tu carrito esta vacío</li>
              @endif
              @else
              <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ \Cart::getTotalQuantity()}}</span>

                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="menu cel right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-56">
                  <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
              <li class="list-group-item">Inicia sesion para no perder tu carrito</li>
              @endauth
              @endif
                  </div>
                </div>
              </div>


            @can('Admin')
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Agregar </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>

              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="menu cel right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('product.create')}}">Producto</a>

                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('category.create')}}">Categoria</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('subcategory.create')}}">Subcategoria</a>
                </div>
              </div>
            </div>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Listar </span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('product.index')}}">Productos</a>

                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('category.index')}}">Categorias</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('subcategory.index')}}">Subcategorias</a>
                </div>
              </div>
            </div>
            @endcan
          </nav>
        </div>
      </div>


    </header>
    @yield('content')
  <footer class="footer">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
            <ul class="footer_nav">

              <li><a href="#">FAQs</a></li>


            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
            <ul>
              <li>



            <i class="fa fa-facebook" aria-hidden="true"></i></li>

            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_nav_container">
            {{-- <div class="cr">©2021 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Jassa</a> &amp; Loved by <a href="https://therichpost.com">Jassa</a></div> --}}
          </div>
        </div>
      </div>
    </div>
  </footer>

  @yield('js')
 

</body>
</html>