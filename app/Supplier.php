<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  protected $fillable = array('company_name','contact_person','contact_number','contact_address','contact_email');

  public function products(){
    $this->hasMany('App\Product');
  }
}
