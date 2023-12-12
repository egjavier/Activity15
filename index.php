<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 15</title>
</head>
<body class="px-5">
  <main class="m-5 p-5 border border-1 rounded shadow max-w-[1000px] mx-auto text-center">
    <h1 class="font-bold text-2xl text-sky-600">Activity 15 - PHP Basics</h1>
    <br>
    <hr>
  <!-- Task 2: Variable Declaration and Data Types -->
    <section class="mt-5">
      <h2 class="font-bold">Task 2: Variable Declaration and Data Types</h2>
      <p>
        <?php

          $variable = "Hi there!";
          $integer = 10;
          $bool = true;

          echo $variable . ". My number is " . $integer . ". It's " . $bool . "(true).";
        ?>
      </p>
    </section>
    <br>
    <hr>
  <!-- Task 3: Conditionals -->
    <section class="mt-5">
      <h2 class="font-bold">Task 3: Conditionals</h2>
      <p>
        <?php
          if ($integer > 10) {
            echo "The number is greater than 10.";
          } else {
            echo "the number is less than 11.";
          }
        ?>
      </p>
    </section>
    <br>
    <hr>
  <!-- Task 4: Loops -->
  <section class="mt-5">
      <h2 class="font-bold">Task 4: Loops</h2>
      <h3 class="mt-2 font-semibold italic">For Loop:</h3>
      <p>
        <?php
          for($i = 1; $i < 6; $i++){
            echo $i;
          }
        ?>
      </p>
      <h3 class="mt-2 font-semibold italic">While Loop:</h3>
      <p>
        <?php
          $j = 5;
          while($j > 0 ) {
            echo $j;
            $j--;
          }
        ?>
      </p>
    </section>
    <br>
    <hr>
  <!-- Task 5: Arrays -->
  <section class="mt-5">
      <h2 class="font-bold">Task 5: Arrays</h2>
      <h3 class="mt-2 font-semibold italic">Indexed Array:</h3>
      <ul>
        <?php
          $fruits = array("apple", "orange", "banana");
          foreach($fruits as $fruit) {
            echo "<li>".$fruit."</li>";
          }
        ?>
      </ul>
      <h3 class="mt-2 font-semibold italic">Associative Array:</h3>
      <ul>
        <?php
          $person = array("Name" => "John", "Age" => 20, "City" => "Manila");
          foreach($person as $info =>$info_value) {
            echo "<li>".$info . ": " . $info_value."</li>";
          }
        ?>
      </ul>
    </section>
    <br>
    <hr>
  <!-- Task 6: Functions -->
  <section class="mt-5">
      <h2 class="font-bold">Task 6: Functions</h2>
      <h3 class="mt-2 font-semibold italic">Create a Function and Function Call:</h3>
      <p>
        <?php
          $total = 0;
          function sum($x, $y){
            $total = $x + $y;
            return $total;
          }
          echo sum(5, 10);
        ?>
      </p>
    </section>
    <br>
    <hr>
  <!-- Task 7: Form Handling (Bonus) -->
  <section class="mt-5">
      <h2 class="font-bold">Task 7: Form Handling (Bonus)</h2>
      <h3 class="mt-2 font-semibold italic">HTML Form and PHP Form Processing:</h3>
      <form method="POST"
            action="new_employee.php"
            class="flex flex-col gap-4 items-start mt-2">
        <label for="employeeName" class="text-sky-600 font-bold">Enter Name:</label>
        <input  id="employeeName" 
                name="employeeName"
                type="text"
                placeholder="type here..."
                reqired
                class="border border-1 rounded w-full indent-2 py-2">
        <button class="border bg-sky-600 text-white px-3 py-1 rounded">Submit</button>

      </form>
    </section>

  </main>


<!-- tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</body>
</html>

