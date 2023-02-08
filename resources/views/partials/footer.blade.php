@php
$footerData = config("footer")
@endphp

<footer class="text-white">

  <section id="footer-links" class="py-5 overflow-hidden">
    <div class="container position-relative">
      <div class=" d-flex flex-column flex-wrap h-100">
        @foreach($footerData as $footerElement)
        <article class="w-100">
          <h2 class="fs-5 text-uppercase">{{$footerElement["title"]}}</h2>
          <ul class="ps-0">
            @foreach($footerElement["list"] as $footerLink)
            <li class="list-group-item text-secondary">{{$footerLink}}</li>
            @endforeach
          </ul>
        </article>
        @endforeach
      </div>
      <figure class="position-absolute top-50 end-0 translate-middle-y">
        <img src="{{Vite::asset('resources/assets/images/dc-logo-bg.png')}}" alt="dc logo" class="w-100">
      </figure>
    </div>
  </section>

  <section id="footer-bottom" class="container d-flex py-4 align-items-center">
    <button class="text-white border-2 p-2 fs-5">SIGN-UP NOW!</button>
    <div class="ms-auto fs-5">FOLLOW US</div>
    <img src="{{Vite::asset('resources/assets/images/footer-facebook.png')}}" alt="Facebook" class="ps-3">
    <img src="{{Vite::asset('resources/assets/images/footer-twitter.png')}}" alt="Twitter" class="ps-3">
    <img src="{{Vite::asset('resources/assets/images/footer-youtube.png')}}" alt="Twitter" class="ps-3">
    <img src="{{Vite::asset('resources/assets/images/footer-pinterest.png')}}" alt="Pinterest" class="ps-3">
    <img src="{{Vite::asset('resources/assets/images/footer-periscope.png')}}" alt="Periscope" class="ps-3">
  </section>
</footer>