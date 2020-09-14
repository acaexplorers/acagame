<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sudent</title>
  </head>
  <body>

     <p class="lead text-center .text-success" style="color: black;font-family: Helvetica, sans-serif;font-size: 30px;margin-top: 0px;">
                     Student
                             </p>


   

 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 145px;margin-top:30px;">
    Questions category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php 
            include 'php/Get_category.php';
            ?>
  </div>
</div> 


     <button type="button" class="btn btn-success btn-sm" style="margin-top: 30px;margin-left: 5px;">Get Question</button>
   
<div class=" container-fluid " style="margin-top: 30px;width: 225px;margin-left: 0px" >
    <label for="exampleFormControlSelect1">Your Question:</label>
    <p class="text-muted">
       what is the color of sky?

     </p>
     
   </div>  
   <div class=" container-fluid " style="margin-top: -72px;width: 225px;margin-left: 232px;">
    <label for="exampleFormControlSelect1">Answer:</label>
    <input type="text" class="form-control" aria-label="Text input with dropdown button">
     <button type="button" class="btn btn-success btn-sm" style="margin-top: 30px">Submit</button>
   </div>


<div class=" container-fluid " style="margin-top: 30px;width: 225px;margin-left: 0px" >
    <label for="exampleFormControlSelect1">Curent turn player Question:</label>
    <p class="text-muted">
       what is the color of sky?

     </p>
   </div>

<div class=" container-fluid " style="margin-top: -95px;width: 225px;margin-left: 232px;" id="result">
    <label for="exampleFormControlSelect1">Answer:</label>
    <p class="text-muted">
       Blue.
     </p>
     <button type="button" class="btn btn-success btn-sm" style="margin-top: 30px">Vote</button>
      <button type="button" class="btn btn-danger btn-sm" style="margin-top: 30px;margin-left: 70">Reject</button>
   </div>

<script type="text/javascript">
  

// Retrieve
document.getElementById("result").innerHTML = localStorage.getItem("lastname");

let ws=new WebSocket("ws://localhost:9090")
ws.onmessage= message =>  {
  // message.data 
  const response = JSON.parse(message.data);
   console.log(response);
}

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>