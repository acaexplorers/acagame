<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>room</title>
  </head>
  <body>
  <div>
  <div class="form-group" style="width: 114px;position: absolute; margin-top: 0px;margin-left: 2px;">
      <label for="formGroupExampleInput">Level</label>
    <select class="form-control" id="exampleFormControlSelect1" >
      <?php 
            include 'php/Get_level.php';
            ?>
    </select>
  </div>  
                   
   <div class="text-center" style="margin-top: -0px;">
   <button class="btn  bg-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <img src="images/bird.png" class="rounded" alt="..." style="width: 80px;height: 80px;">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><img src="images/Scientist.png" class="rounded" alt="..." style="width: 80px;height: 80px;"></a>
    <a class="dropdown-item" href="#"><img src="images/Explorer.png" class="rounded" alt="..." style="width: 80px;height: 80px;"></a>
    <a class="dropdown-item" href="#"><img src="images/Scientist.png" class="rounded" alt="..." style="width: 80px;height: 80px;"></a>
  </div>
   <br>
  <label for="formGroupExampleInput">select your bird:</label>
</div>
<div class="form-group" style="width: 114px;position: absolute; margin-top: -0px;margin-left: 305px;">
      <label for="formGroupExampleInput">Language</label>
    <select class="form-control" id="exampleFormControlSelect1" >
      <?php 
            include 'php/Get_language.php';
            ?>
    </select>
  </div> 
 
 <div class="form-group" style="width: 114px;position: absolute; margin-top: -60px;margin-left: 2px;">
      <label for="formGroupExampleInput"># passes</label>
    <select class="form-control" id="exampleFormControlSelect1" >
      <?php 
            include 'php/Get_passes.php';
            ?>
    </select>
  </div>   
  
<div class="form-group" style="width: 114px;position: absolute; margin-top: -60px;margin-left: 305px;">
      <label for="formGroupExampleInput"># winners</label>
    <select class="form-control" id="exampleFormControlSelect1" >
      <?php 
            include 'php/Get_winners.php';
            ?>
    </select>
  </div> 

 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>