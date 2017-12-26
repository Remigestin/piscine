<?php

class Securite {
    
    private static $seed = '';

    static function chiffrer($texte_en_clair) {

        $concat = $texte_en_clair;
        $texte_chiffre = hash('sha256', $concat);
        return $texte_chiffre;
    }
    
    static public function getSeed() {
        return self::$seed;
    }

}
