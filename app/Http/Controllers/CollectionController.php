<?php

namespace App\Http\Controllers;
use App\Models\Artwork;
use App\Models\Collection;


use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCollections = Collection::All('title', 'file_url', 'slug');
        return view('collections.index')->with('allCollections', $allCollections);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $collection = Collection::where('slug', $slug)->firstOrFail();

        $artwork = $collection->artworks;

        return view('collections.index')->with(
            [
                'allArtworksFromCollection' => $artwork,
                'collection' => $collection
            ]
        )
        ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
