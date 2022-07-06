<?php

function jalali_date($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('j F Y');
}

function jalali_date_format2($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('Y/m/d');
}
