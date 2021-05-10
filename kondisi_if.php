<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php dasar</title>
</head>
<body>
    <h2>KONDISI IF</h2>
    <?php 
    $nama_hari = date("l"); 
    if ($nama_hari == "Sunday") 
    {    
         echo "Minggu";
     } 
    elseif 
    ($nama_hari == "Monday") 
    {   
      echo "Senin";
       } else
        {     
        echo "Selasa";
         } 
    ?> 
</body>
</html>