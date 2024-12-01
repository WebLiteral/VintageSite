<?php

namespace App\Http\Controllers;

use App\Models\Article;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index')->with('allArticles', $articles);
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
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            $article = (object) [
                'title' => 'Project Zomboid',
                'content' => "<p><strong>Project Zomboid</strong> is an isometric zombie survival game developed by The Indie Stone. Set in the fictional Knox County, Kentucky, players are tasked with surviving a zombie apocalypse. Unlike typical survival games, Project Zomboid places a strong emphasis on realism and the consequences of poor decision-making. Players must manage hunger, thirst, fatigue, injuries, and mental health, all while avoiding or battling hordes of zombies. The game’s open-world sandbox allows players to explore various locations, scavenge for supplies, and fortify their safehouses. Every decision can lead to life or death, and death is permanent.</p>

    <p>The game's world is procedurally generated, so each new playthrough offers different experiences and challenges. The survival mechanics require players to be strategic in their actions. The zombies are slow but relentless, and while they may not be the fastest threat, they pose a grave danger if the player isn't careful. Project Zomboid also features a detailed crafting system, allowing players to build, barricade, and improve their environment. The longer a player survives, the more difficult the game becomes, with more zombies appearing, weather conditions changing, and resources becoming scarce.</p>

    <p>Some key features of Project Zomboid include:</p>
    <ul>
        <li>Open-world sandbox gameplay with multiple ways to survive.</li>
        <li>Realistic survival mechanics such as hunger, thirst, and health management.</li>
        <li>Multiplayer mode where you can collaborate or compete with other players.</li>
        <li>In-depth crafting and building systems.</li>
        <li>Permanent death (no respawns) to increase tension and immersion.</li>
    </ul>

    <img src='https://i.kinja-img.com/image/upload/c_fit,q_60,w_645/ac24e4478bf80b2ec46116e43e4d7afb.jpg' alt='Project Zomboid gameplay' width='600'>",
                'description' => "Uh oh. Looks like the article you're searching for doesn't exist. Here, have some information about Project Zomboid instead."
            ];
        }

        return view('articles.show', compact('article'));
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
