@extends('layouts.app')

@section('content')
   <h1>Products</h1>
   <hr>

<br>
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <select class="form-control" id="select-product-category">
          <option value="All">All</option>
          <option value="E">Earrings</option>
          <option value="N">Necklace</option>
        </select>
      </div>
    </div>
  </div>

  <br>
@endsection
