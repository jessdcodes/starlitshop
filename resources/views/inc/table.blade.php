@if(count($products))
<table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Supplier</th>
            </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->supplier_id}}</td>
            </tr>
           @endforeach
        </tbody>
</table>
@endif
<script type="text/javascript">
$(document).ready( function () {
  $('#myTable').DataTable();
} );
<!--script ending tag -->
