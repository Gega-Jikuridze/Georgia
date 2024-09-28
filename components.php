<?php
include('functions.php');
include("data.php");    




// Header 
function headerGeo() {
   echo '<header>'; 
    echo '<div class="header container">';
         echo '<div class="logo">';
            a('Georgia', './index.php');
         echo '</div>';

         echo '<div class="nav">';
            a("Home", "./index.php");
            a("About", "#");
            a("Gallery", "#");
            a("Contact", "#");
         echo '</div>';
    echo '</div>';
   echo '</header>';
};



// footer 

function footerGeo() {
    echo '<footer>'; 
     echo '<div class="footer container">';
          echo '<div class="logo">';
             a('Georgia', './index.php');
          echo '</div>';
 
          echo '<div class="nav">';
             a("+995 555 555 555", "#");
             a("georgia@gmail.com", "#");
             a("SkillWill", "#");
          echo '</div>';
     echo '</div>';
    echo '</footer>';
 };



//  log form 
$log = false;

function logForm($users){
    echo '<form action="./index.php" method="post" class="log-form">';
    echo '<input type="text" placeholder="Username" required name="username">';
    echo '<input type="password" placeholder="Password" required name="password">';
    echo '<input type="submit" value="Log in">';
    echo "</form>";
 };






//  travel cards

function travelCards($cities){

    echo '<div class="travel-cards container">';
        foreach($cities as $city){
            echo '<div class="travel-card">';
            img($city['image']);
            h1($city['city']);
            p($city['desc']);
            if($city['price'] >= 190){
                h2($city['price'] . '₾');
            }else{
                h2($city['price'] . '$');
            }
            a('Buy Tour', '#');
           
            echo '</div>';
        }
    echo '</div>';
}




