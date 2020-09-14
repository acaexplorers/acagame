<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>type</title>
  </head>
  <body>
   <button type="button" class="btn btn-success" style="margin-left: 60px;margin-top: 5px;" onclick="hide()" id="button">Add new Type</button>

    <table class="table table-striped" style="width: 100px;margin-left:67px;margin-top: 10px;" id="table">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
            include "php/type.php"
     ?>
    

  </tbody>
</table>   

<form id="form" action="php/inserttype.php" method="post" style="margin-left: 50px;margin-top: 40px;">
	 <div class="form-group" style="width: 200px;">
      <label for="formGroupExampleInput">Type:</label>
      <input class="form-control" id="Category" name="type" >
<input type="submit" class="btn btn-success" style="margin-top: 5px;margin-left: 70px;" value="ADD">
</form>
<script type="text/javascript">
	var x = document.getElementById("form");
	var y= document.getElementById("table");
	var z= document.getElementById("button");
	x.style.display = "none";
function hide() {
	 x.style.display = "block";
 
     y.style.display = "none";
     z.style.display = "none";
 
}
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>