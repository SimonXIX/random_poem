<?php

# @name: poetry.php
# @version: 0.1
# @creation_date: 2021-10-12
# @license: The MIT License <https://opensource.org/licenses/MIT>
# @author: Simon Bowie <simon.bowie.19@gmail.com>
# @purpose: Perform functions for poetry site

function randomise_poem(){
	$sentences_array = file('../sentences.txt', FILE_IGNORE_NEW_LINES);

	$number_of_lines = rand(5,25);

	$x = 0;
	while ($x < $number_of_lines){
		$random_key = array_rand($sentences_array, 1);
		$output[$x] = $sentences_array[$random_key];
		++$x;
	}
	return $output;
}

?>
