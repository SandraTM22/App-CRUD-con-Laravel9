@extends('layaut')
@section('content')
    <h2 class="text-xl mx-auto border-b-2 border-r-sky-900 mb-2 p-2 italic">Crear nuevo Post</h2>
    <div class="mx-auto container mx-auto px-8 mt-6 pb-20">
        <form action="{{route('Cursos.store')}}" method="POST">
            @csrf
            <input type="text" hidden  name="slug" value="slug por defecto">
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="titulo">Título</label>
                <textarea required class="capitalize border-2 border-double border-gray-500 rounded p-2" name="titulo" id="id_titulo" placeholder="Introduce el título..." cols="30" rows="3" ></textarea>
            </div>
            <div class="w-full flex gap-4 justify-between flex-col mb-4">
                <label class="text-lg font-medium" for="body">Contenido</label>
                <textarea required class=" capitalize border-2 border-double border-gray-500 rounded p-2 " name="body" id="body" cols="30" rows="8" placeholder="Escribe aquí el contenido de tu post..."></textarea>
            </div>
            <input class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Crear Post">
        </form>
    </div>
@endsection
