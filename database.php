
<?php
// Step 1: Create a connection
$db = new PDO('mysql:host=db; dbname=cocktails', 'root', 'password');

// Step 2: Prepare a query
$query = $db->prepare('SELECT * FROM `cocktails`;');
// Sets this query (and this query only)
// To fetch an assoc array
// Best to do this on the db at the start
$query->setFetchMode(PDO::FETCH_ASSOC);
// Step 3: Execute the query
$query->execute();
$result = $query->fetchAll(); // Returns an assoc array of arrays
echo '<pre>';
// print_r($result);
foreach($result as $cocktail){
    print_r('<h2>' . $cocktail['name'] . '</h2>');
    print_r('<p>' . $cocktail['ingredients'] . '</p>' );
    print_r('<p>' . $cocktail['method'] . '</p>' );
}
echo '</pre>';


?>

<section class="grid">
<h2></h2>
<p></p>

</section>