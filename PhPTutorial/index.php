<?php # Lesson 1 - 5
    // Write something on screen
    // You don't need quotation marks around numbers
    print 23;

    // Write something faster on the screen
    echo "Hello There!";

    // You can do basic math too
    echo 12+5;

    // Create a variable $variableName
    $name = "Sebastien";
    // Echo the variable
    echo $name;
    // You can add a string next the variable by adding a '.' then a string sentence
    echo $name. " is a genius!";
 ?>

 <?php # Lesson 6 - Internal Functions
    // Calculate the lenght of a String > strlen();
    // Can do it with str_word_count()
    echo strlen("Hi Seb !");

    // Calculate where START the position of the word given > strpos("hello toto","toto");
    echo strpos("Hi Seb !", "Seb");

    // Replace the word by an other word in a string > str_replace("word","newWord","hello word");
    echo str_replace("Seb","Bebon", "Hi Seb !")
 ?>

 <?php # Lesson 7 - Data Types
    // String
    $name = "Coding is fun";

    // Integer
    $name = 20;

    // Float
    $name = 20.1548;

    // Boolean
    // true = 1;
    // false = 0;

    // Array
    $names = array("Seb","Bebon");
    // Show array element [0 = first element of the array];
    echo $names[0];
?>

<?php # Lesson 12 - Logical Operators
    // Classic If (n1 > n2) {then}
    $nb1 = 1;
    $nb2 = 2;
    if ($nb2 > $nb1) {
      echo $nb2. " is superior than ".$nb1;
    }
?>

<?php #Lesson 14 - Switch
    // Switch can do something different for different answer
    $x = 1;
    switch ($x) {
      case '1':
        echo "x is equal to 1.";
        break;

      default:
        echo "default answer.";
        break;
    }
?>






























.
