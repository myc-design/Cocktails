 
 
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
              <option value="rum">Rum</option>
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

        <label class="mixer">How would you like your cocktail: </label>
          <div id="method" class="radio-button">
              <label for="method">
				      <input type="radio" id="method" name="method">Shaken not stirred</label>
						  <label for="On the Rocks">
							<input type="radio" id="On the Rocks" name="method">On the Rocks</label>
						  <label for="With a Straw">
							<input type="radio" id="With a Straw" name="method">With a Straw</label>
          </div>
          <input type="submit" name="submit" value="add your cocktail">
        </div>
       </fieldset>
    </form>
  </div>
</section>


