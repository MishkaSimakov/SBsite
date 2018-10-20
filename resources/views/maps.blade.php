@include('partials.head')

@foreach ($maps as $map)
  <a href="{{route('map', $map)}}">
  <h2>{{$map->name}}<sub>{{ $map->like_count }}</sub></h2>
@endforeach

@include('partials.footer')