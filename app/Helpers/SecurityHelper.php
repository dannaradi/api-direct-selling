<?php

function encrypted($value) {
    $key   = hash('sha256', config('project.key'));
    $iv    = substr($key, 0, openssl_cipher_iv_length(config('project.cipher')));

    $value = serialize($value);
    $value = openssl_encrypt($value, config('project.cipher'), $key, 0, $iv);
    $value = base64_encode($value);

    return $value;
}

function decrypted($value) {
    if (is_null($value) || $value == '') {
        return $value;
    }

    $key   = hash('sha256', config('project.key'));
    $iv    = substr($key, 0, openssl_cipher_iv_length(config('project.cipher')));

    $value = base64_decode($value);
    $value = openssl_decrypt($value, config('project.cipher'), $key, 0, $iv);
    $value = unserialize($value);

    return $value;
}
