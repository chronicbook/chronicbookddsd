@extends ('base')

@section('title','contacts')


@section ('content')

    <h1>bonjour ici ce sont les contact </h1>
    <img src="{{ asset('/images/image.jpg')  }}" alt="image inconue">
    <p><a href="{{ route('app_home') }}">revenir a la page d'acceuiel</a></p>
@endsection