<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/

    class Dog {
      public $eyeColor;
      public $nose;
      public $furColor;

      function showAll() {
        echo 'Eye color: ' .$this->eyeColor . '<br> Nose: ' . $this->nose . '<br> Fur color: ' . $this->furColor . ' ';
      }
    }

    $pitbull = new Dog();
    $pitbull->eyeColor = 'brown';
    $pitbull->nose = 'black';
    $pitbull->furColor = 'white';

    $pitbull->showAll();

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>