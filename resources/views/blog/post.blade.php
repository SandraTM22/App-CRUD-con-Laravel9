{{--    La variable $id se la pasamos a la vista, a través de la url cuando llamamos a la ruta--}}
@extends('layaut')
@section('content')

    @if(session()->has('message'))
        <div class="max-w-6xl mx-auto bg-green-100 text-green-900 p-4 m-2">
            {{session()->get('message')}}
        </div>
    @endif
    <div class="mx-auto text-xl flex justify-between items-center border-b-2 border-r-sky-900 mb-2 p-2"">
        <h2 class=" text-xl italic">Post Nº {{$post->id}}</h2>
        <a class="bg-teal-500 hover:bg-teal-700 text-white px-2 rounded"href="{{route('Cursos.index')}}">Volver a Blog</a>
    </div>

    <div class="max-w-6xl container mx-auto px-8 mt-8">
        <h2 class="font-bold italic mb-4">{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </div>

@endsection
