<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body>
<div style="margin-left: 50px;margin-top:35px;">
         
         <label for="exampleFormControlSelect1"># Level</label>  <br>     
        <button type="button" name="plus" value="+" id="minus" class="btn btn-outline-danger" onclick="mius()">-</button>
         <span class="badge badge-dark" name="val" id="val" style="width: 60px;height: 20px;text-align: center; "><?php include "php/level.php";

          ?></span>
         <button type="button" name="plus" value="+" id="add" class="btn btn-outline-success" onclick="add()">+</button>

                               </div>
                               <div name="check" id="check">
                                 

                               </div>
      <script type="text/javascript">
                       
        var loop=0;
        var num=0;
         var max="<?php echo " ".$row['max'];?>";
      function add(){
        

        if (loop==0) {
           
            max++;
            num=max;
            loop++;
        }
        else{
              num++;
        }   
        document.getElementById("val").innerHTML=(num);
        
         $.ajax({
                 
            url: 'php/insertlevel.php',
            type: 'POST',
            data: {number:num},
            success: function (data) {
              console.log(data);
            }
        });
      }


      
      function mius(){
        
        num=max;
        
           
             $.ajax({
                 
            url: 'php/Deletelevel.php',
            type: 'POST',
            data: {id:num},
            success: function (data) {
              console.log(data);
            }
        });
        
           num--; 
        document.getElementById("val").innerHTML=(num);
       max=num;
      }
                </script>          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>