
<?php
// Step 1: Create a connection
$db = new PDO('mysql:host=db; dbname=cocktails', 'root', 'password');

// Step 2: Prepare a query
$query = $db->prepare('SELECT * FROM `cocktails`;');

$query->setFetchMode(PDO::FETCH_ASSOC);

// Step 3: Execute the query
$query->execute();
$result = $query->fetchAll(); 

?>

<section class="grid">
    <div class="cocktail-wrapper">
        <?php 
            foreach($result as $cocktail){
            echo '<div class="' . 'image-' .$cocktail['id'] . '">';
            echo '<div class="' . 'image' . '"></div>' ;
        
            // echo '<div class="' . $cocktail['id'] . '"'; 
            echo '<h2>' . $cocktail['name'] . '</h2>';
            echo '<p class="ingredients">' . $cocktail['ingredients'] . '</p>';
            echo '<p class="method">' . $cocktail['method'] . '</p>';
            echo '</div>';
            
}
?>
    </div>


</section>