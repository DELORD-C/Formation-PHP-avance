<?php


$publicKey = file_get_contents('public.key');
$privateKey = file_get_contents('private.key');

$message = 'La taupe est dans le trou';

openssl_public_encrypt($message, $crypted, $publicKey);
openssl_private_decrypt($crypted, $decrypted, $privateKey);

echo $decrypted;