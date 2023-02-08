@php
  $navBarList = config("navbar")
@endphp


<header class="container">
  <nav class="d-flex align-items-center">
    <img src="{{ Vite::asset('resources/assets/images/dc-logo.png')}}" alt="DC logo">
    <ul class="d-flex ms-auto mb-0">
      @foreach($navBarList as $navBar)
      <li class="list-group-item me-3 text-uppercase">{{ $navBar["name"] }}</li>
      @endforeach
    </ul>
  </nav>
</header>