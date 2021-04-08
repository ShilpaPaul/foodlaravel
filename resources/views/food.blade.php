<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="body">
   <div class="container">
   <div class="row">
   <div class="col col-12 col-sm-5 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
   <form action="/foodread" method="post">
   {{ csrf_field() }}
   <table class="table">
   <tr>
       <td>DISH NAME</td>
       <td>
       <input type="text" class="form-control" name="fname">
       </td>
   </tr>
   <tr>
       <td>ORDER NO</td>
       <td><input type="text" class="form-control" name="forder" ></td>
   </tr>
   <tr>
       <td>PRICE</td>
       <td><input type="text" class="form-control" name="fprice"></td>
   </tr>
   <tr>
       <td>QUANTITY</td>
       <td><input type="text" class="form-control" name="fqty"></td>
   </tr>
   </table>
   <center><button class="btn btn-warning">SUBMIT</button></center>
   </form>
   </div>
   </div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>