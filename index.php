
<?php 
// include 'templates/header.php';

?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktail Hour</title>
  <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>


    <body>
      
         <nav>
                <div class="home"><a href="">Home</a></div>
                <div class="add"><a href="">Add A Cocktail</a></div>
                <div class="search"><a href="">Search</a></div>
        </nav>
       
  <h1>Cocktail Hour!</h1>

   <?php 
   
    include 'database.php';
    include 'form.php'; 
    
   ?>
 
    
    <footer>Copyright myc 2020</footer>   
    </body>

</html>

 