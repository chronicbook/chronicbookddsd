@extends ('base')


@section ('content')

            <h1>bonjour tous chronicbook</h1>
            <img src="{{ asset('/images/image2.jpg') }}" alt="image inconue">
            <p> la date d'aujourdhuit est {{ date ('d/m/y') }}</p>

@endsection
