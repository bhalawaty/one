<?php

function getsetting($namesetting ='sitename'){
    return App\SiteSetting::where('namesetting',$namesetting)->get()[0]->value;
}

function building_type()
{
    $array = ['villa', 'department', 'house', 'Chalet',];
    return $array;

}

function building_status()
{
    $array = ['available', 'unavailable'];
    return $array;
}

function building_rent()
{
    $array = ['Ownership', 'rent'];
    return $array;
}