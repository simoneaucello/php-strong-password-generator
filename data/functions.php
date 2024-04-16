<?php

// Genero una password casuale con ALMENO una lettera minuscola, una lettera maiuscola, un numero e un simbolo
function generateRandomPassword($length)
{
  $lowercase_letters = 'abcdefghijklmnopqrstuvwxyz';
  $uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $symbols = '!?&%$<>^+-*/()[]{}@#_=';

  $all_characters = $lowercase_letters . $uppercase_letters . $numbers . $symbols;

  $password = '';
  $password .= $lowercase_letters[rand(0, strlen($lowercase_letters) - 1)];
  $password .= $uppercase_letters[rand(0, strlen($uppercase_letters) - 1)];
  $password .= $numbers[rand(0, strlen($numbers) - 1)];
  $password .= $symbols[rand(0, strlen($symbols) - 1)];

  $remaining_length = $length - 4;
  for ($i = 0; $i < $remaining_length; $i++) {
    $password .= $all_characters[rand(0, strlen($all_characters) - 1)];
  }

  // Mescola i caratteri della password in modo casuale
  $password = str_shuffle($password);

  return $password;
}
