<div style="width:90%">
<table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>

            <tr id="tr">

            </tr>

        </tbody>
</table>
</div>
<script type="text/javascript">

$(document).ready( function () {

  var pathname = window.location.pathname;

  if(pathname=="/shop.starlit/public/products"){
    loadProducts();
  }else if(pathname=="/shop.starlit/public/suppliers"){
    loadSuppliers();
  }
  function loadProducts(){
    var columns = [{
            "sTitle": "Name",
            "mData": "name"
        }, {
            "sTitle": "Price",
            "mData": "price"
        }, {
            "sTitle": "Category_ID",
            "mData": "category_id"
        }, {
            "sTitle": "Supplier_ID",
            "mData": "supplier_id"
        }]

    $.ajax({
        'url': '{{ url('products') }}',
        'method': "GET",
        'contentType': 'application/json'
    }).done( function(data) {
          var example_table = $('#myTable').DataTable({
            "aaData": data,
            "columns": columns
          });
     });
  }

  function loadSuppliers(){
    var columns = [{
            "sTitle": " Company Name",
            "mData": "company_name"
        }, {
            "sTitle": "Contact Person",
            "mData": "contact_person"
        }, {
            "sTitle": "Contact Number",
            "mData": "contact_number"
        }, {
          "sTitle": "Contact Address",
          "mData": "contact_address"
        }
        , {
          "sTitle": "Contact Email",
          "mData": "contact_email"
        }]

    $.ajax({
        'url': '{{ url('suppliers') }}',
        'method': "GET",
        'contentType': 'application/json'
    }).done( function(data) {
          var example_table = $('#myTable').DataTable({
            "aaData": data,
            "columns": columns
          });
     });
  }
});
<!--script ending tag -->
