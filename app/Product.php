<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = array('name', 'description','price','image_id','category_id','supplier_id');

  public function product_images(){
    $this->hasMany('App\ProductImages');
  }
  public function categories(){
    $this->belongsTo('App\Categories');
  }

  public function supplier(){
    $this->belongsTo('App\Supplier');
  }
}
