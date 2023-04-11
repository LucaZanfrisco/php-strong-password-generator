<?php
function generaPassword($len){
    $pass = '';
    if (!empty($len) && ($len > 0 && $len <= 24)) {
        $picker = "abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVZ0123456789@!.#";
        for ($i = 0; $i < $len; $i++) {
            $n = rand(0, strlen($picker) - 1);
            $pass .= $picker[$n];
        }
        return $pass;
    } else {
        return "Errore nel generare la password";
    }
}



?>
