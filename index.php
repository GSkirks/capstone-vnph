<!DOCTYPE html>
<html lang="en">
<!-- Start of LiveChat code -->



<!-- End of LiveChat code -->

<head>
<style>
    a { text-decoration: none; }
  </style>
    <title>Your Virtual Nutritionist</title>
    <link rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
    user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@700&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body a link="#009688" vlink="#009688">



<style>

*{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}

.special-word { 
  color: #009688; 
} 



#banner{
    background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.logo{
    width: 140px;
    position: absolute;
    top: 4%;
    left: 10%;
}
.banner-text{
    text-align: center;
    color: #fff;
    padding-top: 180px;
}
.banner-text h1{
    font-size: 90px;
    font-family: 'Kaisei HarunoUmi', serif;
}
.banner-text p{
    font-size: 20px;
    font-style: italic;     
}
.banner-btn{
    margin: 70px auto 0;
    text-align: center;
}
.banner-btn a{
    margin: 150px;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px;
    padding: 12px;
    color: #fff;
    border: .5px solid #fff;  
    position: relative; 
    z-index: 1;
    transition: 0.5s;
}
.banner-btn a span{
    width: 0;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    z-index: -1;  
    transition: 0.5s;      
}
.banner-btn a:hover span{
    width: 100%;
}
.banner-btn a:hover{
    color: #000;
}
#sideNav{
    width: 250px;
    height:100vh;
    position: fixed;
    right: -250px;
    top: 0;
    background: #009688;
    z-index: 2;
    transition: 0.5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
#menuBtn{
    width: 50px;
    height: 50px;
    background:#009688;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3px;
    z-index: 3;
    cursor: pointer;
}
#menuBtn img{
    width: 20px;
    margin-top: 15px;
}
@media screen and (max-width: 770px){
    .banner-text h1{
        font-size: 44px;
    }
    .banner-btn a{
        display: block;
        margin: 20px;
    }
}
/* feature */
#feature{
    width: 100%;
    padding: 70px 0;
}
.title-text{
    text-align: center;
    padding-bottom: 70px;
}
.title-text p{
    margin: auto;
    font-size: 20px;
    color: #009688;
    font-weight: bolder;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.title-text p::after{
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#019587,#fff);
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
    
}
.title-text h1{
    font-size: 50px;
}
.feature-box{
    width: 80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.features{
    flex-basis: 50%;
}
.features-img{
    flex-basis: 50%;
    margin: auto;
}
.features-img img{
    width: 70%;
    border-radius: 10px;
}
.features h1{
    text-align: left;
    margin-bottom: 10px;
    font-weight: 100;
    color: #009688;
}
.features-desc{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.fas{
    color: #009688;
}
.feature-icon .fas{
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height: 50px;
    border-radius: 8px;
    color: #009688;
    border: 1px solid;
}
.feature-text p{
    padding: 0 20px;
    text-align: initial;
}
@media screen and (max-width: 770px){
    .title-text h1{
        font-size: 35px;
    }
    .features{
        flex-basis: 100%;
    }
    .features-img{
        flex-basis: 100%;   
    }
    .features-img img{
        width: 100%;
    }
}
/* service */
#service{
    width: 100%;
    padding: 70px 0;
    background: #efefef;
}
.service-box{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.single-service{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
}
.single-service img{
    width: 100%;
    border-radius: 7px;
}
.overlay{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0,0,0,0.5),#009688);
    opacity: 0;
    transition: 1s;
}
.single-service:hover .overlay{
    opacity: 1;
}
.service-desc{
    width: 80%;
    position: absolute;
    bottom: 0;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
hr{
    background: #fff;
    height: 2px;
    border: 0;
    margin: 15px auto;
    width: 60%;
}
.service-desc p{
    font-size: 14px;
}
.single-service:hover .service-desc{
    bottom: 40%;
    opacity: 1;
}
@media screen and (max-width: 770px){
    .single-service{
        flex-basis: 100%;
        margin-bottom: 30px;
    }
    .service-desc p{
        font-size: 12px;
    }
    hr{
        margin: 5px auto;
    }
    .single-service:hover .service-desc{
        bottom: 25% !important; 
    }
}
/* testimonial */
#testimonial{
    width: 100%;
    padding: 70px 0;
}
.testimonial-row{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}
.testimonial-col{
    flex-basis: 28%;
    padding: 10px;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 3px #00968814;
    cursor: pointer;
    transition: transform .5s;
}
.testimonial-col p{
    font-size: 14px;
}
.user{
    display: flex;
    align-items: center;
    margin: 20px 0;
}
.user img{
    width: 40px;
    margin-right: 20px;
    border-radius: 3px;
}
.user-info .fab{
    margin-left: 10px;
    color: #27c0ff;
    font-size: 20px;
}
.user-info small{
    color: #009688;
}
.testimonial-col:hover{
    transform: translateY(-7px);
}
@media screen and (max-width: 770px){
    .testimonial-col{
        flex-basis: 100%; 
    }
}
/* footer */
#footer{
    padding: 100px 0 20px;
    background:#efefef;
    position: relative;
}
.footer-row{
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.footer-left, .footer-right{
    flex-basis: 45%;
    padding: 10px;
    margin-bottom: 20px;
}
.footer-right{
    text-align: right;
}
.footer-row h1{
    margin: 10px 0;
}
.footer-row p{
    line-height: 35px;
}
.footer-left .far, .footer-right .fas{
    font-size: 20px;
    color:#009688;
    margin: 10px;
}
.footer-img{
    max-width: 370px;
    opacity: 0.2;
    position: absolute;
    left: 50%;
    top: 35%;
    transform: translate(-50%,-50%); 
}
.social-links{
    text-align: center;
}
.social-links .fab{
    height: 40px;
    width: 40px;
    font-size: 20px;
    line-height: 40px;
    border: 1px solid #009688;
    margin: 40px 5px 0;
    color: #009688;
    cursor: pointer;
    transition: .5s;
}
.social-links .fab:hover{
    background: #009688;
    color: #fff;
    transform: translateY(-7px);
}
@media screen and (max-width: 770px){
    .footer-left, .footer-right{
        flex-basis: 100%;
        font-size: 14px;
    }  
    .footer-img{
        top: 25%;
    }
    
}
</style>












































<!-- for banners -->
<section id="banner">
    <img src="images/vnxlogo.png" class="logo">
    <div class="banner-text">
        <h1>Virtual<br>Nutritionist PH</h1>
        <p>Your Personal Healthcare Companion</p>
        <div class="banner-btn">
            <a href="bmi.php"><span></span>Get Your BMI</a>
            <a href="consult.php"><span></span>Consult Now</a>
        </div>
    </div>
</section>


<!-- For sidenav -->
<div id ="sideNav">
    <nav>
    <ul>
        <li><a href="#banner">HOME</a></li>
        <li><a href="#feature">FEATURES</a></li>
        <li><a href="#service">SERVICES</a></li>
        <li><a href="#testimonial">TESTIMONIALS</a></li>
        <li><a href="#footer">CONNECT WITH US</a></li>
        <!-- <li><a href="admin/login.php">ADMINISTRATOR</a></li> -->
    </ul>
    </nav>
</div>

<div id="menuBtn">
    <img class="menuBtn" src="images/menu.png" id="menu">
</div>

<!-- feature -->
<section id="feature">
<div class="title-text">
<p>FEATURES</p>
<h1>Why Choose Us?</h1>
</div>
<div class="feature-box">
    <div class="features">
        <h1>How can I benefit from consulting a nutritionist?</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fas fa-question"></i>
            </div>
            <div class="feature-text">
                <p>Nutritionists help people to make choices about what they eat. From weight management to gut health, a qualified nutrition professional can give you confidence in your dietary decisions.</p>
            </div>
        </div>

        <h1>Can I work with a nutritionist online?</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fas fa-globe-asia"></i>
            </div>
            <div class="feature-text">
                <p>Our nutritionist-dieticians offer support online, check our profile to learn more or use our official website.</p>
            </div>
        </div>

        <h1>How do i know that the nutritionist is qualified?</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="feature-text">
                <p>We understand the value of knowing your nutritionist is trained and experienced. Visit our nutritionist Team Profile so you can be sure you are contacting a credible professional.</p>
            </div>
        </div>
    </div>
    <div class="features-img">
        <img src="images/team.jpg">
    </div>
</div>
</section>

<!-- Service -->
<section id="service">
    <div class="title-text">
    <p>Services</p>
    <h1>We Provide Better</h1>
    </div>   

    <div class="service-box">
        <div class="single-service">
            <img src="images/pic1.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Patient Care</h3>
                <hr>
                <p>Our nutritionist-dieticians will work with you to make sure that
                the diets meet your needs, they adapt menus for people recovering from illness or surgery,
                or with health conditions such as diabetes, heart disease, etc.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/pic2.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Private Practice and Consultancy</h3>
                <hr>
                <p>Our nutritionist-dietitians work with individuals, groups and organisations
                to provide dietary advice. They run health and nutrition education programs
                and seminars.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/pic3.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Community and Public Health</h3>
                <hr>
                <p>Our professionals do not just work to improve eating habits but also work
                at state or national levels to influence food policy and improve access
                to better food choices for everyone.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/pic4.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Research and Teaching </h3>
                <hr>
                <p>Our team investigates the links between your food and your
                health based on your provided information to us. We do this
                to learn how diet can promote good health and prevent disease.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section id="testimonial">
    <div class="title-text">
        <p>Testimonials</p>
        <h1>What Client Says</h1>
        </div> 
        <div class="testimonial-row">
        <div class="testimonial-col">
            <div class="user">
            <img src="images/user1.jpg">
            <div class="user-info">
                <h4>KIM MARANA<i class="fab fa-twitter"></i></h4>
                <small>@serkimpoy</small>
            </div>
            </div>
            <p>Wonderful experience with Virtual Nutritionist PH. Ms. Hernandez
                was a wonderful Nutritionist-Dietician, and the chat agents was always helpful
                and kind. They ensured I had a smooth prep, consultation, and follow-up.
                I am so glad I chose Virtual Nutritionist PH and would highly recommend to anyone.</p>
        </div>
        <div class="testimonial-col">
            <div class="user">
            <img src="images/user2.jpg">
            <div class="user-info">
                <h4>SHALI MAR ACOSTA<i class="fab fa-twitter"></i></h4>
                <small>@shaliacosta</small>
            </div>
            </div>
            <p>Mr. Bautista did a great job with my first ever health appointment online.
                He explained everything to me in a very clear manner.
                He was also kind and friendly. All of the staff was great –
                they were helpful, patient and helped with my diet and nutrition</p>
        </div>
        <div class="testimonial-col">
            <div class="user">
            <img src="images/user3.jpg">
            <div class="user-info">
                <h4>ELLA BRIONES<i class="fab fa-twitter"></i></h4>
                <small>@ellabriones_</small>
            </div>
            </div>
            <p>Ms. Cleofe is a great Nutrionist-Dietician! She’s very understanding
                and listens to your concerns. She takes time with the
                patient to help them with their nutritional issues! I highly
                recommend her to anyone looking for a specialist</p>
        </div>
    </div>
</section>

<!-- footer -->
<section id="footer">
    <img src="images/logo.png" class="footer-img">
    <div class="title-text">
        <p>CONTACT</p>
        <h1>Connect With Us</h1>
    </div>
<div class="footer-row">
    <div class="footer-left">
        <h1>Opening Hours</h1>
        <p><i class="far fa-clock"></i>Monday to Sunday - 8am to 8pm</p>
        <!-- <p><i class="far fa-clock"></i>Saturday and Sunday - 8am to 11pm</p> -->
    </div>
    <div class="footer-right">
        <h1>Get In Touch</h1>
        <a href="map1.php">
        <p>#4217 Golden Country Homes, Batangas City<i class="fas fa-map-pin"></i></p></a>

        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWQDGJLBjZXJSvxQdCJrzWtJbdbHWcBhbHQpXkSShgwzMNDGwWhJwqtckLDMDqZFkhgZL"
        <p>myvirtualnutritionist@gmail.com<i class="fas fa-paper-plane"></i></p></a>

        <p>+63-918-622-0581<i class="fas fa-mobile-alt"></i></p>
    </div>
</div>
<div class="social-links">
    <a href="https://www.facebook.com/virtualnutritionistph"
    <i class="fab fa-facebook"></i></a>
    
    <a href="https://twitter.com/NutritionistPh?t=_10sE2EqxhUIFbn7TKeBmw&s=09"
    <i class="fab fa-twitter"></i></a>

    <a href="https://www.facebook.com/virtualnutritionistph"
    <i class="fab fa-instagram"></i></a>

    <a href="https://www.youtube.com/channel/UCbxehGoAkIjoxr5w6z_pieQ"
    <i class="fab fa-youtube"></i></a>
<p>© <span class='special-word'>2021</span> Virtual Nutritionist PH. All rights reserved.</p>
</div>
</section>


    
<script>
 var menuBtn = document.getElementById("menuBtn")
 var sideNav = document.getElementById("sideNav")
 var menu = document.getElementById("menu")

 sideNav.style.right = "-250px";

 menuBtn.onclick = function(){
     if (sideNav.style.right == "-250px"){
        sideNav.style.right = "0";
        menu.src = "images/close.png";
     }
     else{
        sideNav.style.right = "-250px"; 
        menu.src = "images/menu.png";  
     }
 }

 // All animations will take exactly 500ms
var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true
});
</script>   
</body>
</html>
