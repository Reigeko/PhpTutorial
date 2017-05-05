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

    // Array - It's a bunch of variable into one variable
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

<?php # Lesson 15 - Exercice Calculator
    #include calculator.php;
    include('calculator.php');
?>

<?php # Lesson 17 - While loop
    // While (variable is under this condition) {do this until the variable is under the condition}
    $x = 1;
    while ($x < 5) {
      echo "Hi there While Loop!<br>";
      $x++;
    }
?>

<?php # Lesson 18 - Do While loop
    // Do {the instruction} while (the condition is true)
    $x = 1;
    do {
      echo "hi there Do While!<br>";
      $x++;
    } while ($x <= 5);
?>

<?php # Lesson 19 - For loop
    // Tell how many time we want to loop something
    for ($x=0; $x <= 10; $x++) {
      echo $x." - For loop<br>";
    }
?>

<?php # Lesson 20 - For Each Loop
    // Loop something for each element of an array
    $array = array("Seb","Bebon","Bidou");
    foreach ($array as $arrayElement) {
      echo "My name is ".$arrayElement."<br>";
    }
?>





















.
