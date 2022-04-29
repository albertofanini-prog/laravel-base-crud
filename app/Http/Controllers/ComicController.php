<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //recuperare i dati dal db
            //SELECT * FROM comics
        $comics = Comic::withTrashed()->get();
        // $comics = Comic::onlyTrashed()->get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //passa solo una vista
            //contente un form
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        $comic->title = $data['title'];
        // $comic->description = $data['description'];
        $comic->price = $data['price'];
        // $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return redirect()->route('comics.show', $comic);

        // dd($comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // dd($id);
        //SELECT * FROM pastas
            //WHERE id = $id    
        //recuperare elemento:
        // $comic = Comic::findOrFail($id);

        //passare alla vista
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {   
        if($comic->trashed()){
            $comic->forceDelete();
        } else{
            $comic->delete();
        }

        return redirect()->route('comics.index');
    }



    public function forceDestroy(Comic $comic){
        $comic->forceDelete();

        return redirect()->route('comics.index');
    }
}
