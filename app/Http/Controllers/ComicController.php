<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicList = Comic::all();
        $data = [
            'comics' => $comicList,
            'store' => config('store')
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'store' => config('store')
        ];
        return view('comics.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:3000',
            'thumb' => 'required|max:3000',
            'price' => 'required|max:50',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);
        $newComic = Comic::create($data);
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singleComic = Comic::find($id);
        $data = [
            'comic' => $singleComic,
            'store' => config('store')
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            'comic' => $comic,
            'store' => config('store')
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|max:3000',
            'thumb' => 'required|max:3000',
            'price' => 'required|max:50',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
