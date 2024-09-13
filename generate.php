<?php

require 'FileUtility.php';
require 'Random.php';

$people = Random::generatePeople(300);

FileUtility::writeToFile('persons.csv', $people);

echo "Data has been generated and saved to persons.csv";
