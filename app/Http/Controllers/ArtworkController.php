<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Collection;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function landing()
    {
        return view('artworks.landing');
    }


    public function index()
    {
        $allArtworks = Artwork::select('title', 'file_url', 'slug')->paginate(12);
        return view('artworks.index')->with('allArtworks', $allArtworks);
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
        $artwork = Artwork::where('slug', $slug)->first();
        return view('artworks.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function navigate($slug, $action)
    {
        $artwork = Artwork::where('slug', $slug)->firstOrFail();

        switch ($action) {
            case 'first':
                $nextArtwork = Artwork::orderBy('creation_date')->orderBy('id')->first();
                break;
                case 'previous':
                    // Get the previous artwork by creation date and id
                    $nextArtwork = Artwork::where('creation_date', '<', $artwork->creation_date)
                        ->orWhere(function ($query) use ($artwork) {
                            $query->where('creation_date', '=', $artwork->creation_date)
                                  ->where('id', '<', $artwork->id); // Order by id when dates are equal
                        })
                        ->orderBy('creation_date', 'desc')
                        ->orderBy('id', 'desc') // Reverse the id order for previous
                        ->first();
                    break;
            case 'random':
                $nextArtwork = Artwork::inRandomOrder()->first();
                break;
            case 'next':
                $nextArtwork = Artwork::where('creation_date', '>', $artwork->creation_date)
                    ->orWhere(function ($query) use ($artwork) {
                        $query->where('creation_date', '=', $artwork->creation_date)
                            ->where('id', '>', $artwork->id);
                    })
                    ->orderBy('creation_date')
                    ->orderBy('id') // Regular order for next
                    ->first();
                break;
            case 'last':
                // Last artwork, ordered by created_at and id
                $nextArtwork = Artwork::orderBy('creation_date', 'desc')->orderBy('id', 'desc')->first();
                break;
            default:
                abort(404);
        }

        return redirect()->route('artworks.show', ['slug' => $nextArtwork->slug]);
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
