<?php
session_start();
include('../includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <style>
  *{
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  a{
    text-decoration: none;
    color:black;
  }
  ul{
   
    list-style-type: none;
  }
  li{
    list-style-type: none;
  }
.header{

    font-family: 'Roboto', sans-serif;
    position:fixed;
    top:0;
    z-index: 100;
    width:100%;
    height:110px;
    margin:0;
    padding:0;
    box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.8);   
}
.upper-header {
    width: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
    height: 30px;
   background-color: rgb(0, 0, 0);
}
.upper_header_main{
    width: 100%;
    max-width: 1240px;
    align-items: center;
    justify-content: space-between;
    display: flex;
    margin-left: 20px;
    margin-right: 20px;
}

.part1 {
    align-items: center;
    justify-content: space-between;
    display: flex;
    font-weight: 500;
}

.part1-contant {
    color: rgb(255, 255, 255);
    font-size: 12px;
    margin-right: 10px;
    padding-right: 20px;
    font-weight: 500;
    letter-spacing: 1px;
}

.part2 {
    align-items: center;
    justify-content: end;
    display: flex;
}
.part2-contant_main {
    align-items: center;
    justify-content: end;
    display: flex;
}

.part2-contant_main img{
  height:15px;
  margin-right:10px;
}
.part2-contant {
    color: rgb(255, 255, 255);
    font-size: 12px;
    margin-right: 10px;
    padding-right: 20px;
    font-weight: 500;
    letter-spacing: 1px;
}

.main_part {
    width: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
    background-color: #ffffffe4;
    height: 80px;
}
.main_part_sub{
    width: 100%;
    max-width: 1240px;
    align-items: center;
    justify-content: space-between;
    display: flex;
}

.main_logo {
    align-items: center;
    justify-content: center;
    display: flex;
}

.main_logo img {
    height: 55px;
}

.main_logo h1 {
    font-size: 40px;
    padding-left: 30px;
    color: black;
}

.header-border {
    height: 3px;
    width: 100%;
    background-color: black;
}

.main_header_menu {
    align-items: center;
    justify-content: center;
    display: flex;
}

.main_header_menu h2 {
    font-size: 18px;
    padding: 5px 20px;
    letter-spacing: 1px;
    margin: 0px 10px;
    font-weight: 600;
}

.main_header_menu h2:hover {
    color: white;
    padding: 5px 20px;
    margin: 0px 10px;
    border-radius: 50px;
    background-color: #0000006f;
}
.main_header_Price{
    align-items: center;
    justify-content: end;
    display: flex;
}

.main_header_Price .wishlist{
    align-items: center;
    justify-content: center;
    display: flex;
    position: relative;
    width: 100px;
}
.main_header_Price .wishlist .wishlistlogo{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 45px;
    height: 45px;
    overflow: hidden;
}
.main_header_Price .wishlist .wishlistlogo img{
    width: 40px;
    height: 40px;
}
.wishlist_number{
    position: absolute;
    top: 1px;
    right: 20px;
}
.wishlist_number h3{
    font-size: 12px;
    font-weight: 400;
    border-radius: 100px;
    color: white;
    background-color: black;
    padding: 2px 5px;
}
.main_header_Price .cart{
    align-items: center;
    justify-content: center;
    display: flex;
    position: relative;
    width: 100px;
}
.main_header_Price .cart .cartlogo{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 45px;
    height: 45px;
    overflow: hidden;
}
.main_header_Price .cart .cartlogo img{
    width: 40px;
    height: 40px;
}
.cart_number{
    position: absolute;
    top: 1px;
    right: 20px;
}
.cart_number h3{
    font-size: 12px;
    font-weight: 400;
    border-radius: 100px;
    color: white;
    background-color: black;
    padding: 2px 5px;
}

.profile_logo{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 70px;
    height: 70px;
    overflow: hidden;
}
.profile_logo  img{
  width:60px;
  height:60px;
}
.main_header_Price .wishlist{
    align-items: center;
    justify-content: center;
    display: flex;
    position: relative;
    width: 100px;
}

.user_logo_main{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 55px;
    height: 55px;
    overflow: hidden;
   border-radius: 100px;
   border: 2px solid gray;
}
.user_logo_main  img{
  width:60px;
  height:60px;
}
.sub_menu_wrap{
  position: absolute;
  top:115px;
  width: 320px;
  height: 0px;
  background-color: white;
  border-radius: 10px;
  overflow: hidden;
  transition: 0.2s;
}

.sub_menu_wrap.open_menu{
 height: 290px;
 transition: 0.2s;
 padding:10px;
 border:3px solid black;
}

.user_details_col{
  width:294px;
  height:100px;
  padding-left:10px;
  padding-right:10px;
  overflow: hidden;
  background-color:white;
  align-items: center;
  justify-content: start;
  display: flex;
  background-color: #c5c5c5;
  border-radius: 10px;
  
}
.user_details_imges{
  width:60px;
  height:60px;
  border-radius: 100px;
  overflow: hidden;
  margin-right:30px;
}
.user_details_imges img{
  width:65px;
  height:65px;
}
.user_account{
  width: 264px;
  height:40px;
  margin-top:10px;
  margin-left:30px;
  border-radius: 10px;
  align-items: center;
  justify-content: start;
  display: flex;
}
.user_account_images{
  width:40px;
  height:40px;
  overflow: hidden;
  margin-left:30px;
  margin-right:10px;
  align-items: center;
  justify-content: start;
  display: flex;
}
.user_account_images img{
  width:25px;
  height:25px;
}

.user_account:hover{
  background-color: #c5c5c5;
}
.user_deatils_border{
  margin-top:10px;
  border:1px dashed black;
}
.user_sigh_out{
  margin-top:5px;
  margin-bottom:5px;
  width:294px;
  height:50px;
  align-items: center;
  justify-content: center;
  display: flex;
}

.user_sigh_out h3{
  color: white;
  background-color: black;
  padding: 10px 40px;
  border-radius: 10px;
  letter-spacing: 1px;
 border: 2px solid white;
}

.user_sigh_out h3:hover{
  color: black;
  background-color: white;
  border: 2px solid black;
}









 /* CSS for Product Card */
  /* CSS for Product Card */
   /* CSS for Product Card */
    /* CSS for Product Card */
     /* CSS for Product Card */








.product_card_area_main{
    display: flex;
}

.product_card_area{
    width: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
}
.product_card_area_main{
    width: 100%;
    max-width: 1240px;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
}
.product_card{
    width: 288px;
    height: 475px;
    align-items: center;
    justify-content: center;
    display: flex;
    background-color: black;
    border-radius: 14px;
    margin: 10px;
    position: relative;
}
.product_card_main{
    width: 278px;
    height: 465px;
    border-radius: 10px;
    overflow: hidden;
}
.product_card_images_out{
    width: 278px;
    height: 296px;
    background-color: white;
    align-items: center;
    justify-content: center;
    display: flex;
    overflow: hidden;
    border-radius: 10px;

}
.product_card_images_out img{
    width: 280px;
}
.product_wishlist_icon{
    position: absolute;
    top:20px;
    right:20px;
    width: 40px;
    height: 40px;
    align-items: center;
    justify-content: center;
    display: flex;
    background-color: #ffffff83;
    border-radius: 50px; 
    border: 1px solid #000000c0;
}
.product_wishlist_icon img{
  width: 25px;
  height: 25px;
}
.product_card_body{
  margin-top:4px;
    width: 278px;
    height: 165px;
    background-color: white;
    align-items: start;
    justify-content: center;
    display: flex;
    border-radius: 10px;
    
}
.product_tags{
    overflow: hidden;
    align-items: center;
    justify-content: space-between;
    display: flex;
    padding-bottom: 5px;
    padding-left: 1px;
    padding-right: 1px;
    padding-top: 10px;
}
.product_tags p{
    margin: 0;
    padding: 3px 10px;
    font-size: 12px;
    background-color: #545454;
    color: white;
    border-radius: 50px;
}
.averagestart{
  align-items: center;
    justify-content: center;
    display: flex;
  
}
.averagestart h3{
    padding: 0;
    margin: 0;
    margin-top: 1px;    
}
.averagestart img{
    width:20px;
}

.product_price{
    height: 28px;
    overflow: hidden;
    align-items: center;
    justify-content: start;
    display: flex;
    padding-top: 5px;
}
.product_price h2{
    padding: 0;
    margin: 0;
    font-size: 26px;
    text-align: start;

}
.product_title{
  width:255px;
  padding-top: 5px;
  margin-bottom: 10px;
  height: 50px;
  margin-bottom: 7px;
  overflow: hidden;
  align-items: start;
  justify-content: start;
  display: flex;
  
}
.product_title h1{
  padding: 0;
  margin: 0;
  text-align: start;
  font-size: 18px;
  font-weight: 500;
  color:#545454;
} 

.product_card_rs{
    font-size: 20px;
}
.product_card_button{
    width: 100%;
    align-items: center;
    justify-content: space-between;
    display: flex;   
}
.add_to_car_dbutton{
    align-items: center;
    justify-content: center;
    display: flex;
    width: 110px;
    height: 30px;
    background-color: #000000;
    border-radius: 50px;
    margin-right: 12px;
}
.add_to_car_dbutton:hover{
    background-color: #ffffff;
    box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.5); 
}
.add_to_car_dbutton h4{
    text-decoration: none;
    color: white;
    margin: 0;
    padding: 0;
}
.add_to_car_dbutton:hover >h4{
    color:black;
}
.view_more_button{
  align-items: center;
    justify-content: center;
    display: flex;
    width: 110px;
    height: 30px;
    background-color: #000000;
    border-radius: 50px;
    margin-left: 12px;
}
.view_more_button:hover{
  background-color: #ffffff;
  box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.5); 
}
.view_more_button h4{
    text-decoration: none;
    color: white;
    margin: 0;
    padding: 0;
}
.view_more_button:hover >h4{
    color:black;
}
.product_card:hover { 
  background-color: #5f5f5f;
  box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.5); 
}
.product_card:hover .product_card_images_out img {
    scale: 1.1;
    transition: 1s;
}



.sub_headdings{
    width: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
    margin-top: 50px;
    margin-bottom: 20px;
}
.sub_headdings_main{
    width: 100%;
    max-width: 1240px;
    align-items: center;
    justify-content: space-between;
    display: flex;
    flex-wrap: wrap;
}
.sub_headdings_main h1{
  font-family: 'Poppins', sans-serif;
  font-size: 48px;
   padding: 0;
   margin: 0;
   letter-spacing: 1px;
}
.sub_headdings_main h6{
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
   padding: 0;
   margin: 0;
   font-weight: 500;
   color:white;
   background-color: black;
   padding: 7px 25px;
   letter-spacing: 1px;
   border-radius: 10px;
   border: 2px solid white;
}
.sub_headdings_main h6:hover{
   color:black;
   background-color: white;
   border: 2px solid black;
}
.heading_border{
  width:60%;
  height: 4px;
  background-color: black;
  margin-bottom: 20px;
}



 /* CSS for Landing Part */
  /* CSS for Landing Part */
   /* CSS for Landing Part */
    /* CSS for Landing Part */



.landing-part{
  width: 100%;
  height:85vh;
  align-items: center;
  justify-content: center;
  display: flex;
  margin-top: 110px;
  margin-bottom: 20px;
  
}
.landing-part-main{
  width: 100%;
  height:100%;
    align-items: center;
    justify-content: center;
    display: flex;
}

 /* CSS for slideshow container */
 .slideshow-container {
  width: 100%;
  height:100%;
      position: relative;
      margin: auto;
      ove
    }
    .slideshow-container img{
      
  height:85vh;
    }
    
    /* CSS for images */
    .mySlides {
      display: none;
    }
    
    /* CSS for previous and next buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      background-color: rgba(0, 0, 0, 0.5);
    }
    
    /* Positioning for previous button */
    .prev {
      left: 0;
      border-radius: 3px 0 0 3px;
    }
    
    /* Positioning for next button */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* CSS for dots container */
.dot-container {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 95vh;
}
    /* CSS for dots */
    .dot {
      cursor: pointer;
      height: 10px;
      width: 10px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active, .dot:hover {
      background-color: #474747;
    }









</style>
<style>

  
</style>
<style>
 /* CSS for All Category Header */

 .all-category-header {
  position: absolute;
  width: 100%;
  align-items: center;
  justify-content: center;
  display: flex;
  height: 35px;
}

.all-category-header-main {
  width: 100%;
  max-width: 1240px;
  align-items: center;
  justify-content: space-between;
  display: flex;
}

.all-category-header-main-category {
  width: 300px;
  height: 35px;
  border: 2px solid black;
  align-items: center;
  justify-content: space-between;
  display: flex;
  padding: 0 50px;
  border-radius: 0 0 20px 20px;
  box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.8);  
  cursor: pointer;
  position: relative;
  background-color: #00000079;
}

.all-category-header-main-category h4 {
  color: white;
  letter-spacing: 1px;
}

.fa-angle-down {
  color: white;
  font-size: 20px;
}
.all-category-header-main-category:hover {
  background-color: black;
  box-shadow: 2px 2px 5px 2px #00000000;  
}

.all-category-header-main-category:hover .landing-dropdown-part {
  display:block;
}

.all-category-header-main-category:hover .fa-angle-down {
  transform: rotate(180deg);  
}


/* Styles for the category text */
.category_text {
  width: 200px;
  align-items: center;
  justify-content: start;
  display: flex;
  text-align: start;
}

/* Styles for the dropdown container */
.landing-dropdown-part {
  width: 260px;
  height: 400px;
  background-color: white;
  position: absolute;
  top: 36px;
  left:10px;
  display:none;
  Padding:10px 0;
  border-radius:15px;
  box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.8);  
  z-index: 5;
}

/* Styles for the dropdown menu */
.landing-part-dropdown {
  width: 260px;
  height: auto;
  align-items: start;
  position: relative;
  padding: 15px 0px;

}

/* Styles for the dropdown menu items */
.landing-part-dropdown > ul > li {
  padding: 5px 20px;
  margin: 5px 0;
}

/* Styles for the dropdown menu links */
.landing-part-dropdown > ul > li > a {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Styles for the main dropdown menu */
.landing-part-dropdown .drop-down-main > ul {
  width: 220px;
  height: 340px;
  position: absolute;
  top:-15px;
  left: 260px;
  display:none;
  border-left: 2px dotted black;
  z-index: 5;
  margin: 30px 0;
  
}
.landing-part-dropdown .drop-down-main > ul > li {
  padding: 5px 25px;
  margin: 5px 10px;
}

/* Show main dropdown menu on hover */
.landing-part-dropdown .drop-down-main:hover ul {
  display: block;
}

.landing-part-dropdown > ul > li:hover {
  border-radius: 50px;
  background-color: #e5e5e5;
}

/* Styles for the sub dropdown menu */
.landing-part-dropdown .drop-down-main .drop-down-sub > ul {
  position: absolute;
  width: 500px;
  height: auto;
  background-color: red;
  left: 100px;
  top: 0;
  display: none;
  border-left: 10px solid black;
  z-index: 6;

}

/* Show sub dropdown menu on hover */
.landing-part-dropdown .drop-down-main .drop-down-sub:hover ul {
  display: block;
}
.landing-part-dropdown .drop-down-main > ul > li:hover {

  background-color: #e5e5e5;
  border-radius: 50px;
}





</style>

<style>
  .search-container {
    display: flex;
    align-items: center;
}

.search-wrapper {
    display: flex;
    align-items: center;
    border: 2px solid black;
    border-radius: 8px;
    padding: 5px;
    width:500px;
}

.input {
    border: none;
    outline: none;
    flex: 1;
    padding: 4px;
    font-size: 18px; /* Set the font size to 24px */
}

.search-button {
    background-color: black;
    color: #fff;
    border: none;
    padding: 8px 10px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    cursor: pointer;
    border-radius: 50px;
    border: 2px solid black;
}

.search-button i {
    font-size: 18px;
}
.search-button:hover{
  color:black;
  background-color: white;
}
.bg-light {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 40px; /* Optional: Adjust the height as needed */
}

.bg-light h3,
.bg-light p {
    margin: 0; /* Remove default margins for h3 and p elements */
}
.bg-light h3{
    font-size: 48px;

}
.bg-light p{
    font-size: 24px;
}

</style>

<style>
  .footer_main{
    margin-top:50px;
    width: 100%;
    height: 280px;
    background-color: black;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .footer-sub{
    width: 100%;
    max-width: 1100px;
    height: 240px;
    align-items: start;
    justify-content: space-between;
    display: flex;
    margin-top:30px;
  }
  .footer_logo{

  }
  .footer_logo img{
    width:150px; 
    margin: 20px 0;
  }
  .footer_main h1{
    color:white;
    font-size: 38px;
    letter-spacing: 1px;
  }
  .footer_main .follow h2{
    text-align: end;
  }
  .footer_main h2{
    color:white;
    text-decoration: underline;
  }
  .footer_main ul{
    color:white;
  }
  .footer_main li{
    padding: 5px 20px;
    color:white;
    margin: 10px 5px;
  }
  .footer_main li:hover{
    background-color: #717171;
    border-radius: 50px;
  }
  .contact-us{
    margin-bottom: 30px;
  }
  .contact-us h2{
    margin-bottom: 15px;
    text-align: end;
  }
  .contact-us-part a{
    color: white;
    font-size: 20px;
  }
  .contact-us-part img{
    width: 20px;
    margin-left: 10px;
    margin-right: 20px; 
  }
  .contact-us-part-phone{
    align-items: center;
    justify-content: end;
    display: flex;
    margin-bottom: 15px;
  }
  .follow-part{
    margin-top: 20px;
    width: 220px;
    align-items: center;
    justify-content: space-between;
    display: flex;
  }
  .follow-part-logo {
    background-color:white;
    width: 40px;
    height: 40px; 
    border-radius: 100px;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .follow-part-logo img{
    width: 20px;
    height: 20px; 
  }
  .follow-part-logo:hover {
  background-color: #717171;
  }
  .footer-location{
    width:100%;
    height:40px;
    background-color: white;
    align-items: center;
    justify-content: center;
    display: flex;
  }
  .footer-location-sub{
    width:100%;
    max-width:1100px;
    background-color: white;
    align-items: center;
  justify-content: space-between;
    display: flex;
  }
  .footer-location-sub img{
    height:20px;
  }
  .footer-location-sub h6{
    margin-left:18px;
    font-size: 18px;
    margin-right:18px;
  }
  .footer-location-part{
    align-items: center;
    justify-content: start;
    display: flex;
  }
  .footer-time-part{
    align-items: center;
    justify-content: end;
    display: flex;
  }
  .footer-copywrite{
    width:100%;
    height:80px;
    align-items: center;
    justify-content: center;
    display: flex;
    background-color: black;
  }
  .footer-copywrite-main{
    width:100%;
    max-width:1100px;
    height:60px;
    align-items: start;
    justify-content: start;
    display: flex;
    background-color: black;
    margin-top: 20px;    
  }
  .footer-copywrite-main h5{
    color:white;
    font-size: 14px;
  }
</style>


</head>

<body>
    <div id="page" class="site">

      <aside class="site-off desktop-hide">
        <div class="off-canvas">
            <div class="canvas-head flexitem">
                <div class="logo"><a href="/"><span class="circle"></span>.LoomLux</a></div>
                <a href="" class="t-close flexcenter"><i class="ri-close-line"></i></a>
            </div>
            <div class="departments">

            </div>
            <nav>

            </nav>
            <div class="thetop-nav">

            </div>
        </div>
      </aside>

      <header>
    <div class="header">
        <div class="upper-header">
            <div class="upper_header_main">
                <div class="part1">
                <a href="./footer/blog.html">
                      <h3 class="part1-contant">
                        Blog
                      </h3>
                    </a>
                    <a href="display_all.php">
                      <h3 class="part1-contant">
                        Shop
                      </h3>
                    </a>
                    <a href="compear_product_details.php">
                      <h3 class="part1-contant">
                        Compear
                      </h3>
                    </a>
                </div>
                <div class="part2">
                <a href="tel:+94 75 531 7941">
                  <div class="part2-contant_main">
                    
                    <img src='../user_area/icons/phone-call-white.png' alt='Call'>
                    <h3 class="part2-contant">
                        +94 75 531 7941
                    </h3>
                  </div>
                  </a>
                  <a href="mailto:abdulraheemrn2014@gmail.com">
                  <div class="part2-contant_main">
                  <img src='../user_area/icons/mail-white.png' alt='email'>
                    <h3 class="part2-contant">
                        info@loomlux.lk
                    </h3>
                  </div>
                  </a>
                </div>
            </div>
        </div>
        <div class="main_part">
            <div class="main_part_sub">
              <a href="index.php">
                <div class="main_logo">
                    <img src='../user_area/icons/Loomlux.png' alt='logo'>
                    <h1>LOOMLUX</h1>
                </div>
              </a>
                <div class="search-container">
                  <form action="search_product.php" class="search-form" method="get">
                    <div class="search-wrapper">
                      <input type="search" class="input" placeholder="Search for Products" aria-label="Search"  name="search_data">
                      <button type="submit" class="search-button" name="search_data_product"><i class="ri ri-search-line"></i></button>
                    </div>
                  </form>
                </div>
                <div class="main_header_Price">
                <?php
                            if(!isset($_SESSION['username'])){
                              echo"
                              <div class='wishlist'>
                              <div class='wishlistlogo'>
                                <img src='../user_area/icons/heart.png' alt='Wishlisticon'>
                              </div>
                          </div>";
                            }
                            else {
                              echo"
                             <a href='wishlist.php'> <div class='wishlist'>
                              <div class='wishlistlogo'>
                                <img src='../user_area/icons/heart.png' alt='Wishlisticon'>
                              </div>
                              <div class='wishlist_number'>
                                  <h3>
                                  ";?>
                                  <?php wish_item();?>
                                  <?php
                                  echo"
                                  </h3>
                              </div>
                          </div></a>
                              ";
                            }
                 ?>
                  <?php
                            if(!isset($_SESSION['username'])){
                              echo"
                              <div class='wishlist'>
                              <div class='wishlistlogo'>
                                <img src='../user_area/icons/cart.png' alt='Wishlisticon'>
                              </div>
                          </div>";
                            }
                            else {
                              echo"
                             <a href='cart.php'> <div class='wishlist'>
                              <div class='wishlistlogo'>
                                <img src='../user_area/icons/cart.png' alt='Cart'>
                              </div>
                              <div class='wishlist_number'>
                                  <h3>
                                  ";?>
                                  <?php cart_item();?>
                                  <?php
                                  echo"
                                  </h3>
                              </div>
                          </div></a>
                              ";
                            }
                 ?>
                    <?php
                    if(isset($_SESSION['username'])){
                        $username=$_SESSION['username'];
                        $select_user="select * from `users_table` where username='$username'";
                        $result_user=mysqli_query($con,$select_user);
                        $row_user=mysqli_fetch_assoc($result_user);
                        $user_image=$row_user['user_image'];
                        $username=$row_user['username'];
                        echo "
                          <div class='user_logo_main'  onclick ='toggleMenu()'>
                            <div class='user_logo'>
                              <img src='../user_area/user_images/$user_image' >
                            </div>
                          </div>
                          <div class='sub_menu_wrap' id='subMenu'>
                            <div class='user_details_col'>
                              <div class='user_details_imges'>
                                <img src='../user_area/user_images/$user_image' >
                              </div>
                              <div class='user_details_name'>
                                <h5>Hello<h5>
                                <h3>$username</h3>
                                <h6>Welcome to Loomlux<h6>
                              </div>  
                            </div>
                            <a href='../user_area/profile.php'>
                            <div class='user_account'>
                              <div class='user_account_images'>
                                <img src='../user_area/icons/accountant.png' alt='Cart'>
                              </div>
                              <div class='user_account_text'>
                                <h3>My Accounts</h3>
                              </div>
                            </div>
                            </a>
                            <a href='../user_area/faquser.php'>
                            <div class='user_account'>
                              <div class='user_account_images'>
                                <img src='../user_area/icons/mail.png' alt='Cart'>
                              </div>
                              <div class='user_account_text'>
                                <h3>Message</h3>
                              </div>
                            </div>
                            </a>
                            <div class='user_deatils_border'>
                            </div>
                              <a href='../user_area/logout.php'>
                                <div class='user_sigh_out'>
                                  <h3>Sign Out</h3>
                                </div>
                              </a>
                            </div> 
                         
                        ";
                    }
                    else{
                          echo"
                            <a href='../user_area/user_login.php'>
                              <div class='wishlist'>
                                  <div class='profile_logo'>
                                    <img src='../user_area/icons/profile.png' alt='User'>
                                  </div>
                              </div>
                            </a>
                          ";
                        }
                    ?>
                </div>
              
               
            </div>
        </div>
        
        <div class="header-border">
        </div>
        <div class="all-category-header">
          <div class="all-category-header-main">
            <div class="all-category-header-main-category">
              <h4>All Category</h4>
              <i class="fas fa-angle-down"></i>
              
            <div class="landing-dropdown-part">
              <div class="landing-part-dropdown">
              <ul >
               <?php
                getcategoryandbrands();
               ?>
              </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>



        <main>
     
<div class="landing-part">
  <div class="landing-part-main">
   
    <div class="landing-part-slideshow">
    <div class="slideshow-container">
  <!-- Images -->
  <div class="mySlides">
    <img src='../user_area/slideimage/img1.webp' style="width:100%">
  </div>
  
  <div class="mySlides">
    <img src="../user_area/slideimage/img2.webp" style="width:100%">
  </div>
  
  <div class="mySlides">
    <img src="../user_area/slideimage/img3.webp" style="width:100%">
  </div>

  <!-- Previous and Next buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- Dots for navigation -->
<div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
    </div>
  </div>
</div>






<?php
           add_cart();
          ?>
          <?php
          add_wish();
          ?>


 <div class="bg-light">
    <h3 class="text-center">LoomLux</h3>
        <p class="text-center">Its Your Platform Come And Buy It</p> 
 </div>


 <div class="sub_headdings">
  <div class="sub_headdings_main">
    <h1 id="scroll-heading" >

    Our Products
    </h1>
<a href="display_all.php">
    <h6>
      View All
    </h6>
</a>
  </div>
</div>
<div class="heading_border">

</div>
 <div class="product_card_area">
  <div class="product_card_area_main">
    <?php
      // Call the functions
      getproducts_index();
      get_unique_categories();
      get_unique_brand();
      //$ip = getIPAddress();  
      //echo 'User Real IP Address - '.$ip; 
    ?>
  </div>
</div>

<div class="sub_headdings">
  <div class="sub_headdings_main">
    <h1 id="scroll-heading">
    
    </h1>
    <h6>
      View All
    </h6>
  </div>
</div>
<div class="heading_border">

</div>
 <div class="product_card_area">
  <div class="product_card_area_main">
      <?php
    get_all_products_un();
      ?>
  </div>
</div>


<div class="sub_headdings">
  <div class="sub_headdings_main">
    <h1 id="scroll-heading">
    Electrical Products
    </h1>
    <h6>
      View All
    </h6>
  </div>
</div>
<div class="heading_border">

</div>
 <div class="product_card_area">
  <div class="product_card_area_main">
      <?php
    get_all_products_un();
      ?>
  </div>
</div>


        </main>
        <footer>
  <div class="footer_main">
    <div class="footer-sub">
      <a href="index.php">
        <div class="footer_logo">
          <img src='../user_area/icons/Loomlux-white.png' alt='logo'>
          <h1>LOOMLUX</h1>
        </div>
      </a>
      <div class="about">
        <h2>
          About
        </h2>
        <ul>
        <a href="./footer/blog.html">
            <li>
              About Us
            </li>
          </a>
          <a href="#">
            <li>
              Privacy Policy
            </li>
          </a>
          <a href="./footer/help_center.html">
            <li>
            Terms of service
            </li>
          </a>
          <a href="#">
            <li>
              Returns Policy
            </li>
          </a>
          <a href="#">
            <li>
              Help
            </li>
          </a>
        </ul>
      </div>
      <div class="quick">
        <h2>
          Quick Link
        </h2>
        <ul>
        <a href="#">
            <li>
              Mens
            </li>
          </a>
          <a href="#">
            <li>
              Electrical
            </li>
          </a>
          <a href="#">
            <li>
              Womens
            </li>
          </a>
          <a href="#">
            <li>
              Toys
            </li>
          </a>
          <a href="#">
            <li>
              Sports
            </li>
          </a>
        </ul>
      </div>
      <div class="contact">
        <div class="contact-us">
            <h2>
              Contact Us
            </h2>
            <div class="contact-us-part">
              <a href="tel:+94 76 999 9999">
                <div class="contact-us-part-phone"> 
                  <img src='../user_area/icons/phone-call-white.png' alt='Call'>
                  <p>+94 75 531 7941</p>
                </div>
              </a>
              <a href="mailto:info@loomlux.lk">
                <div class="contact-us-part-phone"> 
                  <img src='../user_area/icons/mail-white.png' alt='email'>
                  <p> abdulraheemrn2014@gmail.com</p>
                </div>
              </a>
            </div>
          </div>
        <div class="follow">
          <h2>
            Follow Us
          </h2>
          <div class="follow-part">
            <a href="https://facebook.com/">
              <div class="follow-part-logo"> 
                <img src='../user_area/icons/facebook.svg' alt='logo'>
              </div>
            </a>
            <a href="">
              <div class="follow-part-logo"> 
                <img src='../user_area/icons/twitter.svg' alt='logo'>
              </div>
            </a>
            <a href="">
              <div class="follow-part-logo"> 
                <img src='../user_area/icons/instagram.svg' alt='logo'>
              </div>
            </a>
            <a href="">
              <div class="follow-part-logo"> 
                <img src='../user_area/icons/youtube.svg' alt='logo'>
              </div>
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="footer-location">
    <div class="footer-location-sub">
      <div class="footer-location-part">
        <img src='../user_area/icons/location.svg' alt='logo'>
        <h6>No.36 De Krestser, Bumblapity, Colombo - 04</h6>
      </div>
      <div class="footer-time-part">
        <h6>Monday to Friday, 9:00 AM - 5:00 PM</h6>
        <img src='../user_area/icons/clock.svg' alt='logo'>
      </div>
    </div>
  </div>
  <div class="footer-copywrite">
    <div class="footer-copywrite-main">
      <h5>
        © 2021, LoomLux
      </h5>
    </div>
  </div>
</footer>

        <script>
  let subMenu = document.getElementById("subMenu");
  function toggleMenu(){
    subMenu.classList.toggle("open_menu");
  }






  // JavaScript for slideshow functionality
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
</script>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script>// Copy menu for mobile
function copyMenu() {
    // Copy inside .dpt-cat to departments
    var dptCategory = document.querySelector('.dpt-cat');
    var dptPlace = document.querySelector('.departments');
    dptPlace.innerHTML = dptCategory.innerHTML;

    // Copy inside nav to nav
    var mainNav = document.querySelector('.header-nav nav');
    var navPlace = document.querySelector('.off-canvas nav');
    navPlace.innerHTML = mainNav.innerHTML;

    // Copy header-top .wrapper to thetop-nav
    var topNav = document.querySelector('.header-top .wrapper');
    var topPlace = document.querySelector('.off-canvas .thetop-nav');
    topPlace.innerHTML = topNav.innerHTML;
}

// Show mobile menu
const menuButton = document.querySelector('.dpt-trigger');
const closeButton = document.querySelector('.t-close');
const siteOffCanvas = document.querySelector('.site-off');

menuButton.addEventListener('click', function (e) {
    e.preventDefault();
    siteOffCanvas.classList.toggle('showmenu');
});

closeButton.addEventListener('click', function () {
    siteOffCanvas.classList.remove('showmenu');
});

// Show submenu on mobile
const submenuIcons = document.querySelectorAll('.has-child .icon-small');

submenuIcons.forEach((icon) => icon.addEventListener('click', toggleSubmenu));

function toggleSubmenu(e) {
    e.preventDefault();
    const parent = this.closest('.has-child');
    const expanded = parent.classList.contains('expand');

    submenuIcons.forEach((item) => item.closest('.has-child').classList.remove('expand'));

    if (!expanded) {
        parent.classList.add('expand');
    }
}

// Call copyMenu function
copyMenu();

      </script>
      <script>
  // Get the drop-down elements
  const dropDownMain = document.querySelector('.landing-dropdown-part');
  const dropDownSub = document.querySelector('.landing-part-dropdown > ul');

  // Add event listener for hover effect
  dropDownSub.addEventListener('mouseover', function() {
    dropDownMain.style.width = '500px';
  });

  dropDownSub.addEventListener('mouseout', function() {
    dropDownMain.style.width = '280px'; // Set the original width of drop-down-main here
  });
</script>
</body>
</html>