<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CardResorces;


class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index() 
    { 
      $cards = Card::all();
      return response()->json($cards);
      // return BoardResorces::collection(Board::paginate('10'));
    }

    public function cardIndex($id) 
    { 
      // return 'hi'; 
      // $cards = Card::all();
      // $lists = Lists::where('board_id','17')->get();
      $cards = Card::where('list_id',$id)->get();
      return response()->json($cards);
      // return BoardResorces::collection(Board::paginate('10'));
    }

     public function store(Request $request) 
     { 
        $cards = new Card;
        $cards->list_id=$request['list_id']; 
        $cards->card_name=$request['card_name'];
        $cards->card_description=$request['card_description'];
        $cards->card_order=$request['card_order'];
        $cards->card_members=$request['card_members'];
        $cards->card_archieved=$request['card_archieved'];
        $cards->save();
        return response()->json($cards, 201);
     }



     public function show($id)
     {
        $cards = Card::find($id);
        return response()->json($cards);
     }


     public function update(Request $request, $id)

     {  
        $cards= Card::find($id);
       // $cards->list_id = $request->input('list_id');
        $cards->card_name = $request->input('card_name');
        $cards->card_description = $request->input('card_description'); 
        $cards->card_order=$request->input('card_order');
        $cards->card_members=$request->input('card_members');
        $cards->card_archieved=$request->input('card_archieved');       
        $cards->save();
        return response()->json($cards, 201);
     }

     public function destroy($id)
     {
         $cards = Card::find($id);
         $cards->delete();
         return response()->json('cards removed successfully');
     }


}
