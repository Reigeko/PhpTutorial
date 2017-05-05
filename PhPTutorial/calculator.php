<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PhP Tutorial</title>
  </head>
  <body>
    <!-- Create form to calculate 2 numbers -->
    <form>
      <!-- First input -->
      <input type="text" name="num1" placeholder="Number 1">
      <!-- Second input -->
      <input type="text" name="num2" placeholder="Number 2">
      <!-- Combobox with differents options -->
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <!-- Button to submit our choices -->
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p> The answer is:</p>
    <?php
        // $_GET['variable'] -> to GET the variable we want by calling its name
        if (isset($_GET['submit'])) {
            // Set result1 to the value of num1
            $result1 = $_GET['num1'];
            // Set result2 to the value of num2
            $result2 = $_GET['num2'];
            // Set operator to the value of the selected operator
            $operator = $_GET['operator'];
              // Switch to know which case is it
              // Then echo the final result
              switch ($operator) {
                case "None":
                  echo "Error! You need to select a method!";
                  break;
                case "Add":
                  echo $result1 + $result2;
                  break;
                case "Substract":
                  echo $result1 - $result2;
                  break;
                case "Multiply":
                  echo $result1 * $result2;
                  break;
                case "Divide":
                  echo $result1 / $result2;
                  break;
              }
        }
    ?>

  </body>
</html>
