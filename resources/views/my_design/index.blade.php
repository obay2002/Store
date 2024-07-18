<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">


    <title>trian page</title>
</head>
<body>
   <div class="list">
   <a href="{{route('products.index')}}">Home</a>
    <a href="{{ route('products.create') }}">Insert Product</a>
    <div class="dropdown">
        <button class="dropbtn">category</button>
        <div class="dropdown-content">
          <a href="{{route('products.food')}}">food</a>
          <a href="{{route('product.mickup')}}">mickup</a>
          <a href="{{route('product.electrical')}}">smart product</a>
         
        </div>
      </div>
    <img src="{{ asset('images/logo.png') }}" alt="" style="float: right;width: 153px;">
   </div>
   @yield('title')
   
   @yield('content')
   @yield('mickup')
   @yield('food')
   @yield('electrical')
   

  
</body>
</html>