<?php


    //SWEETALERT MESAJLARI -
    define('SWEETALERT_MESSAGE_CREATE', 'Eklendi');
    define('SWEETALERT_MESSAGE_UPDATE', 'Güncellendi');
    define('SWEETALERT_MESSAGE_DELETE', 'Silindi');

    //KULLANICI ADI BAŞ HARFLERİNİ GÖSTERME
    function isim($isim){
        $parcala = explode(" ", $isim);
        $ilk = substr(current($parcala), 0,1);
        $son = substr(end($parcala), 0,1);
        return mb_convert_encoding($ilk.' '.$son, "UTF-8", "ISO-8859-9");
    }


    //SEO URL
    function seo($str, $options = []) {
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        $options = array_merge($defaults, $options);
        $char_map = array(
            'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
            'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
        );
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }

