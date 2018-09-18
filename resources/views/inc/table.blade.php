
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

            <tr id="tr">

            </tr>

        </tbody>
</table>

<script type="text/javascript">

$(document).ready( function () {

  $.ajax({
      'url': '{{ url('products') }}',
      'method': "GET",
      'contentType': 'application/json'
  }).done( function(data) {
        var example_table = $('#myTable').DataTable({
          "aaData": data,
          "columns": [
            { "data": "name" },
            { "data": "price" },
            { "data": "category_id" },
            { "data": "supplier_id" }
           ]
        });
   });
   
});
<!--script ending tag -->
