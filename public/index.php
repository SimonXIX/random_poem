<?php

# @name: index.php
# @version: 0.1
# @creation_date: 2021-10-12
# @license: The MIT License <https://opensource.org/licenses/MIT>
# @author: Simon Bowie <simon.bowie.19@gmail.com>
# @purpose: Home page for the application

include '../poetry.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>NOW That's What I Call Poems</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php

$poem_array=randomise_poem();

?>

   <div class="text poem_title">
      NOW That's What I Call Poems
   </div>

<?

foreach($poem_array as $line):

?>
   <div class="text centre">
      <?php echo $line; ?>
   </div>

<?
endforeach;
?>

</body>
</html>
