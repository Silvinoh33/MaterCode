<?php

function genererIdentifiantUniqueCrypte() {
    // Générer une chaîne de 32 bytes (256 bits) de manière sécurisée
    $bytesAleatoires = random_bytes(32);
    // Convertir la chaîne de bytes en une chaîne hexadécimale
    $identifiantUnique = bin2hex($bytesAleatoires);
    
    // Appliquer la fonction de hachage SHA-256
    $identifiantCrypte = hash('sha256', $identifiantUnique);
    $test =  password_hash( $identifiantCrypte , PASSWORD_DEFAULT);
    return   $test ;


    // return $identifiantCrypte;
}


$identifiantCrypte = genererIdentifiantUniqueCrypte();
echo "Identifiant unique crypté : " . $identifiantCrypte;
// function genererIdentifiantUniqueCrypte() {
//     // Générer un identifiant unique
//     $identifiantUnique = uniqid();

//     // Utiliser password_hash() pour crypter l'identifiant unique
//     $identifiantCrypte = password_hash($identifiantUnique, PASSWORD_DEFAULT);

//     return $identifiantCrypte;
// }

// // Exemple d'utilisation
// $identifiantCrypte = genererIdentifiantUniqueCrypte();
// echo "Identifiant unique crypté : " . $identifiantCrypte;

?>
