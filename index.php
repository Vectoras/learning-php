<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>
<body>

<section>
  
  <h3>Variable types</h3>
  <article>
  
    <header>
      <h4>Object</h4>
    </header>
    
    <main>
    
      <?php
    
        // defining the class
    
        class Person {
          public $first_name;
          public $last_name;
          public $age;
    
          public function __construct($first_name, $last_name, $age) {
            $this->first_name = $first_name;
            $this->last_name =   $last_name;
            $this->age = $age;
          }
    
          public function personal_details () {
            return "<p>Name: ". $this->first_name . " " . $this->last_name . "<br/>" . "Age: " . $this->age . " years old </p>";
          }
        }
    
    
        // instantianting objects
    
        $jdoe = new Person ("John", "Doe", 25);
        $gogu = new Person ("Gogu", "Macmac", 21);
    
    
        // using the objects
    
        echo $jdoe->personal_details();
        echo $gogu->personal_details();
    
      ?>
    </main>
  
  </article>
  
  <article>
  
    <header>
      <h4>NULL</h4>
    </header>
  
    <main>
      <?php
  
        // $a;
        $b = 5;
        $b = null;
  
        // var_dump($a);
        var_dump($b);
  
      ?>
    </main>
  
  </article>

</section>

<section>
  
  <h3>Date and Time </h3>
  <article>
  
        <header>
          <h4>Miscellaneous</h4>
        </header>
        
        <main>
          <?php
  
            echo "Today is " . date("d/m/y - l") . "<br>";
            echo "Today is " . date("d/m/Y - l") . "<br>";
            echo "Current time is " . date("h:i:s a") . "<br>";
            echo "Current time is " . date("H:i:s") . "<br>";
  
  
          ?>
        </main>
  
  </article>

</section>
  
<section>
  <h3>PHP Include</h3>
  
  <article>
    <header>
        <h4>Include / Require</h4>
        <main>
          <?php include 'included.php' ?>
          <?php include 'included.php' ?>

          <!-- testing what happens when files do not exists -->
          <?php /*include 'non-existent.php'*/ ?>
          <?php /*require 'non-existent.php'*/ ?>
        </main>
    </header>
  </article>

</section>

<section>
  <h3>Exceptions</h3>
  
  <article>
    <header>
        <h4>Throw and exeption</h4>
        <main>
          <?php 

            function divide ($dividend, $divisor) {
              if($divisor == 0) {
                throw new Exception ("Division by zero is not possbile!");
              }
              return $dividend / $divisor;
            }            

            try {
              echo divide(5, 2);
            } catch (Exception $e) {
              echo "<br>An error has occured";
            } finally {
              echo "<br>Division has been attempted<br>";
            }
            
            try {
              echo divide(5, 0);
            } catch (Exception $e) {
              echo "<br>An error has occured: " . $e->getMessage();
            } finally {
              echo "<br>Division has been attempted<br>";
            }
          
          ?>
        </main>
    </header>
  </article>

</section>

</body>
</html>