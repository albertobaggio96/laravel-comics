@extends("layouts.app")

@section("main")
    <section id="serie-cards">
      <div class="container">
        <div class="row pt-5">
          @foreach ($dcData as $element)
          <a href="{{ route('info-card')}}" class="col-2 text-white text-decoration-none">
            <img src="{{$element['thumb']}}" alt=" {{$element['title']}}" class="img-fluid">
            <div>
              {{$element["series"]}}
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>
@endsection