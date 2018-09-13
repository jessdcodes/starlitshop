<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
  protected $fillable = array('category_id','name');
  public function categories(){
    $this->belongsTo('App\Categories');
  }
}
