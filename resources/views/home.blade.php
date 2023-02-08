@extends("layouts.app")

@section("main")
  <main>
    <div class="container">
      <section id="serie-cards" class="row">
        @foreach ($dcData as $element)
        <div class="col-2">
          <img src="{{$element['thumb']}}" alt=" {{$element['title']}}" class="img-fluid">
          <div>
            {{$element["title"]}}
          </div>
          
        </div>
        @endforeach
      </section>
    </div>
  </main>
@endsection