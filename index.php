<!DOCTYPE html>
<html>   
    <head>
        <meta charset="utf - 8">    
        <title>Learning Resources Compiled by Coding Club IIMT</title>
        <link rel="stylesheet" href="style.css">
    </head> 
    <body>

        
      


        <ul class="tilesWrap">
            <?php  


            $jsonData = file_get_contents("java-videos.json");
            $data = json_decode($jsonData , true);
            $count = 1;

            foreach($data as $key => $value){
    
  
            
            
            ?>
            <a href="<?php echo $value['link']; ?>">
            <li>
                <h2><?php echo $count++;?></h2>
                <h3><?php echo $value['title']; ?></h3>
                <p>
                    <?php
                     echo $value['description'];
                    ?>
                </p>
                <button> Read more</button>
            </li> </a>
            <?php  } ?> 
           
          
        </ul>



    </body>   
    

</html>
