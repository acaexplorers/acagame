<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>Admin</title>
  </head>
  <body>

       <p class="lead text-center .text-success" style="color: black;font-family: Helvetica, sans-serif;font-size: 30px;margin-top: 30px;">
                     Admin 
                             </p>
         <label for="exampleFormControlSelect1" style="margin-left: 410px;">Questions Setings:</label>  
          <div style="margin-left: 420px;margin-top:30px;">     
         <a type="button" class="btn btn-outline-primary" href="question_table.php">Preview</a>
         <a type="button" class="btn btn-outline-danger" href="Delete_question.php">Delete</a>
         <a type="button" class="btn btn-outline-success" href="add_question.php">ADD</a>
                               </div>                
          <div style="margin-left: 720px;margin-top:-38px;">     
         <a type="button" class="btn btn-outline-primary" target="frame" href="level.php">Level</a>
         <a type="button" class="btn btn-outline-danger"  target="frame" href="type.php">Type</a>
         <a type="button" class="btn btn-outline-success" target="frame" href="Category.php">Category</a>
         <a type="button" class="btn btn-outline-dark"    target="frame" href="Language.php">Language</a>
                               </div>
         <label for="exampleFormControlSelect1" style="margin-left: 410px;margin-top: 20px;">Game Setings:</label> 


         <div style="margin-left: 420px;margin-top:20px;">
         <label for="exampleFormControlSelect1"># Passes</label>  <br>     
         <button type="button" name="plus" value="+" id="minus" class="btn btn-outline-danger" onclick="minus_pass()">-</button>
         <span class="badge badge-dark" name="pass" id="pass" style="width: 60px;height: 20px;text-align: center; "><?php include "php/passes.php";

          ?></span>
         <button type="button" name="plus" value="+" id="add" class="btn btn-outline-success" onclick="add_pass()">+</button>
                               </div>
 
          <div style="margin-left: 600px;margin-top:-70px;">
         <label for="exampleFormControlSelect1"># Winners</label>  <br>     
         <button type="button" name="plus" value="+" id="minus" class="btn btn-outline-danger" onclick="minus_winner()">-</button>
          <span class="badge badge-dark" name="winner" id="winner" style="width: 60px;height: 20px;text-align: center; "><?php include "php/Winners.php";

          ?></span>
         <button type="button" name="plus" value="+" id="add" class="btn btn-outline-success" onclick="add_winner()">+</button>
                               </div>

<label for="exampleFormControlSelect1" style="margin-left: 420px;margin-top: 20px">Add new bird:</label>
          <div class="text-center" style="margin-top: 20px;margin-left: -200px;">
   <button class="btn  bg-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <img src="images/bird.png" class="rounded" alt="..." style="width: 80px;height: 80px;">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
  </div>
       
         <div class="input-group" style="width: 313px;margin-left: 630px;margin-top: 20px;">

         <form action="images.php" method="post" enctype="multipart/form-data">
           
               
           <input type="file" class="custom-file-input" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
           <input type="submit" class="btn btn-outline-success" value="Add" style="margin-top: 5px;"> 
             <label class="custom-file-label" for="inputGroupFile04">Chose bird</label>


         </form>
        <iframe class="embed-responsive-item border-0"  src="" name="frame" style="margin-left: 320px;margin-top: -373px;position:  " allowfullscreen></iframe>

          
              </div> 


               
 






 

                <script type="text/javascript">
        var loop=0;
        var num=0;
         var max="<?php echo " ".$row['max'];?>";
      function add_pass(){
        

        if (loop==0) {
           
            max++;
            num=max;
            loop++;
        }
        else{
              num++;
        }   
        document.getElementById("pass").innerHTML=(num);
        
         $.ajax({
                 
            url: 'php/insertpass.php',
            type: 'POST',
            data: {number:num},
            success: function (data) {
              console.log(data);
            }
        });
      }


      
      function minus_pass(){
        
        num=max;
        
           
             $.ajax({
                 
            url: 'php/Deletepass.php',
            type: 'POST',
            data: {id:num},
            success: function (data) {
              console.log(data);
            }
        });
        
           num--; 
        document.getElementById("pass").innerHTML=(num);
       max=num;
      }  

      var lop=0;
        var number=0;
         var max_winner="<?php echo " ".$winner['max'];?>";
      function add_winner(){
        

        if (loop==0) {
           
            max_winner++;
            number=max_winner;
            lop++;
        }
        else{
              number++;
        }   
        document.getElementById("winner").innerHTML=(number);
        
         $.ajax({
                 
            url: 'php/insertwinner.php',
            type: 'POST',
            data: {number:number},
            success: function (data) {
              console.log(data);
            }
        });
      }


      
      function minus_winner(){
        
        number=max_winner;
        
           
             $.ajax({
                 
            url: 'php/Deletewinner.php',
            type: 'POST',
            data: {id:number},
            success: function (data) {
              console.log(data);
            }
        });
        
           number--; 
        document.getElementById("winner").innerHTML=(number);
       max_winner=number;
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