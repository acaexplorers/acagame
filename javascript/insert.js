var loop=0;
        var num=0;
      function check(){
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
        
         $('#add').click(function(){
  
        $.ajax({
                 
            url: 'insert_level.php',
            type: 'post',
            data: num,
           success: 

        });

        });
      }
      function mius(){
        var plus="<?php echo " ".$row['max'];?>";
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