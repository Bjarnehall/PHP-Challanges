<?php

// accept a string input from the command line
if ($argc > 1) {
    $input_string = $argv[1];
    $vowel_count = 0;

// Convert the string to lowercase to simplify vowel checking
    $input_string = strtolower($input_string);
// List of vowels to check against
    $vowels = ['a', 'e', 'i', 'o', 'u', 'ä', 'å', 'ö'];

// Iterate through each character in the string
    for ($i = 0; $i < strlen($input_string); $i++) {
     // Check if the current character is a vowel   
        if (in_array($input_string[$i], $vowels)) {
            $vowel_count++;
        }   
    }


    // Print the total count of vowels
    echo "Number of vowels: " . $vowel_count . "\n";
} else {
    echo "Please provide a string as an argument.\n";
}

?>