<?php

require('animal.php');

$sheep = new Animal("shaun");

echo "Name : ". $sheep->name." <br>"; // "shaun"
echo "Legs : ". $sheep->legs." <br>"; // 4
echo "cold_blooded :". $sheep->cold_blooded." <br><br>"; // "no"
 