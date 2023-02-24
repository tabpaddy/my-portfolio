<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- unicorn codes -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- swiper css -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- css -->
    <link rel="stylesheet" href="asset/styles/main.css">

    <title>Praise Portfolio website</title>
</head>
<body>
    <!-- ###### header ##### -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Praise</a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i>Home
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="uil uil-user nav_icon"></i>About
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="uil uil-file-alt nav_icon"></i>Skills
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="uil uil-briefcase-alt nav_icon"></i>Services
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i>Portfolio
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#contact" class="nav_link ">
                            <i class="uil uil-message nav_icon"></i>Contact me
                        </a>
                    </li>
                </ul>
               
                <i class="uil uil-times nav_close" id="nav-close"></i>
            </div>

            

            <div class="nav_btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>





                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>

            
        </nav>
    </header>

    <!-- main -->
    <main class="main">
        <!-- home -->

        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://www.linkedin.com/in/taborota-praise-180191241" target="_blank" class="home_social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>

                        <a href="https://www.twitter.com/@_ptaborota" target="_blank" class="home_social-icon">
                            <i class="uil uil-twitter-alt"></i>
                        </a>

                        <a href="https://github.com/tabpaddy" target="_blank" class="home_social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>


                                <image class="home_blob-img" x="-2" y="-1" xlink:href="asset/images/shot.png"/>
                            </g>
                        </svg>
                        
                    </div>

                    <div class="home_data">
                        <h1 class="home_title">
                            Hi, I'am praise
                        </h1>
                        <h3 class="home_subtitle">Full stack developer</h3>
                        <p class="home_description">
                            High level experience in web design and development knowledge, producing quality work.
                        </p>
                        <a href="#contact" class="button button_flex">
                            Contact me <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button_flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="about section" id="about">
            <h2 class="section_title">About me</h2>
            <span class="section_subtitle">My Introduction</span>

            <div class="about_container container grid">
                <img src="asset/images/shot2.png" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description">
                        Web developer, with extensive knowledge and years of experience, working in web technologies and the backends design, delivering quality work.
                    </p>

                    <div class="about_info">
                        <div>
                            <span class="about_info-title">
                                04+
                            </span>
                            <span class="about_info-name">Years <br> experience</span>
                        </div>
                        
                        <div>
                            <span class="about_info-title">
                                10+
                            </span>
                            <span class="about_info-name">Completed <br> project</span>
                        </div>

                        <div>
                            <span class="about_info-title">
                                02+
                            </span>
                            <span class="about_info-name">Companies <br> worked</span>
                        </div>

                    </div>

                    <div class="about_buttons">
                        <a download="" href="asset/pdf/Text Portfolio Alexa.rar" class="button button_flex">
                            Download CV <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- skills -->

        <section class="skills section" id="skills">
            <h2 class="section_title">Skills</h2>
            <span class="section_subtitle">My technical level</span>


            <div class="skills_container container grid">
            
                    <!-- skills 1 -->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Frontend developer</h1>
                                <span class="skills_subtitle">More than 3 years</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>

                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        HTML
                                    </h3>
                                    <span class="skills_number">92%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        CSS
                                    </h3>
                                    <span class="skills_number">80%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        JAVASCRIPT
                                    </h3>
                                    <span class="skills_number">70%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        React
                                    </h3>
                                    <span class="skills_number">70%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_react"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- skills 2 -->
                    <div class="skills_content skills_close">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Backend developer</h1>
                                <span class="skills_subtitle">1/half year now</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>

                        <div class="skills_list grid">

                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        PHP
                                    </h3>
                                    <span class="skills_number">80%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_title">
                                    <h3 class="skills_name">
                                        SQL
                                    </h3>
                                    <span class="skills_number">90%</span>
                                </div>

                                <div class="skills_bar">
                                    <span class="skills_percentage skills_sql"></span>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    
                
            </div>
        </section>

        <!-- qualifications -->

        <section class="qualification section">
            <h2 class="section_title">
                Qualification
            </h2>
            <span class="section_subtitle">My personal journey</span>

            <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualification_button button_flex" data-target="#education">
                        <i class="uil uil-graduation-cap qualification_icon"></i>
                        Education
                    </div>

                    <div class="qualification_button button_flex" data-target="#work">
                        <i class="uil uil-graduation-cap qualification_icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification_sections">
                    <!-- qualifications content1 -->
                    <div class="qualification_content qualification_active" data-content id="education">
                        <!-- qualifications 1 -->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Computer Science</h3>
                                <span class="qualification_subtitle">Bayelsa - University</span>
                                <div class="qualification_calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - Till Date
                                </div>
                            </div>

                            <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                            </div>

                        </div>

                        <!-- qualifications 2 -->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">Web development (Frontend)</h3>
                                <span class="qualification_subtitle">online course</span>
                                <div class="qualification_calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - 2022
                                </div>
                            </div>

                            

                        </div>

                        <!-- qualifications 3 -->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Web development (Backend)</h3>
                                <span class="qualification_subtitle">online course</span>
                                <div class="qualification_calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - Till Date
                                </div>
                            </div>

                            <div>
                            <span class="qualification_rounder"></span>
                            <!-- <span class="qualification_line"></span> -->
                            </div>

                        </div>

                        
                    </div>

                    <!-- qualifications content2 -->
                    <div class="qualification_content" data-content id="work">
                        <!-- qualifications 1 -->
                        <div class="qualification_data">

                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">Frontend development</h3>
                                <span class="qualification_subtitle">Bio-hub - Bayelsa</span>
                                <div class="qualification_calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2022
                                </div>
                            </div>

                            

                        </div>

                        <!-- qualifications 2 -->
                        <div class="qualification_data">

                            

                            

                            <div>
                                <h3 class="qualification_title">Fullstack development</h3>
                                <span class="qualification_subtitle">aptech institute - Delta</span>
                                <div class="qualification_calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <!-- <span class="qualification_line"></span> -->
                            </div>

                        </div>

                      

                        
                    </div>
                </div>


            </div>
        </section>

        <!-- service -->
        <section class="service section" id="services">
            <h2 class="section_title">Service</h2>
            <span class="section_subtitle">What i offer</span>


            <div class="service_container container grid">
                <!-- service1  -->
                <div class="service_content">
                    <div>
                        <i class="uil uil-arrow service_icon"></i>
                        <h3 class="service_title">Frontend <br> developer</h3>
                    </div>

                    <span class="button button_flex button_small button_link services_button">
                        view more
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="service_modals">
                        <div class="service_modal-content">
                            <h4 class="service_modal-title">Frontend <br> developer</h4>
                            <i class="uil uil-times service_modal-close"></i>

                            <ul class="service_modal-services grid">
                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I develop the user interface.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I ensure the websites look good and function properly.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I understand ux element interaction.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Being able to manage time and prioritize.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- service2  -->
                <div class="service_content">
                    <div>
                        <i class="uil uil-server-network service_icon"></i>
                        <h3 class="service_title">Backend <br> developer</h3>
                    </div>

                    <span class="button button_flex button_small button_link services_button">
                        view more
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="service_modals">
                        <div class="service_modal-content">
                            <h4 class="service_modal-title">Backend <br> developer</h4>
                            <i class="uil uil-times service_modal-close"></i>

                            <ul class="service_modal-services grid">
                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I develop the user interface.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I ensure the websites look good and function properly.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>I understand and manage the database.</p>
                                </li>

                                <li class="service_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Being able to manage time and prioritize.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- portfolio -->
        <section class="portfolio section" id="portfolio">
            <h2 class="section_title">Portfolio</h2>
            <span class="section_subtitle">Most recent work</span>




            <div class="portfolio_container container swiper ">
                <div class="swiper-wrapper">   
                <!-- portfolio 1 -->
                    <div class="portfolio_content grid image swiper-slide">
                        <img src="asset/images/portshot3.png" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">FullStack Modern Traveling Website</h3>
                            <p class="portfolio_description">Website adaptable to all devices, with ui components and animated interactions.</p>
                            <a href="#" class="button button_flex button_small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!-- portfolio 2 -->
                    <div class="portfolio_content grid image swiper-slide">
                        <img src="asset/images/portshot2.png" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Modern Computable Website</h3>
                            <p class="portfolio_description">Website adaptable to all devices, with ui components and animated interactions.</p>
                            <a href="#" class="button button_flex button_small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!-- portfolio 3 -->
                    <div class="portfolio_content grid image swiper-slide">
                        <img src="asset/images/portshot1.png" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Modern Website</h3>
                            <p class="portfolio_description">Website adaptable to all devices and is a landing page with ui components and animated interactions.</p>
                            <a href="#" class="button button_flex button_small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper_portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper_portfolio-icon"></i>
                </div>

                <div class="swiper-pagination "></div>
            </div>

        </section>


        <!-- project in mind -->
        <section class="project section" id="contact">
            <div class="project_bg">
                <div class="project_container container grid">
                    <div class="project_data">
                        <h2 class="project_title">You have a new project</h2>
                        <p class="project_description">Contact me now and get a 30% discount on your new project.</p>
                        <a href="#contact" class="button button_flex button_white">
                            Contact me
                            <i class="uil uil-message project_icon button_icon"></i>
                        </a>
                    </div>

                    <img src="asset/images/shot6.png" alt="" class="project_img">
                </div>
            </div>
        </section>

        <!-- testimonial -->
        <section class="testimonial section">
            <h2 class="section_title">Testimonial</h2>
            <span class="section_subtitle">My client saying</span>

            <div class="testimonial_container container swiper">
                <div class="swiper-wrapper">
                    <!-- testimonial 1 -->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="asset/images/testimonial1.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Sara Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>                              
                            </div>
                        </div>

                        <p class="testimonial_description">I get a good impression, I carry out my project with all the possible quality and attention and support 24 hours a day.</p>
                    </div>

                    <!-- testimonial 2 -->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="asset/images/testimonial2.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Engr Robinson</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>                              
                            </div>
                        </div>

                        <p class="testimonial_description">I get a good impression, I carry out my project with all the possible quality and attention and support 24 hours a day.</p>
                    </div>

                    <!-- testimonial 3 -->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="asset/images/testimonial3.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Peter samuel</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>                              
                            </div>
                        </div>

                        <p class="testimonial_description">I get a good impression, I carry out my project with all the possible quality and attention and support 24 hours a day.</p>
                    </div>
                </div>

                <div class="swiper-pagination swiper_pagination-testimonial"></div>
            </div>
        </section>

        <!-- contact me -->
        <section class="contact section" id="contact">
            <h2 class="section_title">Contact me</h2>
            <span class="section_subtitle">Get in touch</span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call me</h3>
                            <span class="contact_subtitle">09066605427</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">taborotap@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Nigeria - Asaba</span>
                        </div>
                    </div>
                </div>

                <form action="book.php" method="post" class="contact_form grid port_form">
                    <div class="contact_input grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">
                                Name
                            </label>
                            <input type="text" class="contact_input"  name="name">
                        </div>
                    </div>

                    <div class="contact_input grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">
                                Email
                            </label>
                            <input type="email" class="contact_input" required name="email">
                        </div>
                    </div>

                    <div class="contact_input grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">
                                Project
                            </label>
                            <input type="text" class="contact_input" name="project">
                        </div>
                    </div>

                    <div class="contact_input grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">
                                Message
                            </label>
                            <textarea cols="0" rows="7" class="contact_input" name="message"></textarea>
                        </div>
                    </div>
                        
                    <div>
                        <button class="button button_flex" name="send" type="submit" >
                            Send Message
                            <i class="uil uil-message button_icon"></i>
                        </button>

                    </div>
                </form>
            </div>
        </section>

    </main>

    <!-- footer -->

    <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Praise</h1>
                    <span class="footer_subtitle">Fullstack developer</span>
                </div>

                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>

                    <li>
                        <a href="#contact" class="footer_link">Contactme</a>
                    </li>
                </ul>

                <div class="footer_socials">
                    <a href="https://wa.me/09066605427" target="_blank" class="footer_social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>

                    <a href="https://www.snapchat.com/add/praise_taborta?share_id=Njk2MTE5RTQtNDJGMy00OUVDLTk2MTgtQUNGMDFEMzQ1ODJC&locale=en_AU" target="_blank" class="footer_social">
                        <i class="uil uil-snapchat-alt"></i>
                    </a>

                    <a href="https://ig.me/m/dblaqpanta" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>

            <p class="footer_copy">
                &#169; Praise Taborota. All right reserved
            </p>
        </div>
    </footer>

    <!-- scroll top -->
    <a href="#" class="scrollUp" id="scroll-up">
        <i class="uil uil-arrow-up scrollUp_icon"></i>
    </a>





    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- main js -->
    <script src="asset/js/app.js"></script>
</body>
</html>