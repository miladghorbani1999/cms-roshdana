<?php

function jalali_date($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('j F Y');
}

function jalali_date_format2($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('Y/m/d');
}

function convert_number_to_persian($number):string
{
    $persian_numbers = '';
    $numbers = explode(' ',$number);
    foreach($numbers as $number){
        $persian_numbers .= strtr($number,
                                ['0'=>'۰','1'=>'۱','2'=>'۲','3'=>'۳','4'=>'۴','5'=>'۵','6'=>'۶','7'=>'۷','8'=>'۸','9'=>'۹']
                            ).' ';
    }
    return $persian_numbers;

}
