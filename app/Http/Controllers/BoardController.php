<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BoardResorces;


class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    { 
       //return  Board::all();
      $boards = Board::all();
      return response()->json($boards);
      // return BoardResorces::collection(Board::paginate('10'));
    }


     public function store(Request $request) 

     { 

        // $account = Account::create($request->all());
 
        // return response()->json($account, 201);
 

        
        $boards = new Board;
        $boards->owner_id=$request['owner_id']; 
        $boards->board_name=$request['board_name'];
        $boards->board_description=$request['board_description'];
        
        $boards->save();
        return response()->json($boards, 201);
 
     }



     public function show($id)

     {
        $boards = Board::find($id);
        return response()->json($boards);
     }

     
     
     public function update(Request $request, $id)

     {  
        $boards= Board::find($id);
        $boards->owner_id = $request->input('owner_id');
        $boards->board_name = $request->input('board_name');
        $boards->board_description = $request->input('board_description');        
        $boards->save();
        return response()->json($boards, 201);

        
     }

     public function destroy($id)

     {
         $boards = Board::find($id);
         $boards->delete();
         return response()->json('boards removed successfully');
     }


}
