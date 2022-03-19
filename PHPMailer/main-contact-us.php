<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title id="TRUSTEE_PARTNER">Contact us - TRUSTEE PARTNER - A GROUP OF YOUR TRUST</title>
	<link rel="stylesheet" href="/contant/css/home_nav.css">
    <link rel="stylesheet" href="/contant/css/section_1.css">
    <link rel="stylesheet" href="/contant/css/other-cntt/privacy-pol-and-t&c-.css">
    

    <link rel="stylesheet" href="/contant/css/footer.css">
    <link rel="stylesheet" href="/contant/css/foter_copy.css">
    

    <link rel="icon" href="/contant/image/logo/favicon.icon">
    <script
    src="/contant/js/main-nav-button-click.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    
    <script>
        $(function() {
        $(".toggle").on("click", function() {
            if ($(".item").hasClass("active")) {
                $(".item").removeClass("active");
            } else {
                $(".item").addClass("active");
            }
        });
    });
    </script>

    <script>
        function validate(e)
        {
            console.log("address form validation working");

            var namecon = document.getElementById("name").value;
            var mobilecon = document.getElementById("mobile").value;
            var subjectcon= document.getElementById("subject").value;
            var messagecon = document.getElementById("message").value;


            if(namecon.length === 0)
            {
                alert("You must enter your name. ");
                e.preventDefault();
                return ;
            }


            if (mobilecon.length === 0)
            {
                alert("Please Entry your Mobile number ");
                e.preventDefault();
                return ;
            } 
            if(subjectcon.length === 0)
            {
                alert("Please Enter a subject");
                e.preventDefault();
                return ;
            } 
            if(messagecon.length == 0)
            {
                alert("Please Enter your message");
                e.preventDefault();
                return;
            }
             
        }


    </script>

<script type="text/javascript">
    function validate2(e)
    {
        console.log("card validation working");

        var payname = document.getElementById("join-name").value;
        var paymobile = document.getElementById("join-mobile").value;
        var paymail = document.getElementById("join-mail").value;
        var payshop = document.getElementById("join-shop-name").value;
        var payaddress = document.getElementById("join-address").value;
        var payhowhelp = document.getElementById("join-how-help").value;
        
        var joinmessage = document.getElementById("join-message").value;
        var joinreffer = document.getElementById("join-reffer").value;

        if(payname.length === 0)
        {
            alert("You must enter a your name");
            e.preventDefault();
            return ;
        }
        if(paymobile.length === 0)
        {
            alert("Please enter your phone number");
            e.preventDefault();
            return ;
        }
         if(paymail.length === 0)
        {
            alert("please enter your E-mail ID");
            e.preventDefault();
            return ;
        }
        

        if(payshop.length === 0)
        {
            alert("please enter your shop name");
            e.preventDefault();
            return ;
        }
        
        if(payhowhelp.length === 0)
        {
            alert("Please enter how can i help you like account manage/listing/photograpy/web-design");
            e.preventDefault();
            return ;
        }
        if(payaddress.length === 0)
        {
            alert("please enter your shop address");
            e.preventDefault();
            return ;
        }
        
    }
    window.onload =  function()
    {
       console.log("here..........");
        document.getElementById("join-form-main").addEventListener("submit", function(e){
            validate2(e);
        }); 

       document.getElementById("get-in-touct-main").addEventListener("submit", function(e){
            validate(e);
          
        });
     }
</script>

    


    

</head>

<body>



	<header>

        <nav id="navbar">
            <a href="/">
                <img src="/contant/image/logo/first_logo.png" height="60px" width="310px" class="main_logo" alt="Best ecommerce services Provider">
            </a>
    
            <div class="toggle tabb"><span class="bars"></span></div>
            <div id="fix">
             
             <a href="/" class="home item" title="home">HOME</a>
             <span class="dropdown-menu">
                 <button  class="services item" title="services">SERVICES &#8744</button>
                 <div class="menu-content">
                    <a class="links-hidden item" href="/listing/" title="Product Listing">PRODUCT LISTING</a>
					<a class="links-hidden item" href="/photoshoot/" title="Image Editing">PHOTOGPRAPHY</a>
					<a class="links-hidden item" href="/web-design/" title="Web Design & Development">WEBSITE DESIGN</a>
					<a class="links-hidden item" href="/student-program/" title="We are hiring">STUDENTS PROGRAM</a>
                 </div>
             </span>
             <a class="tab item" href="/blogs/" title="Blog Post's">BLOGS</a>
             <a class="tab item" href="/about/" title="About">ABOUT US</a>
             <a class="tab item" id="contat" href="/contact-us/" title="Contact us">CONTACT US</a>
    
            </div>
        </nav>
        
    </header>



    
    <br><br><br>

    
    <div title="Contact us">
        <h1 id="cont-text-id"> CONTACT US & JOIN NOW</h1>
        <div id="line-border"></div>
        <h2 id="cont-down-text">We are here by to clear all your doubts and would love to solve all your queries.
            <br>Join us and boost your business
    </h2>
    </div>



<!--contact us page-->


<section id="join-form" title="Registration Form">
    <section id="main-join-us-form">

        <h4 style="color: #ffb300;">Become a customer</h4>
        <h1 style="font-size: xxx-large;">Registration Form</h1>
    
        <div class="fix-width-he-cont-us-main">
    
            <form onsubmit="return confirm('Do you really want to submit the form?');" action="contact-us.php"  method="post"  id="join-form-main">
            
            
                <label for="join-name" style="font-size: x-large;" title="Name"> Name <span style="color: red;">*</span></label>
                <input type="name" name="join-name" title="Enter Your Name" minlength="3" maxlength="50" id="join-name" class="textbox-cont-main-us" required ><br><br>
    
                <label for="join-mobile" style="font-size: x-large;" title="Mobile No.">phone <span style="color: red;">*</span></label>
                <input type="tel" name="join-mobile" title="Type Mobile NO." minlength="10" maxlength="12" id="join-mobile" class="textbox-cont-main-us" required ><br><br>
    
                <label for="join-mail" style="font-size: x-large;" title="Email">Email Id <span style="color: red;">*</span></label>
                <input type="email" name="join-mail" title="Enter a Email" minlength="5" maxlength="50" id="join-mail" class="textbox-cont-main-us" required ><br><br>
    
               
                <label for="join-shop-name" style="font-size: x-large;" title="Shop Name"> Shop/Brand/Business Name <span style="color: red;">*</span></label>
                <input type="name" name="join-shop-name" title="Enter Shop Name" minlength="2" maxlength="50" id="join-shop-name" class="textbox-cont-main-us" required ><br><br>
    
                <label for="join-how-help" style="font-size: x-large;" title="Select an Option">How can we help you <span style="color: red;">*</span></label>
                <select name="join-how-help" title="Select an Option" id="join-how-help" class="textbox-cont-main-us" required>
                    <option value="account-manage">E-commerce Account Manage</option>
                    <option value="Product-listing">Product listing</option>
                    <option value="content-writing">Content Writing</option>
                    <option value="Addverstment">Advertisement and Campaign</option>
                    <option value="product-shoot">Product Shoot</option>
                    <option value="model-shoot">Model Shoot</option>
                    <option value="Image-Editing">Image Editing</option>
                    <option value="web-design">Website Design</option>
                    <option value="web-development">Website Development</option>
                    <option value="other">Other</option>
                </select>
                <br><br>
                
    
                <label for="join-address" style="font-size: x-large;" title="Address">Full Address <span style="color: red;">*</span></label>
                <textarea name="join-address" title="Enter your address" id="join-address" rows="5" type="name" class="textbox-cont-main-fon-message" required ></textarea><br><br>
    
                
                <label for="join-message" style="font-size: x-large;" title="Additional message">Additional Messages</label><br>
                <textarea name="join-message" type="name" title="Enter an message" id="join-message"  rows="8" class="textbox-cont-main-fon-message"></textarea><br><br>
    
                <label for="join-reffer" style="font-size: x-large;" title="Reffer by">Refer code or referel name</label>
                <input type="name" title="Enter Referel name" name="join-reffer" minlength="5" maxlength="50" id="join-reffer" class="textbox-cont-main-us"><br><br>
    


                <input type="submit" value="Checkout" title="Make Payment" name="send-me-message-sumbit-class1" id="send-me-message-sumbit-class1">
                
                <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_b8TLmPhY6O2gfd"
                data-amount="9000"
                data-currency="INR"
                data-id="JOIN-US"
                data-buttontext="Pay Now"
                data-name="TRUSTEE PARTNER"
                data-description="New Regestration"
                
                data-theme.color="#ffb300"
                ></script>
    
    
            </form>
            
            
            
    
        </div>
    
    
    
    </section>
</section>
    
    

<!-- address and some more -->


<section id="back3-cont-class-for-all">

    <div class="home-mail-and-map" title="Address">
        <img src="/contant/image/one_use/home-cont.png" alt="address" class="home-mal-map-image-resize"><br><br>
        <div class="home-down-text-color">
            If headed with some quires you are free to visit our site anytime.
        </div><br>
        <div class="main-cont-text-color">
            <h3> Benito Juarez Marg, Block D, Anand Niketan, New Delhi, 110021 </h3>
        </div>
    </div>

    <div class="home-mail-and-map" title="Mobile No.">
        <img src="/contant/image/one_use/phone-cont.png" alt="address" class="home-mal-map-image-resize"><br><br>
        <div class="home-down-text-color">
            If you're not near to visit our site, the easiest way is to contact us.
        </div><br>
        <a href="tel: +916350029208"class="main-cont-text-color">
            <h2> +91 63(5002) 9208</h2>
        </a>
    </div>

    <div class="home-mail-and-map" title="Email ID">
        <img src="/contant/image/one_use/mail-cont.png" alt="address" class="home-mal-map-image-resize"><br><br>
        <div class="home-down-text-color">
            It will be really helpful if you share your quires with us in given below email.
        </div><br>
        <a href="mailto: contact@trusteepartner.tech"class="main-cont-text-color">
            <h2> Contact@trusteepartner.tech</h2>
        </a>
    </div>






</section>
            

<!--contact us form-->


    <section id="send-query" title="Contact us">
        <section id="main-form-contact-us">

            <h4 style="color: #ffb300;">Get in touch</h4>
            <h1 style="font-size: xxx-large;">Contact Us</h1>
    
            <div class="fix-width-he-cont-us-main">
    
                <form action="/contact-us/" method="post" id="get-in-touct-main">
    
                    <label for="name" style="font-size: x-large;" title="Name"> Name <span style="color: red;">*</span></label>
                    <input type="name" name="name" title="Enter your name" minlength="3" maxlength="50" id="name" class="textbox-cont-main-us" required><br><br>
        
                    <label for="mobile" style="font-size: x-large;" title="Mobile No.">phone <span style="color: red;">*</span></label>
                    <input type="tel" name="mobile" title="Enter your mobile no." minlength="10" maxlength="12" id="mobile" class="textbox-cont-main-us" required ><br><br>
        
                    <label for="subject" style="font-size: x-large;" title="Short Subject">Subject <span style="color: red;">*</span></label>
                    <input type="name" name="subject" title="Enter a well define subject" minlength="3" maxlength="50" id="subject" class="textbox-cont-main-us" required ><br><br>
        
                    <label for="message" style="font-size: x-large;" title="Message">Message <span style="color: red;">*</span></label><br>
                    <textarea name="message" title="Describe your messaage" id="message" cols="30" rows="8" class="textbox-cont-main-fon-message" required ></textarea><br><br>
    
                    
    
                    <input type="submit" value="Send message" title="Sumbit your query" id="send-me-message-sumbit-class">
                    
        
        
        
                </form>
                <script>
                    $(document).ready(function(){
                        $("#get-in-touct-main").submit(function(){
                            alert("Form submitted");
                        
                        });
                    });
                </script>
    
            </div>
    
    
    
        </section>
    </section>








    
<!-- thought sectioin  here start -->


<br><br><br><br>
<section>


    <div class="dubolcotes-error-where-thought1">
        &#786  &#786
    </div>


    <div class="thought">
        <div class="maintought">
            <div class="main-thou-text-here">
                Many of life's failures are people who did not realize how close they were to success when they gave up

                <div class="name-flot">
                    ~ Thomas A. Edison
                </div>
            </div> 
        </div>
    </div>

    <div class="dubolcotes-error-where-thought2">
        &#787  &#787
    </div>


</section>








<!--map loctaion -->

    <section title="Google Map address">


        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14014.960820416107!2d77.162369!3d28.577563!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50de66393d0f317c!2sCredlegal!5e0!3m2!1sen!2sin!4v1636623641585!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>















<!--main footer-->

<footer>
    <div class="footer_back_main">
        <span class="three_combo">

            <span class="first_combo">

                <span class="first_class">
                    <ul>
                        <li class="img_class">
                            <a href="/" title="Trustee Partner">
                                <img src="/contant/image/one_use/footer_logo.png" alt="Trustee Partner" class="exp_img">
                            </a>
                        </li>
                    </ul><br>
                    <ul>
                        <li class="exper_content">
                            Over 5+ years of experience and knowledge of users of international standards, changing technical functions, and market systems, we are dedicated to providing the best and economical solutions to our valued clients.
                        </li>
                    </ul>
                </span>
    
                <span class="second_class" title="Quick Link">
                    <span class="name_quick">
                       <ul>
                           <li>
                            <h2> QUICK LINK
                            <span class="arrow"></span></h2>
                           </li>
                       </ul>
                    </span>
    
                    <div class="q_links">
    
                        <div class="n_q_links">
                            <ul>
                                <ul title="Product Listing">
                                    <li>
                                        <a href="/listing/" class="quick_nav"><b>Product lisitng</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/listing/#seller-services" class="quick_nav_link" title="Seller Services">Seller Services</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/listing/#Advertisment" class="quick_nav_link" title="Manage Advertisements">Ads Optimization</a>
                                    </li><br>
                                </ul>
                                <ul title="Photoshoot">
                                    <li>
                                        <a href="photography.php" class="quick_nav"><b>Photoshoot</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/photoshoot/#gallery" title="Gallery" class="quick_nav_link">Gallery</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/photoshoot/#editing" title="Editing" class="quick_nav_link">Editing & Proccing</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/photoshoot/#ecommerce-shoot" title="E-commerce Photography" class="quick_nav_link">E-Commerce Shoot</a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="/privacy-policy/" target="_blank" title="Our Policy" class="quick_nav"><b>Privacy Policy</b></a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
    
                        <div class="n_q_links">
                            <ul>
                                <ul title="Web Design & Development">
                                    <li>
                                        <a href="/web-design/"  class="quick_nav"><b> Website  Desgin</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/web-design/corpr-web" title="Business" class="quick_nav_link">Business Website</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/web-design/#edu-web" title="Educatoin" class="quick_nav_link">Education Website</a>
                                    </li><br>
                                </ul>
                                <ul title="Student Program">
                                    <li>
                                        <a href="/student-program/" class="quick_nav"><b>Program</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/student-program/#Interships" title="Interships" class="quick_nav_link">Interships</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="/student-program/#Jobs" title="Jobs" class="quick_nav_link">Jobs</a>
                                    </li><br>
                                    <li title="Registration Form">
                                        <a href="/contact-us/#join-form" target="_blank" class="quick_nav_link"><b> Join Us</b></a>
                                    </li>
                                    <li>
                                        <a href="/terms-&-conditon/" target="_blank" title="T & C" class="quick_nav"><b>Terms & Conditions</b></a>
                                    </li>
                                </ul>
    
                            </ul>
                        </div>
                    </div>
    
                </span>
            </span>

            <span class="third_class" title="Contact us">
                
                <span class="name_quick">
                    <ul>
                        <li>
                            <h2> CONTACT US!
                            <span class="arrow"></span></h2>
                        </li>
                    </ul>
                </span>
                <div class="contact_sec">
                    
                    <ul title="Address">
                        <li>
                            <a class="con_size" href="https://goo.gl/maps/tBg7mekrpx9gEHZk6" target="_blank"><span class="biggg">&#10146</span> &#160 &#160 Benito Juarez Marg, Block D, Anand Niketan, New Delhi, 110021</a>
                        </li>
                        <li title="Mobile No.">
                            <a class="con_size" href="tel: +916350029208"><span class="biggg">&#9990</span> &#160 +916350029208</a>
                        </li>
                        <li title="E-Mail">
                            <a class="con_size" href="mailto: trusteepartner@gmail.com"><span class="biggg">&#9993</span> &#160 contact@trusteepartner.tech</a>
                        </li><br>
                        <li title="Social Channels">
                            <span class="footer_socal" title="E-Mail">
                                <a  href="mailto:contact@trusteepartner.tech" target="_blank"><img src="/contant/image/socail/mail.png" width="30px" height="30px" alt="e-commerce account Manage"></a>
                                <a class="img-top" href="mailto:contact@trusteepartner.tech" target="_blank"><img src="/contant/image/socail/mailba.png" width="37px" height="37px" alt="catalogs"></a>
                            </span>&#160
                            <span class="footer_socal" title="Facebook">
                                <a  href="https://www.facebook.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/fb.png" width="30px" height="30px" alt="Product Listing"></a>
                                <a class="img-top" href="https://www.facebook.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/fbba.png" width="37px" height="37px" alt="amazon flipkart services"></a>
                            </span>
                            &#160
                            <span class="footer_socal" title="Linkedln">
                                <a  href="https://www.linkedin.com/in/trusteepartner/" target="_blank"><img src="/contant/image/socail/link.png" width="30px" height="30px" alt="Best Ecommerce services in delhi"></a>
                                <a class="img-top" href="https://www.linkedin.com/in/trusteepartner/" target="_blank"><img src="/contant/image/socail/linkba.png" width="37px" height="37px" alt="Best Ecommerce services in jaipur"></a>
                            </span>&#160
                            <span class="footer_socal" title="Twitter">
                                <a  href="https://twitter.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/twitter.png" width="30px" height="30px" alt="Ecommerce Photoshot Services"></a>
                                <a class="img-top" href="https://twitter.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/twitterba.png" width="37px" height="37px" alt="Ecommerce Seller Services"></a>
                            </span>
                            &#160
                            <span class="footer_socal" title="Instagram">
                                <a  href="https://www.instagram.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/insta.png" width="30px" height="30px" alt="Seller Account Mangement"></a>
                                <a class="img-top" href="https://www.instagram.com/trusteepartner/" target="_blank"><img src="/contant/image/socail/instaba.png" width="37px" height="37px" alt="ecommerce Services Provider Network"></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </span>

        </span>

        <span class="forth_class" title="Map Location">
            <span class="name_quick">
                <ul>
                    <li>
                        <h2> OUR MAP LOACATION 
                        <span class="arrow"></span></h2>
                    </li>
                </ul>
                <div class="map_inside">
                    
                    <ul title="Trustee Partner">
                        <li>
                            <iframe class="footer_map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3503.739375685038!2d77.1607668!3d28.5775879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d08d179d37f%3A0x50de66393d0f317c!2sCredlegal!5e0!3m2!1sen!2sin!4v1634647017574!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </li><br>
                    </ul>
                </div>
            </span>
        </span>
    </div>
</footer>

<!--copyright page  footer-->

	<footer class="copy_right_back">
		<div class="copyright" title="Copyright by Trustee Partner">
            &#169 2018-2021 by <span id="copy_2nd_line"><a style="text-decoration: none; color: black;" href="/"><Trusteepartner class="in">trusteepartner.tech</Trusteepartner></a> &#124 All rights reserved &#124</span>
        </div>
        <div class="design" title="Design by Trustee Partner">
            Design and Developed By <span id="copy_3rd_line"><a href="/web-design/"><u>Trustee Partner Pvt. Ltd. </u></a></span>
        </div>
    </footer>
<!--butoon to go top -->

    <a href="https://wa.me/+918764667835?text=hii">
<button id="whatsapp_button" title="Message me!!" type="button" ><span class="whatsapp_text">Message me on Whatsapp!!</span></button>
</a>

<button onclick="topFunction()" id="up_button" title="Go to top"></button>

<!--java script for top button-->
<script>
    //Get the button
    var mybutton = document.getElementById("up_button");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-500px";
      }
      prevScrollpos = currentScrollPos;
    }
</script>




<!--host server send entry of contact into-->


<?php
if(isset($_POST['name'] )&& isset($_POST['mobile'] ) && isset($_POST['subject']) && isset($_POST['message']))
{

   // echo "<h2>Coming Here</h2>";

$conname = $_POST['name'];
$conmobile = $_POST['mobile'];
$consubject = $_POST['subject'];
$conmessage = $_POST['message'];


$conn = mysqli_connect("localhost","root","","contactus") or die("Couldn't connect");
$db = mysqli_select_db($conn,"contactus") or die("Couldn't Connect");
$query = "INSERT INTO contact(name,mobile,subject,message) VALUES ('$conname','$conmobile','$consubject','$conmessage')";
$result = mysqli_query($conn,$query);

echo "<meta http-equiv='refresh' content='0;url=http://localhost/paymentss1.php'>";
}
?>



<?php
if(isset($_POST['join-name'] )&& isset($_POST['join-mobile'] ) && isset($_POST['join-mail']) && isset($_POST['join-shop-name']) && isset($_POST['join-how-help'])&& isset($_POST['join-address'] ) && isset($_POST['join-message']) && isset($_POST['join-reffer']))
{

    //echo "<h1>Coming Here</h1>";

$name = $_POST['join-name'];
$numberr = $_POST['join-mobile'];
$city = $_POST['join-mail'];
$area = $_POST['join-shop-name'];
$code = $_POST['join-how-help'];
$citye = $_POST['join-address'];
$areae = $_POST['join-message'];
$codee = $_POST['join-reffer'];

$conn = mysqli_connect("sql312.epizy.com","epiz_31294057","SQB2gQLxfgA","epiz_31294057_contactus") or die("Couldn't connect");
$db = mysqli_select_db($conn,"epiz_31294057_contactus") or die("Couldn't Connect");
$query = "INSERT INTO joinnow(name,phone,email,shopname,howhelp,address,message,reffer) VALUES ('$name','$numberr','$city','$area','$code','$citye','$areae','$codee')";
$result = mysqli_query($conn,$query);

echo "<meta http-equiv='refresh' content='0;url=http://localhost/saveaddress1.php'>";
}
?>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

if(isset($_POST['send-me-message-sumbit-class1'])
{
    $namee = $_POST['join-name'];
    $numberre = $_POST['join-mobile'];
    $citye = $_POST['join-mail'];
    $areae = $_POST['join-shop-name'];
    $codee = $_POST['join-how-help'];
    $cityee = $_POST['join-address'];
    $areaee = $_POST['join-message'];
    $codeee = $_POST['join-reffer'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'trusteepartner.autoreply@gmail.com';                     //SMTP username
        $mail->Password   = 'autoreply@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('trusteepartner.autoreply@gmail.com', 'TRUSTEE PARTNER');
        $mail->addAddress('trusteepartner.autoreply@gmail.com', 'WEBSITE');     //Add a recipient
        
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "Name : $namee <br> Number : $numberre <br> Mail : $citye <br> Shop Name $areae <br> How help : $codee <br> Address :$cityee <br> Message : $areaee <br> Reffer code : $codeee";
        
    
        $mail->send();
        echo "<script>alert('Message has been sent')</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
}
?>

</body>
</html>