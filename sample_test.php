<?php

require_once 'CPFValidator.php';

$validator = new CPFValidator;

if ($validator->isValid('268.548.500-70')) {
	echo 'The CPF is valid!';
} else {
	echo 'The CPF is not valid.';
}

// Result: The CPF is valid
