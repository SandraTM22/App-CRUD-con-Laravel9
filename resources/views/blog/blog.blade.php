@extends('layaut')
@section('content')
    <div class="mx-auto text-xl flex justify-between items-center border-b-2 border-r-sky-900 mb-2 p-2">
        <h2 class="  italic">Blog</h2>
        <a class="bg-teal-500 text-white hover:bg-teal-700 hover:text-white border shadow-inner hover:border-transparent rounded px-2" href="{{route('Cursos.create')}}">Nuevo Post</a>
    </div>
    <div class=" md:container md:mx-auto p-4">
        @if(session()->has('message'))
            <div class="bg-green-100 text-green-900 p-4 m-2">
                {{session()->get('message')}}
            </div>
        @endif
        <ul>
        @foreach($posts as $post)
            <div class=" grid grid-cols-1 gap-2 items-center mb-4 shadow-lg  sm:grid-cols-2 sm:hover:shadow-lg" >
                <li class="list-none p-4 font-sans">
                    <a href="{{route('Cursos.show',$post->id)}}">{{$post -> title}}</a>
                </li>

                <div x-cloak x-data="data()" class="flex gap-2.5 justify-self-center p-4  sm:justify-self-end md:mr-2">
                    <form method="POST" action="{{route('Cursos.destroy', $post ->id)}}" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="w-28 h-10 mt-2  flex bg-transparent hover:bg-red-600 text-red-700 font-medium hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded p-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            {{--<input type="submit" value="Borrar" >--}}
                            <p class="cursor-pointer" @click="isOpen()">Borrar</p>
                        </div>
                    <div x-show.transition.duration.500ms="open" class=" fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center px-4 md:px-0 ">
                        <div @click.away ="close()" class="flex flex-col max-w-lg bg-white shadow-2xl rounded-lg border-2 border-gray-400 p-6">
                            <div class="flex items-end justify-end mb-4">
                                <p class="cursor-pointer" @click="close()">
                                    <svg class="h-8 w-8 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="18" y1="6" x2="6" y2="18" />  <line x1="6" y1="6" x2="18" y2="18" /></svg>
                                    </p>
                            </div>
                            <div>
                                <h3 class="text-2xl text-center mb-6">¿Estás seguro que quieres eliminar el post?</h3>
                                <input class="cursor-pointer w-28 h-10 bg-transparent hover:bg-red-600 text-red-700 font-semibold hover:text-white border border-red-500 hover:border-transparent rounded block mx-auto"
                                       type="submit" value="Eliminar">
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="w-28 h-10 my-2 flex bg-transparent hover:bg-green-700 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded p-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        <a href="{{route('Cursos.edit',$post ->id)}}">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
        </ul>
            {{$posts->links()}}
    </div>

    <script>
        function data(){
            return {
                open : false,
                isOpen(){
                    this.open =!this.open
                },
                close(){
                    this.open = false
                }
            }
        }
    </script>

    {{--<div x-data="{open:false}" x-show.transition.duration.500ms = "open" class="fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center px-4 md:px-0">
        <div @click.away="open=false" class="flex flex-col max-w-lg bg-white shadow-2xl rounded-lg border-2 border-gray-400 p-6">
            <div class="flex justify-between mb-4">
                <h3 class="font-bold text-2xl">Modal</h3>
                <button @click="open=false">Boton de cerrar</button>
            </div>
            <div>
                <p class="text-center mb-6">¿Estás seguro que quieres eliminar el post?</p>
            </div>
        </div>
    </div>--}}
@endsection
