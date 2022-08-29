@extends('welcome')
@section('content')
    <h2 class="border-b-2 border-r-sky-900 mb-2 p-2 italic">Editar Post</h2>
    <div class="container mx-auto px-8 mt-6">
        <form action="{{route('Cursos.update',$post)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" hidden  name="slug" value="slug por defecto">
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="titulo">Título</label>
                <textarea name="titulo" id="titulo" cols="30" rows="3">{{$post ->title}}</textarea>
            </div>
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="body">Contenido</label>
                <textarea class="w-full" name="body" id="body" cols="30" rows="10">{{$post ->body}}</textarea>
            </div>
            <input class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Actualizar Post">
        </form>
    </div>
@endsection
