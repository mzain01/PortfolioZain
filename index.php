<?php
include('mail.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Muhammad Zain</title>
    <meta name="title" content="Muhammad Zain - Portfolio">
    <meta name="description" content="Hey!! I'm Zain, a Jr. Website Developer">

    <link rel="shortcut icon" href="assets/images/TOP.png" type="image/svg+xml">

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-nav">
    
     <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->
    

    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img src="assets/images/logo copy.png" alt="logo">
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">SERVICE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">Let's Begin</h2>
                        <h3 class="text-uppercase"><span class="typed"></span></h3>
                        <p>Crafting Digital Experiences Beautifully.</p>
                        <a href="#about" class="button smooth-scroll nav-link">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/sider1.jpg)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/sider2.jpg)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->

    <!-- ====== Featured Area ====== -->
    <section id="featured" class="section-padding pb-70">
        <div class="container">
            <div class="row">
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Graphic Design</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <p>Elevate your brand with my graphic design expertise. From unique logos to cohesive brand identities, I bring creativity and strategic thinking to every project, ensuring captivating visuals that resonate with your audience and leave a lasting impression.</p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Web Design</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <p>Crafting digital experiences with precision. From responsive websites to dynamic applications, I bring expertise in web development. Let me transform your ideas into seamless online solutions that engage and elevate user experiences.</p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
                <!-- single featured item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-featured-item-wrap">
                        <h3><a href="#">Innovator</a></h3>
                        <div class="single-featured-item">
                            <div class="featured-icon">
                                <i class="fa fa-question"></i>
                            </div>
                            <p>Pioneering solutions for your challenges, I bring innovation to life. From groundbreaking ideas to strategic insights, my services empower your projects. Let's collaborate to turn visions into reality and redefine success together.</p>
                        </div>
                    </div>
                </div>
                <!-- single featured item -->
            </div>
        </div>
    </section>
    <!-- ====== //Featured Area ====== -->

    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>About Me</h2>
                        <p>Unveiling the essence of my journey, where creativity meets expertise, and a passion for innovation drives every endeavor.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-bg" style="background-image:url(assets/images/Untitled.jpg)">
                        <!-- Social Link -->
                        <div class="social-aria">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100030102343635"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/iamanullah01"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/iamanullahkhan/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://wa.me/923442882239?text="><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <!-- // Social Link -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Hello, I am <span>Muhamamd Zain</span></h2>
                        <h4>Graphic Designer and Web Designer</h4>
                        <p>Hey I'm Zain, a Jr. Web Developer with a passion for creating visually
                            stunning and user-friendly websites. While I'm in the early stages of my
                            journey, I possess a keen eye for detail and a commitment to
                            continuous improvement. My commitment to ongoing learning
                            ensures that I stay updated with the latest industry trends and
                            technologies. Currently enrolled in an Advanced Diploma in Software
                            Engineering at Aptech Sharah e Faisal, I am dedicated to honing my
                            skills and crafting modern, responsive websites..</p>

                        <h5>My Skills</h5>

                        <!-- Skill Area -->
                        <div id="skills" class="skill-area">

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="95%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">95%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="40%">
                                    <div class="skillbar-title"><span>JS</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">40%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                                 <!-- Single skill -->
                                 <div class="single-skill">
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                                <!-- //Single skill -->
                                
                                 <!-- Single skill -->
                                 <div class="single-skill">
                                    <div class="skillbar" data-percent="75%">
                                        <div class="skillbar-title"><span>MYSQL</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                </div>
                                <!-- //Single skill -->
                                
                                 <!-- Single skill -->
                                 <div class="single-skill">
                                    <div class="skillbar" data-percent="45%">
                                        <div class="skillbar-title"><span>GRAPHICS</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">45%</div>
                                    </div>
                                </div>
                                <!-- //Single skill -->

                        </div>
                        <!-- //Skill Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->


    <!-- ====== Fact Counter Section ====== -->
    <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments 
        ===================================================================== -->
    <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(assets/images/fan-fact-bg.jpg)">
        <div class="container">
            <div class="row">
                <!-- Single Fact Counter -->
                <div class="col-lg-3 co col-md-6 l-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="02">0</span>+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="12">0</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="03">0</span>+</h2>
                        <p>Awards Win</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="31">0</span>+</h2>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
            </div>
        </div>
    </section>
    <!-- ====== //Fact Counter Section ====== -->

  <!-- ====== Call to Action Area ====== -->
  <section class="section-padding call-to-action-aria bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Elevate Your Experience with Our Exceptional Services.</h2>
                <p>Embark on a transformative journey with our unparalleled services, where innovative solutions, dedicated partnerships, and excellence converge at every step, shaping your success story.</p>
            </div>
            <div class="col-lg-3">
                <div class="cta-button">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <a href="#contact" class="button nav-link">Contact me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== // Call to Action Area ====== -->




    <!-- ====== Service Section ====== -->
    <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Service</h2>
                        <p>Exceeding expectations with exceptional and tailored service offerings.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <h2>WEB DESIGN</h2>
                        <p>Crafting digital experiences with precision. From responsive websites to dynamic applications, I bring expertise in web development. Let me transform your ideas into seamless online solutions that engage and elevate user experiences.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <h2>GRAPHIC DESIGN</h2>
                        <p>Elevate your brand with my graphic design expertise. From unique logos to cohesive brand identities, I bring creativity and strategic thinking to every project, ensuring captivating visuals that resonate with your audience and leave a lasting impression.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-question"></i>
                        </div>
                        <h2>INNOVATOR</h2>
                        <p>Innovate your business with my visionary approach. From brainstorming groundbreaking ideas to implementing cutting-edge solutions, I offer strategic consulting and creative direction. Collaborate to unlock the full potential of your ventures and shape a brighter future together.</p>
                    </div>
                </div>
                <!-- //Single Service -->
            </div>

        </div>
    </section>
    <!-- ====== //Service Section ====== -->

    <!-- ====== Why choose Me Section ====== -->
    <section id="" class="section-padding why-choose-us pb-70">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Why choose Me</h2>
                        <p>Choose me for unparalleled expertise, dedication, and client-centric solutions.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Timely completion, consistently delivering quality results with precision, efficiency, and unwavering commitment every time.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Innovative Problem Solver</h4>
                        <p>Creative solutions, strategic innovation, effective troubleshooting, turning challenges into opportunities.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-edit"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Detail-Oriented Development</h4>
                        <p>Precision coding, meticulous design, thorough testing, unwavering quality commitment, ensuring polished outcomes.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-phone-volume"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Efficient Multitasking Mastery</h4>
                        <p>Agile task management, seamless coordination, adept handling of multiple projects, ensuring productivity, and optimal results.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->
            </div>
        </div>
    </section>
    <!-- ====== //Why choose Me Section ====== -->

    <!-- ====== Portfolio Section ====== -->
    <section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Recent Work</h2>
                        <p>Explore a showcase of my diverse portfolio, demonstrating expertise in graphics, web development, and innovative design solutions.
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <ul>
                            <li class="filter" class="active" data-filter="all">ALL</li>
                            <li class="filter" data-filter=".web">Web Design</li>
                            <li class="filter" data-filter=".graphic">Graphic</li>                      
                            <li class="filter" data-filter=".other">Other</li>
                        </ul>
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <!-- Single Portfolio -->
 
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo web wp">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-2.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-2.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp other">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-3.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-3.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other  wp ">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-4.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-4.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other wp graphic web">
                    <div class="single-portfolio" style="background-image: url(assets/images/portfolio/img-5.jpg)">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-5.jpg"><i class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                
               
              
            
            </div>
        </div>
    </section>
    <!-- ====== // Portfolio Section ====== -->

    <!-- ====== Frequently asked questions ====== -->
    <section class="section-padding faq-area bg-secondary">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center faq-title">
                        <h2>Frequently asked questions</h2>
                        <p>Common Questions Answered for Your Convenience and Clarity.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-bg bg-img" style="background-image: url(assets/images/faq.jpeg)"></div>
                </div>
                <div class="col-lg-7">
                    <!-- FAQ Content -->
                    <div class="faq-content" id="accordion">

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-1">What services do you offer?</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-1" class="collapse show" data-parent="#accordion">
                                <div class="faq-body">
                                    I specialize in providing comprehensive design and development solutions, encompassing graphic design with a keen eye for aesthetics, robust web development for seamless online experiences, and innovative design solutions that captivate and engage audiences.
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-2">How do you ensure project timelines are met?</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-2" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    I meticulously plan and organize project timelines, utilizing effective communication channels to keep clients informed about progress. With a commitment to delivering results promptly, I prioritize efficient workflows and adaptability to meet project milestones.
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-3">How do you approach web development challenges?</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-3" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    I approach web development challenges with a strategic problem-solving mindset. By leveraging my in-depth coding expertise and staying current with the latest technologies and best practices, I address challenges head-on, ensuring robust, scalable, and efficient solutions.
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                    </div>
                    <!-- FAQ Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Frequently asked questions ====== -->

    <!-- ====== Blog Section ====== -->
    <!-- <section class="section-padding pb-70 blog-section bg-light"> -->
        <!-- <div class="container"> -->
            <!-- Section Title -->
            <!-- <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Blog Area</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div> -->
            <!-- //Section Title -->
            <!-- <div class="row"> -->
                <!-- Single Blog -->
                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="single-blog"> -->
                        <!-- <div class="blog-thumb" style="background-image: url(assets/images/blog/img-1.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- Single Blog -->
                <!-- Single Blog -->
                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-2.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Lifetime free Update</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div> -->
                <!-- </div> -->
                <!-- Single Blog -->
                <!-- Single Blog -->
                <!-- <div class="col-lg-4 col-md-6"> -->
                    <!-- <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-3.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Unlimited Support</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div> -->
                <!-- </div> -->
                <!-- Single Blog -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </section> -->
    <!-- ====== // Blog Section ====== -->


    <!-- ====== Testimonial Section ====== -->
    <section id="testimonial" class="section-padding bg-secondary testimonial-area">
        <div class="container bg-white">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Testimonial</h2>
                        <p>Discover what others say about our collaboration.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonials owl-carousel" data-ride="carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Exceptional service! The collaboration exceeded my expectations. The innovative solutions and attention to detail truly set them apart. A reliable partner for turning ideas into impactful realities. Highly recommended.</p>
                            <h4>Amanullah Khan<span>- client</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Outstanding experience! Their creativity and expertise shine through every project. From concept to delivery, the commitment to excellence is evident. A reliable and visionary team, I highly endorse their services.</p>
                            <h4>Roohan Ahmed <span>- Client</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Remarkable service! Their dedication to quality and innovation is impressive. Each project reflects their commitment to excellence. Collaborating with them has been a pleasure, and I highly commend their expertise and professionalism.</p>
                            <h4>Shehroz Khan <span>- Client</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Testimonial Section ====== -->

    <!-- ====== Team Section ====== -->
    <!-- <section class="section-padding pb-70 team-area"> -->
        <!-- <div class="container"> -->
            <!-- Section Title -->
            <!-- <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div> -->
            <!-- //Section Title -->
            <!-- <div class="row"> -->
                <!-- Single Team -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(assets/images/team/img-1.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div> -->
                <!-- // Single Team -->
                <!-- Single Team -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(assets/images/team/img-2.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div> -->
                <!-- // Single Team -->
                <!-- Single Team -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(assets/images/team/img-3.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div> -->
                <!-- // Single Team -->
                <!-- Single Team -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb" style="background-image: url(assets/images/team/img-4.jpg)">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div> -->
                <!-- // Single Team -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </section> -->
    <!-- ====== // Team Section ====== -->


  

    <!-- ====== Pricing Area ====== -->
    <!-- <section class="section-padding pb-70 pricing-area"> -->
        <!-- <div class="container"> -->
            <!-- Section Title -->
            <!-- <div class="row justify-content-center "> -->
                <!-- <div class="col-lg-6  "> -->
                    <!-- <div class="section-title text-center"> -->
                        <!-- <h2>Pricing Area</h2> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
            <!-- //Section Title -->
            <!-- <div class="row"> -->
                <!-- Single Price Box -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Basic</h2>
                            <h3>$99<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div> -->
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Premium</h2>
                            <h3>$119<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div> -->
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Enterprise</h2>
                            <h3>$559<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div> -->
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Business</h2>
                            <h3>$999<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div> -->
                <!-- // Single Price Box -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </section> -->
    <!-- ====== // Pricing Area ====== -->


    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Me</h2>
                        <p>Let's Connect! Reach out for collaboration and inquiries.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="" method="post" action="mail.php" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="submit" name="sendMessege">Send Message</button>
                            
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->


    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2024 Portfolio. All right reserved | <a href="#">Muhammad Zain</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->






     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
