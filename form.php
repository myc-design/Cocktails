<?php
if (isset($_POST['submit'])){

  $db = new PDO('mysql:host=db; dbname=cocktails', 'root', 'password');

  $name = $_POST['name'];
  $ingredients = $_POST['alcohol'] . ' '. $_POST['fruit'] .' '. $_POST['mixer'];
  $method = $_POST['method'];

  $sql = "INSERT INTO `cocktails`(`name`, `ingredients`, `method`) VALUES(:name, :ingredients, :method)";

  $stmt = $db->prepare($sql);

  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':ingredients', $ingredients); 
  $stmt->bindParam(':method', $method);

  $stmt->execute(['name' => $name, 'ingredients' => $ingredients, 'method' => $method]);

  echo '<h1 class="message">Your cocktail was successfully added!</h1>';
}

?>

<section> 
  <div class="form-wrapper">
    <form action="cocktail.php" method="POST">
       <fieldset>
         <legend>Add Your Favourite Cocktail</legend>

        <div class="choose">
        <label>Give your cocktail a name: </label>
        <input class="input-name" type="text" name="name">

        <label class="fruit">Choose favourite alcohol: </label>
            <select name="alcohol" id="alcohol">
              <option name="rum" value="rum">Rum</option>
              <option value="vodka">Vodka</option>
              <option value="gin">Gin</option>
              <option value="whiskey">Whiskey</option>
            </select>

        <label class="fruit">Choose favourite fruit: </label>
            <select name="fruit" id="fruit">
              <option value="pineapple">Pineapple</option>
              <option value="cherry">Cherry</option>
              <option value="lemon">Lemon</option>
              <option value="rasberry">Rasberry</option>
            </select>

        <label class="mixer">Add your favourite mixer: </label>
            <select name="mixer" id="mixer">
              <option value="soda water">Soda Water</option>
              <option value="ice">Ice</option>
              <option value="lemonade">Lemonade</option>
              <option value="Lime Juice">Lime Juice</option>
              <option value="Cranberry">Cranberry</option>
              </select>

        <label class="method">How would you like your cocktail: </label>
          <div id="method" class="radio-button">
              <label for="method">
				      <input type="radio" id="method" name="method" value="Shaken not stirred" checked="checked">Shaken not stirred</label>
						  <label for="On the Rocks">
							<input type="radio" id="On the Rocks" name="method" value="On the Rocks">On the Rocks</label>
						  <label for="With a Straw">
							<input type="radio" id="With a Straw" name="method" value="With a Straw">With a Straw</label>
          </div>
          <input type="submit" name="submit" value="add your cocktail">
        </div>
       </fieldset>
    </form>
  </div>
</section>


