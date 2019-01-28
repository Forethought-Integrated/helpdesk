<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Lists extends Model 
{


   protected $primaryKey='list_id';
   protected $fillable = ['board_id','name','order','archieved'];

   
       
} 