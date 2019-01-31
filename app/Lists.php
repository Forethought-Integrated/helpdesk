<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Lists extends Model 
{


   protected $primaryKey='list_id';
   protected $fillable = ['board_id','name','order','archieved'];

   public function board()
   {
      return $this->belongsTo(Board::class);
   }
   

    public function cards()
   {
     return $this->hasMany(Card::class);
   }
   
       
} 