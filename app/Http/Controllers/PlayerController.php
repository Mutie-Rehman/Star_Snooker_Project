<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Player; //add Player Model - Data is coming from the database via Model.
 
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('mainsite.main');
    }
    public function index()
    {
        $players = Player::all();
        return view ('players.index')->with('players', $players);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Player::create($input);
        return redirect('player')->with('flash_message', 'Player Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);
        return view('players.show')->with('players', $player);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        return view('players.edit')->with('players', $player);
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
        $player = Player::find($id);
        $input = $request->all();
        $player->update($input);
        return redirect('player')->with('flash_message', 'player Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::destroy($id);
        return redirect('player')->with('flash_message', 'Player deleted!');  
    }

    public function table()
    {
        return view('mainsite.tables');
    }

    public function cue()
    {
        return view('mainsite.cues');
    }

    public function wlcm()
    {
        return view('players.welcome');
    }
}
