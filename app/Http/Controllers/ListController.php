<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ListResorces;


class ListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index() 
    { 
       
      $lists = Lists::all();
      return response()->json($lists);
      // return BoardResorces::collection(Board::paginate('10'));
    }

    public function boardIndex($id) 
    { 
      // $lists = Lists::all();
      // return  Lists::all();
      // $lists = Lists::where('board_id','17')->get();
      $lists= Lists::where('board_id',$id)->get();
      // return $lists;
      // return dd($lists);
      // return gettype($lists);
      // if(is_null($lists))
      // {
      //    return 'hi';
      // }
      // else
      // {
      //    return 'bye';
      // }
      // return gettype(response()->json($lists));

      // return dd(response()->json($lists));
      return response()->json($lists);
      // return BoardResorces::collection(Board::paginate('10'));
    }


     public function store(Request $request) 

     { 


        // $account = Account::create($request->all());
 
        // return response()->json($account, 201);
 

        
        $lists = new Lists ;
        $lists->board_id=$request['board_id']; 
        $lists->list_name=$request['list_name'];       
        $lists->list_order=$request['list_order'];
        $lists->list_archieved=$request['list_archieved'];
       
        
        $lists->save();
        return response()->json($lists, 201);

     }



     public function show($id)

     {
        $lists = Lists::find($id);
        return response()->json($lists);
     }


     public function update(Request $request, $id)

     {  
        $lists= Lists::find($id);
        $lists->board_id = $request->input('board_id');
        $lists->list_name = $request->input('list_name');       
        $lists->list_order=$request->input('list_order');        
        $lists->list_archieved=$request->input('list_archieved');       
        $lists->save();
        return response()->json($lists, 201);

        
     }

     public function destroy($id)

     {
         $lists = Lists::find($id);
         $lists->delete();
         return response()->json('lists removed successfully');
     }


}
