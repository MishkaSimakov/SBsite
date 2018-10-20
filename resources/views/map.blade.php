@include('partials.head')

<h1>{{ $map->name }}</h1>
<h2>{{ $map->description }}</h2>
<h3>{{ $map->like_count }}</h3>

@include('partials.footer')
