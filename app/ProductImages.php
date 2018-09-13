<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
  protected $fillable = array('product_id','url','html_content');

 public function product(){
   $this->belongsTo('App\Product');
 }
}
