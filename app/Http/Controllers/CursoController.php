<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //de esta manera recogemos todos los registros
        $posts = Post::all();

        //ahora retornamos la vista pasandole la variable
       return view('blog.blog',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return "Aqui creamos un nuevo Post";*/
        return view('blog.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Esta funcion arrasta de la url el parametro que le pasemos
    public function show($id)
    {
        $post = Post::find($id);
        //Para no tener que hacer el array ['id'=>$id], se puede poner compact('id') y esta funcion lo escribirá solo
       return view('blog.post',compact('id'),compact('post'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Este metodo se define para guardar el nuevo Post
        //En el momento que se envia el formulario el objeto queda almacenado en la variable $request
        //Instanciamos como nuevo post la variable
        $post = new Post();
        //El titulo del post es el titulo que recogemos con request
        $post->title = $request->titulo;
        $post->slug = $request->slug;
        $post->body = $request->body;

        //Con save guardamos en la base de datos
        $post->save();

        //ahora tendremos que retornar a una vista y pasar un mensaje de exito
        return redirect()->route('Cursos.show',$post)->with('message','El post se ha creado correctamente');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recuperamos el objeto con el $id que recogemos por url
        $post = Post::find($id);

        return view('blog.edit',compact('id'),compact('post'));

        /*Tambien podemos recuperar el objeto pasando en edit( Post $id)
         y laravel ya entiende que necesitamos el objeto con el $id*/
        /*Asi mismo podemos poner edit(Post $post) pero en la ruta del source habria que cambiarlo*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request ->titulo;
        $post->slug = $request -> slug;
        $post->body = $request ->body;

        $post->save();
        return redirect()->route('Cursos.show',$post)->with('message','El post se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return back()->with('message','¡El post ha sido eliminado correctamente!');

    }
}
