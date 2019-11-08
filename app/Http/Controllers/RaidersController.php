<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raider;

class RaidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raiders = Raider::all();
        return $raiders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Raider into the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raider = new Raider;

        // Name of the Character Raider that will become part of the guild roster.
        // String
        $raider->raider_name = $request->raider_name;

        //Class of the Character Raider that will become part of the guild roster.
        //String
        $raider->raider_class = $request->raider_class;

        //Active Specialization of the Character Raider that will become part of the guild roster.
        //String
        $raider->raider_specialization = $request->raider_specialization;

        //A Primary Profession of the Character Raider, if applicable.
        //String
        $raider->profession1 = $request->profession1;

        //The Level of the first Primary Profession of the Character Raider, if applicable. (1-300).
        //Integer
        $raider->profession1_level = $request->profession1_level;

        //The Specialization of the first Primary Profession of the Character Raider, if applicable.
        //String
        $raider->profession1_specialization = $request->profession1_specialization;

        //Another Primary Profession of the Character Raider, if applicable.
        //String
        $raider->profession2 = $request->profession2;

        //The Level of the second Primary Profession of the Character Raider, if applicable. (1-300).
        //Integer
        $raider->profession2_level = $request->profession2_level;

        //The Specialization of the second Primary Profession of the Character Raider, if applicable.
        //String
        $raider->profession2_specialization = $request->profession2_specialization;

        //The Level of the First Aid Skill of the Character Raider, if applicable. (1-300).
        //Integer
        $raider->firstAid_level = $request->firstAid_level;

        //The Level of the Cooking Skill of the Character Raider, if applicable. (1-300).
        //Integer
        $raider->cooking_level = $request->cooking_level;

        //The Level of the Fishing Skill of the Character Raider, if applicable. (1-300).
        //Integer
        $raider->fishing_level = $request->fishing_level;

        //The Rank ID of the Character Raider.
        //Integer
        $raider->rank_id = $request->rank_id;

        //The date the Character Raider earned latest rank.
        //Timestamp
        $raider->date_of_rank = $request->date_of_rank;

        //The date the Character Raider joined the guild, if applicable.
        //Timestamp
        $raider->date_joined = $request->date_joined;

        //Is the Chacter raider in the guild?
        //Boolean
        $raider->in_guild = $request->in_guild;

        //Saves the Raider to the database.
        $raider->save();

        return response()->json(['success' => $raider],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
