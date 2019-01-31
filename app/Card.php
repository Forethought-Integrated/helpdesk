<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Card extends Model 
{


   protected $primaryKey='card_id';
   protected $fillable = ['list_id','name','description','order','members','archieved'];

      public function list()
   {
      return $this->belongsTo(Lists::class);
   }
} 