<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['login'])){
    header("location:login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - niceguy</title>
</head>
<body>
    <link rel="stylesheet" href="toel.css">

    <!--header-->
    <header  class="navbar">
   <div class="logo"><span style="color: white;">MyCompany</span> </div>
     <nav>
        <a href="dashboard.html">Dashboard</a>
        <a href="about.html">About</a>
        <a href="service.html">Service</a>
        <a href="contact.html">Contact</a>
        <button class="btn">Get Started</button>
     </nav>
    </header>

     <!--hero section-->
    <section class="hero">
     <div class="hero-text">
           <h1> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi repellendus tempore autem</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

        <div class="btn-hero">
            <button class="btn-star">Get Started</button>
            <button class="btn-outline">Learn More</button>
        </div>
    </div>

        <div class="hero-image">
            <img src="https://img.freepik.com/premium-photo/logo-web-design-is-shown-white-background_1085346-34919.jpg" alt="Hero Image">
        </div>

    </section>

    <!--Service-->
 
   <div class="top">
       <h2>Our <span style="color: blue;">Service</span></h2>
       <p>Lorem ipsum dolor sit amet.</p>
    </div>
    
  <div class="service-box">

    <div class="card">
         <img src="https://tse1.mm.bing.net/th/id/OIP.KQDkUBszwQIKfYyTDZZokwHaFj?pid=Api" alt="web development">
        <h3>Web Development</h3>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>

    <div class="card">
         <img src="https://img.freepik.com/premium-vector/marketing-strategy-icon_23785-1732.jpg" alt="marketing strategy">
        <h3>merketing Strategy</h3>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>

    <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/024/183/678/original/data-analytics-icon-monitoring-big-data-analysis-containing-database-free-vector.jpg" alt="data analytics">
        <h3>Data Analytics</h3>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>
</div>


<!--About-->
>
    <div class="judul">
      <h2>About <span style="color: blue;"> Us</span></h2>
      </div>

<div class="about-text">

     <div class="text">
     <h3>Lorem ipsum dolor sit amet consectet Lorem, ipsum dolor sit amet consectetur 
     Lorem ipsum dolor sit amet, consectetur adipisicing
     elit. Maiores minus expedita perferendis dolorum natus ullam! 
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusamus
     qui minus porro at officia ab expedita, aspernatur.
     </h3>
    <button class="about-btn">Read More</button>
    </div>
       
     

    <div class="about-img">
      <img src="https://www.freeiconspng.com/uploads/about-us-icon-15.jpg" alt="about us">
    </div>
</div>


 <!--Project us-->
 <section class="project">
    <h2>Our <span style="color: blue;">Latest Project</span></h2>
    <p>Lorem ipsum dolor sit amet.</p>
    <div class="project-box">
        <div class="pic">
            <img src="133890015929177707.jpg" alt="this draw">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

         <div class="pic">
            <img src="133890015929177707.jpg" alt="this draw">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

         <div class="pic">
            <img src="133890015929177707.jpg" alt="this draw">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

    </div>
 </section>
        
<!--Footer-->

<section class="footer">

    <h3 class="footer-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, neque.
    </h3>
</section>


    
    
</body>
</html>