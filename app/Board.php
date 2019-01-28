<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Board extends Model {
     

    
    protected $primaryKey='board_id';

    protected $fillable = ['owner_id','name','description'];
   
}