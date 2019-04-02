<?php

function getsetting($namesetting ='sitename'){
    return App\SiteSetting::where('namesetting',$namesetting)->get()[0]->value;
}