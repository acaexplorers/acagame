var loop=0;
        var num=0;
      function add(){
        var plus="<?php echo " ".$row['max'];?>";

        if (loop==0) {
           
            plus++;
            num=plus;
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
        var plus="<?php echo " ".$row['max'];?>";
        num=plus;
         $.ajax({
                 
            url: 'php/Deletelevel.php',
            type: 'POST',
            data: {id:num},
            success: function (data) {
              console.log(data);
            }
        });
        if (loop==0) {
           
            plus--;
            num=plus;
            loop++;
        }
        else{
              num--;
        }
         
            
        document.getElementById("val").innerHTML=(num);
       
      }