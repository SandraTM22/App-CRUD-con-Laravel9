{{--    La variable $id se la pasamos a la vista, a través de la url cuando llamamos a la ruta--}}
@extends('welcome')
@section('content')
    <div class="flex flex-row gap-4 mb-4">
        <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold px-2 rounded"href="{{route('Cursos.index')}}">Volver a Blog</a>
    </div>
    @if(session()->has('message'))
        <div class="bg-green-100 text-green-900 p-4 m-2">
            {{session()->get('message')}}
        </div>
    @endif
    <h2 class="border-b-2 border-r-sky-900 mb-2 p-2 italic">Post Nº {{$post->id}}</h2>
    <div class="container mx-auto px-8 mt-8">
        <h2 class="font-bold italic mb-4">{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </div>

@endsection
