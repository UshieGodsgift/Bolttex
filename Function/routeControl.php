<?php

define("SITE_URL", "http://localhost/MrID/");


function base_url($slug){
    echo SITE_URL.$slug;
}