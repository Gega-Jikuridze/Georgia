<?php

// create H1 
function h1($value){
    echo '<h1>' . $value . '</h1>';
};


// create H2
function h2($value){
    echo '<h2>' . $value . '</h2>';
};


// create H3
function h3($value){
    echo '<h3>' . $value . '</h3>';
};


// create H4 
function h4($value){
    echo '<h4>' . $value . '</h4>';
};


// create P 
function p($value){
    echo '<p>' . $value . '</p>';
};



// Create a 
function a($value, $link){
    echo '<a href="' . $link .'">' . $value . '</a>';

};



// Create image 
function img($link){
    echo '<img src="'.$link.'" alt="Photo">';
}