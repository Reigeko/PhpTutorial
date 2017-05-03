<h3>Lesson 1 to 5 - Basics Debut </h3>
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
<h3> Lesson 6 - Internal Functions </h3>
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
