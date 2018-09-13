<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = array('name');

  public function products(){
    $this->hasMany('App\Product');
  }

  public function subcategories(){
    $this->hasMany('App\SubCategories');
  }
}
