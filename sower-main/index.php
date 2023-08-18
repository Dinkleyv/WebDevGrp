<?php

require_once "logic/user.class.php";

session_start();

$is_user_logged_in = isset($_SESSION['auth_user']);
if ($is_user_logged_in) {
   $user = $_SESSION['auth_user'];
}

// --- END LOGIC ---
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sower</title>
   <?php include_once "components/bootstrap-css.php" ?>
   <link rel="stylesheet" href="css/app.css">
   
   <style >
body{
  background-image: url("cornfield.webp");
  background-repeat: no-repeat;
  background-size: 100% 100vh;
  background-attachment: fixed;

}

h1{
   text-decoration: underline;
   color: blue;
   font-family: 'Lobster', cursive;
   text-align: center;
   font-size: 30px;


}
.topnavi{
   background-color: lightgrey;
   border-width: 1px;
      border-color: black;
      border-style: solid;
      font-size: 30px;
      font-family: 'Fantasy', papyrus;
    color: white;
    display: outline;
      padding: 14px 16px;

}
.paragraph_styled{
   border: 2px solid #ccc;
    background-color: #f5f5f5;
    padding: 10px;
}

</style>
</head>

<body>

   <header class="header navbar navbar-expand-lg sticky-top bg-white shadow--1" id="header">
      <nav class="container bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
         <a class="navbar-brand" href=".">Sower</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="pages/posts/all.php">Post</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Dropdown
                  </a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
               </li>
            </ul>

            <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            <div class="ms-lg-3">
               <?php if ($is_user_logged_in) { ?>

                  <div class="dropdown">
                     <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo "@" . $user->username; ?>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                           <div class="px-4 pt-1 pb-2 text-center">
                              <h6 class="mb-0 text-capitalize"><?php echo $user->full_name; ?></h6>
                              <a class="d-block" href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
                              <span class="d-block"><?php echo "@" . $user->username; ?></span>
                           </div>
                        </li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">My Posts</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logic/logout.php">Logout</a></li>
                     </ul>
                  </div>

               <?php
               } else { // @else is_user_logged_in
               ?>
                  <a href="pages/core/login.php" role="button" class="btn btn-primary">Login</a>
               <?php
               } // @endif is_user_logged_in
               ?>
            </div>
         </div>
      </nav>
   </header>

   <div class="container">
      <div class="col-md-6 mx-auto py-5">
         <h1 class="mb-3">Sower Home Page!</h1>
      </div>
      <div class="paragraph_styled"><p>The productivity of farms is essential for many reasons. Providing more food, increasing productivity affects the farming market’s growth, labour migration, and income. Increased agricultural productivity refers to the more efficient distribution of scarce resources. Learning how to improve production is a crucial aspect of productive farming. New methods and techniques have given farmers a chance to increase production and maintain their farm’s long-term sustainability.  we are here to come with information on the topic to improve farming productivity. </p></div>
<br>
<br>
<h2>Improving Farming Productivity</h2>
<div class="paragraph_styled"><p><h3>1. Implementation of land reforms</h3>
For improving the production, land reforms are the first and predominant point. Machines, tractors, and implements do land reforms. These machines have the qualities that make rugged farming areas smooth to work on the field efficiently. Working on the field is easy, that means an improvement in productivity is easy. Land reforms are the best method to increase production. 

 <h3>2. Interplant</h3>
Interplant


Interplanting is a practice in which different crops are growing together at the same time. It is the best way to maximize the productivity of your growing space. Some crops are the best together, some not. 

 

<h3>3. Plant more densely</h3>
Plant more densely

It is the simplest way to improve the productivity of farms, in this plant crops close together. Many farmers keep their vegetables excessively away, which leads to the abandonment of large areas growing well.

 

<h3>4. Plant many crops</h3>
Plant many crops

 

The next method of improving productivity is to plant many crops.

 

 

<h3>5. Raised beds</h3>
 Raised bedsTraditional farming systems place crops in separate rows by tractor paths, with permanent beds planting multiple rows of crops within beds of the same width. It creates dense plantations, fewer pathways, and more active growing areas. Raised beds are symbolic of improving the productivity of crops.

<h3>6. Smart water management</h3>
Water is an essential need for planting crops, and by the management of water, you can enhance the production. Water management is the best way to improve production. Using the sprinkler irrigation system, you can increase the output by up to 50%. By the manufacturing canals, tube wells get a better irrigation system for the safety of crops. 

<h3>7. Heat Tolerant Varieties</h3> 
Heat Tolerant Varieties 
Heat tolerant varieties allow the plant to maintain the yields in high temperatures. We must improve the heat-tolerant varieties, and it increases the crop yield by up to 23%.

 

<h3>8. Use nitrogen</h3>
Nitrogen is a necessary element for better plant growth, and without nitrogen, most of the crops would not exist. Annually, plus 100 million tonnes of nitrogen are applied to crops in the form of fertilizer to help them grow stronger and better. The use of nitrogen can enhance the production of up to 22%. 

land-buy

<h3>9. Improved seeds</h3>
Improved seeds
Seeds play an essential role in the farms, and improved seeds are best to enhance farm productivity. Improved seeds are suitable for increasing production.

 

<h3>10. Plant protection</h3>
Plant protection

According to farming scientists, about 5% of crops destroyed by insects, pests, and diseases. Most of the farmers are oblivious of the use of medicines and insecticides developed in recent years. Improving the production of the crops, yields must use these medicines. To be aware, the farmers about these governments should take steps or employ their technical staff in spraying pesticides and insecticides.</p></div> 
   </div>


   <?php include_once "components/bootstrap-js.php" ?>
</body>

</html>