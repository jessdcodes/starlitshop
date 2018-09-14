<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Bootstrap 4 & JQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--Font awesome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!--Data Tables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <title>Project</title>
  </head>
  <body>
    <header>
        @include('inc.navbar')
    </header>

    <aside class="main-sidebar">
      @include('inc.sidebar_menu')
    </aside>


  </body>

  <script type="text/javascript">
     $(document).ready(function(){
       mainContent();

       function mainContent(){
         let output= '';
         output+=`
          @yield('content')
          @include('inc.table')

         `;

         $('#main').append(output+'<\/script>');
         console.log(output);
       }
     });
  </script>
</html>
