<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title id="TRUSTEE_PARTNER">TRUSTEE PARTNER - A GROUP OF YOUR TRUST</title>
	<link rel="stylesheet" href="/contant/css/home_nav.css">
    <link rel="stylesheet" href="/contant/css/section_1.css">
    <link rel="stylesheet" href="/contant/css/section_2.css">
    

    <link rel="stylesheet" href="/contant/css/footer.css">
    <link rel="stylesheet" href="/contant/css/foter_copy.css">
    <link rel="stylesheet" href="/contant/css/slick-slider.css">

    <link rel="stylesheet" href="/contant/css/aos-total-animation.css">
    

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

            var name = document.getElementById("fname").value;
            var mobile = document.getElementById("fmobile").value;
            var subject= document.getElementById("fsubject").value;
            var message = document.getElementById("fmessage").value;
           


            if(name.length === 0)
            {
                alert("You must enter your name. ");
                e.preventDefault();
                return ;
            }


            if (mobile.length === 0)
            {
                alert("Please Entry your Mobile number ");
                e.preventDefault();
                return ;
            } 
            if(subject.length === 0)
            {
                alert("Please Enter a subject");
                e.preventDefault();
                return ;
            } 
             
        }
        window.onload =  function()
        {
           console.log("here..........");
            document.getElementById("get-in-tuch").addEventListener("submit", function(e){
                validate(e);
            }); 
   
           
        }


    </script>





    

</head>

<body>



	<header>
		<nav>
        
			<a href="/">
				<img  style="position: relative; top: 12mm;" class="main_logo" src="/contant/image/logo/first_logo.png"  height="60px" width="310px" alt="TRUSTEE PARTNER"></a>
				<ul><li class="toggle tabb"><span class="bars" style="position: relative; top: 0;"></span></li></ul>
				<div style="position: relative; top: -2mm;">
					<a class="home item" href="/">HOME</a>
				<div class="dropdown-menu">
					<button class="services item">SERVICES &#8744</button>
					<div class="menu-content">
					<a class="links-hidden item" href="listing.php">PRODUCT LISTING</a>
					<a class="links-hidden item" href="photography.php">PHOTOGPRAPHY</a>
					<a class="links-hidden item" href="webdesgin.php">WEBSITE DESIGN</a>
					<a class="links-hidden item" href="program.php">STUDENTS PROGRAM</a>
					</div></button></div>
				<li class="tab item"><a href="blogs.php" style="text-decoration: none; color: #000099;">BLOGS</a></li>
				<li class="tab item"><a href="aboutus.php" style="text-decoration: none; color: #000099;">ABOUT US</a></li>
				<li class="tab item"><a href="contactus.php" style="text-decoration: none; color: #000099;">CONTACT US</a></li>
				</div>
		
       </nav>
    </header>


    <section>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <a href="/"><img src="c.jpg" class="slider-width-height"></a>
              <div class="text">
                <h1 style="color: #000099;"><span id="trustee_partner_text_animation"></span></h1><hr>
                <h2 style="color: #000099;"><span id="trustee_partner_text_animation11"></span></h2><hr>
                Mid to senior-level professionals working on product development, product management or product strategy roles and professionals from across functions who are a part of the product's life cycle directly or indirectly.
                <hr><button  class="slide-see-more-btn" title="See More" type="submit">
                    <h3>
                        <a href="/" class="slide-see-more-btn"> See More!</a>
                    </h3>
                </button>
              </div>
            </div>
            
            <div class="mySlides fade">
                <a href="/"><img src="a.jpg" class="slider-width-height"></a>
                <div class="text">
                  <h1 style="color: #000099;"><span id="trustee_partner_text_animation2"></span></h1><hr>
                  <h2 style="color: #000099;"><span id="trustee_partner_text_animation12"></span></h2><hr>
                  Mid to senior-level professionals working on product development, product management or product strategy roles and professionals from across functions who are a part of the product's life cycle directly or indirectly.
                  <hr><button  class="slide-see-more-btn" title="See More" type="submit">
                      <h3>
                          <a href="/" class="slide-see-more-btn"> See More!</a>
                      </h3>
                  </button>
                </div>
            </div>
            
            <div class="mySlides fade">
                <a href="/"><img src="c.jpg" class="slider-width-height"></a>
                <div class="text">
                  <h1 style="color: #000099;"><span id="trustee_partner_text_animation3"></span></h1><hr>
                  <h2 style="color: #000099;"><span id="trustee_partner_text_animation13"></span></h2><hr>
                  Mid to senior-level professionals working on product development, product management or product strategy roles and professionals from across functions who are a part of the product's life cycle directly or indirectly.
                  <hr><button  class="slide-see-more-btn" title="See More" type="submit">
                      <h3>
                          <a href="/" class="slide-see-more-btn"> See More!</a>
                      </h3>
                  </button>
                </div>
            </div>

            <div class="mySlides fade">
                <a href="/"><img src="b.jpg" class="slider-width-height"></a>
                <div class="text">
                  <h1 style="color: #000099;"><span id="trustee_partner_text_animation4"></span></h1><hr>
                  <h2 style="color: #000099;"><span id="trustee_partner_text_animation14"></span></h2><hr>
                  Mid to senior-level professionals working on product development, product management or product strategy roles and professionals from across functions who are a part of the product's life cycle directly or indirectly.
                  <hr><button  class="slide-see-more-btn" title="See More" type="submit">
                      <h3>
                          <a href="/" class="slide-see-more-btn"> See More!</a>
                      </h3>
                  </button>
                </div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <div class="slide-dot-combo" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
  
        </div>


        <!--notice box text scroll-->


        <div class="notice_lines" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="300">
            <marquee behavior="scroll" direction="rights"><h3>
                <a href="" style="text-decoration: none;">
                    &#9900 Student program interships for 2nd and 3rd year only
                </a></h3></marquee>
            <marquee behavior="scroll" direction="rights"><h3>
                <a href="" style="text-decoration: none;">
                     &#9900 Join now 
                </a></h3></marquee>

        </div>
            
    </section>
<!--slider auto and mnaual script-->
    <script>
        var slideIndex = 0;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  var myTimer;

showSlides();

function showSlides() {    
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" activeslide", "");
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    dots[slideIndex-1].className += " activeslide";
    slides[slideIndex-1].style.display = "block";
    myTimer = setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function currentSlide(no) {
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" activeslide", "");
    }
    slideIndex = no;
    slides[no-1].style.display = "block";
    dots[no-1].className += " activeslide";
    clearTimeout(myTimer);
    myTimer = setTimeout(showSlides, 5000);
}

function plusSlides(n) {
  var newslideIndex = slideIndex + n;
  if(newslideIndex < 5 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}
    </script>

<!--anmation text script file downloded-->

    <script src="/contant/js/typed-text-animation.js"></script>

<!--anmation text in text class-->


    <script>
        var typed6 = new Typed('#trustee_partner_text_animation', {
        strings: ['<strong>TRUSTEE PARTNER</strong><br> `The Future of business`'],
        typeSpeed: 10,
        backSpeed: 20,
        loop: true
        });
    </script>
    <script>
        var typed6 = new Typed('#trustee_partner_text_animation11', {
        strings: ['Product Listing'],
        typeSpeed: 10,
        backSpeed: 50,
        cursorChar: ' !!',
        loop: false
        });
    </script>

    <script>
        var typed6 = new Typed('#trustee_partner_text_animation2', {
        strings: ['<strong>TRUSTEE PARTNER</strong><br> `The Future of business`'],
        typeSpeed: 10,
        backSpeed: 20,
        loop: true
        });
    </script>
    <script>
        var typed6 = new Typed('#trustee_partner_text_animation12', {
        strings: ['E-Commerce and Cateloge Shots'],
        typeSpeed: 10,
        backSpeed: 50,
        startDelay: 5000,
        cursorChar: ' !!',
        loop: false
        });
    </script>

    <script>
        var typed6 = new Typed('#trustee_partner_text_animation3', {
        strings: ['<strong>TRUSTEE PARTNER</strong><br> `The Future of business`'],
        typeSpeed: 10,
        backSpeed: 20,
        loop: true
        });
    </script>
    <script>
        var typed6 = new Typed('#trustee_partner_text_animation13', {
        strings: ['Website Designer'],
        typeSpeed: 10,
        backSpeed: 50,
        cursorChar: ' !!',
        startDelay: 10000,
        loop: false
        });
    </script>

    <script>
        var typed6 = new Typed('#trustee_partner_text_animation4', {
        strings: ['<strong>TRUSTEE PARTNER</strong><br> `The Future of business`'],
        typeSpeed: 10,
        backSpeed: 20,
        loop: true
        });
    </script>
    <script>
        var typed6 = new Typed('#trustee_partner_text_animation14', {
        strings: ['Interships and Jobs'],
        typeSpeed: 10,
        backSpeed: 50,
        cursorChar: ' !!',
        startDelay: 15000,
        loop: false
        });
    </script>


<!--2nd sectiion class-->



	<section>

        <section>

            <div class="section2-center-class">
                <button style="background-color: #ff1e56; color: white; padding: 15px;"> <h3> Servise </h3></button><br><br>
                <h2>Take our servise in online mood</h2><br>
                <p style="color: #4c4c4c;">Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites tha</p>
    
            </div>

            <div class="container-slick">
      
                <section class="customer-logos slider">
                   <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 1000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                  </div>

                   <div class="slide"><img src="d.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 2000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                    </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg">

                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 3000</h2>
                    <br>
                    <button class="paynow"><h1> Book Now </h1></button>

                    </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 4000</h2>
                    <br>
                    <button class="paynow"><h1> Book Now </h1></button>
                </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 5000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 6000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 7000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 8000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>
                    
                </div>

                   <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg">
                    <a href="/">
                        <button class="take-servise-hover-view-more"> See details </button>
                    </a>
                    <h3>Product Descripti</h3>
                    <h4 style="color: #232323;"> &nbsp; Per 10 product</h4>
                    <h2 class="price-servise">    &#8377 9000</h2>
                    <br>
                    <a href="/">
                        <button type="button"  class="paynow"><h1> Book Now </h1></button>
                    </a>

                </div>

                </section>
                
            </div>
            <script src="/contant/js/section2/js.js"></script>
            <script src="/contant/js/section2/slick-slider-manual.js"></script>
            <script src="/contant/js/section2/slick.js"></script>



        </section>







        <div class="section2-center-class">
            <button style="background-color: #ff1e56; color: white; padding: 15px;"> <h3> Why choose us ! </h3></button><br><br>
            <h2>hyy here we are providsjkajfkajkdf</h2>
            
            <br>
            <p style="color: #4c4c4c;">Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites tha</p>

        </div>




        <div class="section-2-image-inhover">
            <div class="image-hoverbox" data-aos="flip-right" data-aos-duration="500">
                <div class="why-choose-img">
                    <img src="/c.jpg" alt="" class="image-hoverbox-size-adjust">
                    <a href="/" style="text-decoration: none; align-items: center;">
                        <button class="sec-2-hover-class sec2textup">View Blogs</button>
                    </a>                    
                </div>
                
                <div class="why-choose-text">
                    <h2 style="color: #191919;">Well maintained</h2>
                    hello Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites that allow

                </div>
                    
                
            </div>

            <div class="image-hoverbox" data-aos="flip-left" data-aos-duration="500" data-aos-delay="150">
                <div class="why-choose-img">
                    <img src="/c.jpg" alt="" class="image-hoverbox-size-adjust">
                    <a href="/" style="text-decoration: none; align-items: center;">
                        <button class="sec-2-hover-class sec2textup">View Blogs</button>
                    </a>                    
                </div>
                
                <div class="why-choose-text">
                    <h2 style="color: #191919;">Well maintained</h2>
                    hello Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites that allow

                </div>
                    
                
            </div>

            <div class="image-hoverbox" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">
                <div class="why-choose-img">
                    <img src="/c.jpg" alt="" class="image-hoverbox-size-adjust">
                    <a href="/" style="text-decoration: none; align-items: center;">
                        <button class="sec-2-hover-class sec2textup">View Blogs</button>
                    </a>                    
                </div>
                
                <div class="why-choose-text">
                    <h2 style="color: #191919;">Well maintained</h2>
                    hello Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites that allow

                </div>
                    
                
            </div>

            

        </div>
        <a href="/" >
            <button class="why-choose-view-more">View More</button>
        </a>
        <hr><br><br>

        <!--call now screen with assured by our-->

        <section>

            <div class="call-now-background-full">

                <div class="call-now-cntt-with-full-dono">

                    <div class="call-now-cntt-with-flex">
                        <div class="call-now-main-show-cntt" data-aos="flip-left" data-aos-duration="500">
                            <div call-now-main-show-image>
                                <img src="/b.jpg" alt="" class="image-hoverbox-size-adjust">

                            </div>

                            <div class="call-now-main-show-text">
                                <h2 style="color: #999900;">Creditable Integrity</h2>
                                <p>akdjkajfkasd kaj jsak  ksaf fa j</p><br><br>

                            </div>

                            
                        </div>


                        <div class="call-now-main-show-cntt" data-aos="flip-left" data-aos-duration="500" data-aos-delay="150">
                            <div call-now-main-show-image>
                                <img src="/b.jpg" alt="" class="image-hoverbox-size-adjust">

                            </div>

                            <div class="call-now-main-show-text">
                                <h2 style="color: #999900;">Creditable Integrity</h2>
                                <p>akdjkajfkasd kaj jsak  ksaf fa j</p><br><br>

                            </div>

                            
                        </div>


                        <div class="call-now-main-show-cntt" data-aos="flip-left" data-aos-duration="500" data-aos-delay="300">
                            <div call-now-main-show-image>
                                <img src="/b.jpg" alt="" class="image-hoverbox-size-adjust">

                            </div>

                            <div class="call-now-main-show-text">
                                <h2 style="color: #999900;">Creditable Integrity</h2>
                                <p>akdjkajfkasd kaj jsak  ksaf fa j</p><br>

                            </div>

                            
                        </div>

                    </div>
                    

                    <div class="call-now-cntt-with-flex">
                        <a href="tel: +916350029208">
                            <button id="call-now-main-cont" data-aos="flip-left" data-aos-duration="500"><h2>Call Now >></h2></button>
                        </a>

                    </div>


                </div>



            </div>



        </section>

<!--whaat we do auto typed-->

        


        <div>
            <div style="background-color: #bfbf7f;">
                <div class="section2-center-class">
                    <button style="background-color: #4c004c; color: white; padding: 15px; border-style: double;"> <h3> we do </h3></button><br><br>
                    <h2>hyy here we are providsjkajfkajkdf</h2><br>
                    <p style="color: #4c4c4c;">Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites tha</p>
        
                </div>
    
                <div class="explor-myself">

                    <div class="text-anim-join-now">
    
                        <div class="animat-text-join">
                            <span id="servise-type1"></span>
                        </div>
                        
                        <div class="animat-text-join">
                            <span id="servise-type2"></span>
                        </div>
        
                    </div>
    
                    <div class="text-join-btns">
        
                        <div class="text-join-btns-dono">
                            <a href="/">
                                <button class="join-conta-anima">JOin Now</button>
                            </a>
                        </div>
    
                        <div class="text-join-btns-dono">
    
                            <a href="/">
                                <button class="join-conta-anima"> Contat Us </button>
                            </a>
                        </div>
        
                    </div>
    


                </div>
            </div>

            <script>
                var typed6 = new Typed('#servise-type1', {
                strings: ['Account managing ✓<br>Product listing ✓<br>content writing ✓<br>E-commerece shots ✓<br>Outdoor shots ✓'],
                typeSpeed: 40,
                backSpeed: 20,
                backDelay: 11000,
                loop: scrollTo
                });
    
            </script>
            <script>
                var typed6 = new Typed('#servise-type2', {
                strings: ['Website design ✓<br>Website devolpment ✓<br>Provide <strong>Intership</strong> for students ✓<br>Free <strong>course</strong> for students ✓<br> etc... '],
                typeSpeed: 40,
                backSpeed: 20,
                startDelay: 10000,
                loop: scrollY
                });
    
            </script>


        </div>

        

	</section>


    <section>


        <section>

            <div class="section2-center-class">
                <button style="background-color: #999932; color: white; padding: 15px; border: none; border-radius: 30%;"> <h3> << Our Partner's >> </h3></button><br><br>
                <h2>hyy here we are providsjkajfkajkdf</h2><br>
                <p style="color: #4c4c4c;">Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites tha</p>
    
            </div><br><br><br>

            <div class="container-slick-partner">
      
                <section class="our-partner-slid slider">
                   <div class="slide"><img src="/footer.png" ></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                   <div class="slide"><img src="/footer.png"></div>
                </section>
                
            </div>
            <script src="/contant/js/section2/slick-slider-manual-our-partner.js"></script>


        </section>


<!--heere our certifacte list-->
            <section  id="certificate-amazon">

                <div class="amazon-dono-certifacte">
                    <button style="background-color: #ff1e56; color: white; padding: 15px; align-items: center;"> <h3> Verified </h3></button><br><br>
                    <h2> We are certified by <strong>AMAZON</strong></h2><br>
                    <p style="color: #4c4c4c;">Business-to-business (B2B) e-commerce refers to the electronic exchange of products, services or information between businesses rather than between businesses and consumers. Examples include online directories and product and supply exchange websites tha</p>

                </div>

                <div class="amazon-dono-certifacte">

                    <img class="verifed-amazone-certificate" src="/contant/image/home/amazon-certifacate.png" alt="certificate of Trusteepartner.in ,Verified by AMAZON">
            
                </div>

            </section>

                <div class="always-center-class">
                    <a href="/">
                        <button id="certificate-see-more-button"> <h3> See More >> </h3></button><br><br>
                    </a>
                </div>



            <br><br><hr><hr>

<!--our team -->
        <section>

            
                <div class="always-center-class">
                    <button style="background-color: #b266b2; padding: 8px; font-weight: bold; border: none; border-radius: 5%;">
                        <h1> << MY Team >> </h1>
                    </button>

                    <h2 style="color: #4c4c4c;">Meet our Experts</h2><br>
                </div>
                
                
    
            <br><br>

            <div class="container-slick-partner">
      
                <section class="our-Client slider">
                   <div class="slide"><img src="/footer.png" >
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>

                </div>

                   <div class="slide"><img src="/footer.png">
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>
                </div>

                   <div class="slide"><img src="/footer.png">
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>
                </div>

                   <div class="slide"><img src="/footer.png">
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>
                </div>

                   <div class="slide"><img src="/footer.png">
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>
                </div>

                   <div class="slide"><img src="/footer.png">
                    <h2 class="always-center-class" style="color: #ff1e56;"> priyanshu </h2>
                    <h3 class="always-center-class"> account manager</h3><br>
                    <a href="/">
                        <button type="button"  class="kow-more-our-team"><h1> Know More ! </h1></button>
                    </a>
                </div>

                
                </section>
                
            </div><br><br><br>
            <script src="/contant/js/section2/slick-slider-manual-our-client.js"></script>


        </section>


    </section>

<!--contact us form-->    

<section id="back-conta">

    <div class="contact-us-full-back">
        <img src="/contant/image/home/contant-us.jpg" alt="Contact-Us" id="contact-imag-height-width">
    </div>

    <div class="contact-us-full-back">
        <div id="contact-us-join">
            <h1 style="font-weight: bolder;"><u> Get In Touch With Us </u></h1>
            <br>
            <h3 style="opacity: 0.8;">Questions, comments, concerns or suggestions? We love hearing from our community, so feel free to reach out anytime.</h3>
            <h3 style="opacity: 0.8;">You can send me a mail also on <a href="mailto: trusteepartner@gmail.com" style="text-decoration: none;color: black; opacity: 0.8;">contact@trusteepartner.in</a></h3>
            <br>
            <form action="submit" method="post" id="get-in-tuch">

                <label for="fname"><h3>Name* :</h3></label>
                <input type="text" id="fname" minlength="5" maxlength="25" name="fname" placeholder="Enter your name" class="textbox-class" >

                <label for="fmobile"><h3>Mobile NO.* :</h3></label>
                <input type="tel" minlength="10" maxlength="12" id="fmobile" name="fmobile" placeholder="Enter your mobile number withour country code" class="textbox-class">

                <label for="fsubject"><h3>Subject* :</h3></label>
                <input type="text" id="fsubject" maxlength="30" name="fsubject" placeholder="Type the subject" class="textbox-class">

                <label for="fmessage"><h3>Message :</h3></label>
                <textarea name="fmessage" id="fmessage" cols="" type="text"  maxlength="400" placeholder="Type your massage here ..." class="textbox-class-message" rows="5" wrap="hard"></textarea>
                <br><br>
                <input type="submit" value="submit" id="cont-info-submit">
            </form>
        </div>

    </div>


</section>

<!--Client Review-->

    <section style="background-color: #cce5cc;">

        <div class="always-center-class">
            <button style="background-color: #4ca64c; padding: 8px; font-weight: bold; border: none; border-radius: 5%;">
                <h1>Client’s Reviews</h1>
            </button>

        </div>

        <br><br><br>

        <div class="container-slick-partner">
  
            <section class="our-Client slider">
               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

               <div class="slide"><img src="/footer.png" >
                <h3 class="always-center-class">
                    heldsfjakdjfkadsj
                </h3>
                <br>
                <h3 style="color: #ff1e56;" class="always-center-class"> ~ Priyanshu </h3>

                </div>

            </section>
            
        </div><br><br><br><br>
        <script src="/contant/js/section2/slick-slider-manual-our-client.js"></script>

    </section>












<!--main footer-->

<footer>
    <div class="footer_back_main">
        <span class="three_combo">

            <span class="first_combo">

                <span class="first_class">
                    <ul>
                        <li class="img_class">
                            <a href="/">
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
    
                <span class="second_class">
                    <span class="name_quick">
                       <ul>
                           <li>
                            <h2>QUICK LINK
                            <span class="arrow"></span></h2>
                           </li>
                       </ul>
                    </span>
    
                    <div class="q_links">
    
                        <div class="n_q_links">
                            <ul>
                                <ul>
                                    <li>
                                        <a href="listing.php" class="quick_nav"><b> Product lisitng</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Content  Writing</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Advertisment</a>
                                    </li><br>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="photography.php" class="quick_nav"><b>Photography</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">E-Commerece Shoot</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Electronic Shoot</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Clothing Shoot</a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="/privacy-policy.html" class="quick_nav"><b>Privacy Policy</b></a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
    
                        <div class="n_q_links">
                            <ul>
                                <ul>
                                    <li>
                                        <a href="webdesign.php" class="quick_nav"><b> Website  Desgin</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Business Website</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Education Website</a>
                                    </li><br>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="program.php" class="quick_nav"><b>Program</b></a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Interships</a>
                                    </li>
                                    <li>
                                        &#9900 <a href="#" class="quick_nav_link">Jobs</a>
                                    </li><br>
                                    <li>&#160 &#160<a href="regestrion_form" class="quick_nav_link"><b> Join Us</b></a></li>
                                    <li>
                                        <a href="/terms-and-conditon.html" class="quick_nav"><b>Terms & Conditions</b></a>
                                    </li>
                                </ul>
    
                            </ul>
                        </div>
                    </div>
    
                </span>
            </span>

            <span class="third_class">
                
                <span class="name_quick">
                    <ul>
                        <li>
                           <h2>CONTANT US!
                            <span class="arrow"></span></h2>
                        </li>
                    </ul>
                </span>
                <div class="contact_sec">
                    
                    <ul>
                        <li>
                            <a class="con_size" href="https://goo.gl/maps/tBg7mekrpx9gEHZk6"><span class="biggg">&#10146</span> &#160 &#160 Benito Juarez Marg, Block D, Anand Niketan, New Delhi, 110021</a>
                        </li>
                        <li>
                            <a class="con_size" href="tel: +916350029208"><span class="biggg">&#9990</span> &#160 +916350029208</a>
                        </li>
                        <li>
                            <a class="con_size" href="mailto: trusteepartner@gmail.com"><span class="biggg">&#9993</span> &#160 contact@trusteepartner.in</a>
                        </li><br>
                        <li>
                            <span class="footer_socal">
                                <a  href="/"><img src="/contant/image/socail/mail.png" width="30px" height="30px" alt=""></a>
                                <a class="img-top" href="/"><img src="/contant/image/socail/mailba.png" width="37px" height="37px" alt=""></a>
                            </span>&#160
                            <span class="footer_socal">
                                <a  href="/"><img src="/contant/image/socail/fb.png" width="30px" height="30px" alt=""></a>
                                <a class="img-top" href="/"><img src="/contant/image/socail/fbba.png" width="37px" height="37px" alt=""></a>
                            </span>
                            &#160
                            <span class="footer_socal">
                                <a  href="/"><img src="/contant/image/socail/link.png" width="30px" height="30px" alt=""></a>
                                <a class="img-top" href="/"><img src="/contant/image/socail/linkba.png" width="37px" height="37px" alt=""></a>
                            </span>&#160
                            <span class="footer_socal">
                                <a  href="/"><img src="/contant/image/socail/twitter.png" width="30px" height="30px" alt=""></a>
                                <a class="img-top" href="/"><img src="/contant/image/socail/twitterba.png" width="37px" height="37px" alt=""></a>
                            </span>
                            &#160
                            <span class="footer_socal">
                                <a  href="/"><img src="/contant/image/socail/insta.png" width="30px" height="30px" alt=""></a>
                                <a class="img-top" href="/"><img src="/contant/image/socail/instaba.png" width="37px" height="37px" alt=""></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </span>

        </span>

        <span class="forth_class">
            <span class="name_quick">
                <ul>
                    <li>
                        <h2>OUR MAP LOACATION
                        <span class="arrow"></span></h2>
                    </li>
                </ul>
                <div class="map_inside">
                    
                    <ul>
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
		<div class="copyright">Copyright &#169 2021&#8482 <span id="copy_2nd_line"><a style="text-decoration: none; color: black;" href="trusteepartner.in"><Trusteepartner class="in">Trusteepartner.in &#174</Trusteepartner></a> All rights reserved &#124</span></div>
        <div class="design">Design and Developed By <span id="copy_3rd_line"><a href="trusteepartner.in/webdesgin.php"><u>Trustee Partner Pvt. Ltd. </u></a></span></div>
    </footer>
<!--butoon to go top -->

    <a href="https://wa.me/+918764667835?text=hi%20I%20am%20interested%20to%20join%20your%20team%20and%20sell%20products%20on%20an%20e-commerce%20site%20and%20I%20have%20a%20GST%20number%20please%20call%20me%20when%20you%20are%20free...">
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

<script src="/contant/js/aos-total-animation.js"></script>
<script>
    AOS.init();
</script>
<script>
    document.querySelector('html').classList.remove('no-js');
    if (!window.Cypress) {
      const scrollCounter = document.querySelector('.js-scroll-counter');

      AOS.init({
        mirror: true
      });

      document.addEventListener('aos:in', function(e) {
        console.log('in!', e.detail);
      });

      window.addEventListener('scroll', function() {
        scrollCounter.innerHTML = window.pageYOffset;
      });
    }
</script>



<!--host server send entry of contact into-->

<?php
if(isset($_POST['fname'] )&& isset($_POST['fmobile'] ) && isset($_POST['fsubject']) && isset($_POST['fmessage']))
{

//    echo "<h1>Coming Here</h1>";

$fname = $_POST['fname'];
$fmobile = $_POST['fmobile'];
$fsubject = $_POST['fsubject'];
$fmessage = $_POST['fmessage'];


$conn = mysqli_connect("localhost","root","","test") or die("Couldn't connect");
$db = mysqli_select_db($conn,"test") or die("Couldn't Connect");
$query = "INSERT INTO contact(fname,fmobile,fsubject,fmessage) VALUES ('$fname','$fmobile','$fsubject','$fmessage')";
$result = mysqli_query($conn,$query);

//echo "<meta http-equiv='refresh' content='500;url=http://localhost/saveaddress1.php'>";
}
?>

</body>
</html>