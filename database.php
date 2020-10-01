
<?php

/**
 * connect to database
 *
 * @return instance
 */

function connectDataBase (){
    $db = new PDO('mysql:host=db; dbname=cocktails', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

$connect = connectDataBase();

$get = "SELECT `id`, `name`, `ingredients`,`method`, `imagesUrl` FROM `cocktails`";

/**
 * prepare query for database
 *
 * @return array
 */

function prepareQuery($connect, $get){
    $query = $connect->prepare($get);
    $query->execute();
    $result = $query->fetchAll(); 
    return $result;
}

$result = prepareQuery($connect, $get);

?>

<section class="grid">
    <div class="cocktail-wrapper">

        <?php 
             foreach($result as $cocktail){
                echo '<div class="' . 'image image-' .$cocktail['id'] . '">';

                if($cocktail['imagesUrl']){
                    echo file_get_contents($cocktail['imagesUrl']); 
                } else {
                    echo file_get_contents('images/mojito.svg');
                }
                 
                echo '<h2>' . $cocktail['name'] . '</h2>';
                echo '<p class="ingredients">' . $cocktail['ingredients'] . '</p>';
                echo '<p class="method">' . $cocktail['method'] . '</p>';
                echo '<div class="rating">' . $cocktail['rating'] . '</div>';
                echo '</div>';
            }
        ?>
    </div>
</section>
