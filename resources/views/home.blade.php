
@extends('layouts.master')
			@section('title','Home')
			@section('content')
<section class="banner-one">
            <div class="banner-one__carousel kidearn-owl__carousel owl-carousel kidearn-owl__carousel--with-shadow"
                    data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeInUp",
            "items": 1,
            "autoplay": true,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": false,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "dots": true,
            "margin": 0
            }'>
                <div class="item">
                    <div class="banner-one__item">
                        <div class="banner-one__bg"
                            style="background-image: url(assets/images/backgrounds/h1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner-one__content">
                                        <div class="banner-one__shape2"></div>
                                        <div class="banner-one__shape3"></div>
                                        <div class="banner-one__shape4">
                                            <img src="assets/images/shapes/banner-1-shape-2.png" alt="kidearn" />
                                        </div>
                                        <div class="banner-one__shape5">
                                            <div class="banner-one__shape5-inner"></div>
                                        </div>
                                        <div class="banner-one__shape6">
                                            <div class="banner-one__shape6-inner"></div>
                                        </div>
                                        <div class="banner-one__content__bg"></div>
                                        <h2 class="banner-one__content__title">Embrace<br> confidence<br> for a lifetime
                                        </h2>
                                        <a href="contact" class="kidearn-btn">
                                            <span>Book a Visit</span>
                                        </a>
                                        <div class="banner-one__shape1 kidearn-splax"
                                            style="background-image: url(assets/images/shapes/banner-1-shape-1.png);"
                                            data-para-options='{
									"orientation": "down",
									"scale": 1.9,
									"overflow": true
									}'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider-item -->
         <!--       <div class="item">-->
         <!--           <div class="banner-one__item">-->
         <!--               <div class="banner-one__bg"-->
         <!--                   style="background-image: url(assets/images/backgrounds/h2.jpg);"></div>-->
         <!--               <div class="container">-->
         <!--                   <div class="row">-->
         <!--                       <div class="col-lg-8">-->
         <!--                           <div class="banner-one__content">-->
         <!--                               <div class="banner-one__shape2"></div>-->
         <!--                               <div class="banner-one__shape3"></div>-->
         <!--                               <div class="banner-one__shape4">-->
         <!--                                   <img src="assets/images/shapes/banner-1-shape-2.png" alt="kidearn" />-->
         <!--                               </div>-->
         <!--                               <div class="banner-one__shape5">-->
         <!--                                   <div class="banner-one__shape5-inner"></div>-->
         <!--                               </div>-->
         <!--                               <div class="banner-one__shape6">-->
         <!--                                   <div class="banner-one__shape6-inner"></div>-->
         <!--                               </div>-->
         <!--                               <div class="banner-one__content__bg"></div>-->
         <!--                               <h2 class="banner-one__content__title">Embrace<br> confidence<br> for a lifetime-->
         <!--                               </h2>-->
         <!--                               <a href="contact" class="kidearn-btn">-->
         <!--                                   <span>Book a Visit</span>-->
         <!--                               </a>-->
         <!--                               <div class="banner-one__shape1 kidearn-splax"-->
         <!--                                   style="background-image: url(assets/images/shapes/banner-1-shape-1.png);"-->
         <!--                                   data-para-options='{-->
									<!--"orientation": "down",-->
									<!--"scale": 1.9,-->
									<!--"overflow": true-->
									<!--}'>-->
         <!--                               </div>-->
         <!--                           </div>-->
         <!--                       </div>-->
         <!--                   </div>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--       </div><!-- slider-item -->
                <div class="item">
                    <div class="banner-one__item">
                        <div class="banner-one__bg"
                            style="background-image: url(assets/images/backgrounds/h3.1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner-one__content">
                                        <div class="banner-one__shape2"></div>
                                        <div class="banner-one__shape3"></div>
                                        <div class="banner-one__shape4">
                                            <img src="assets/images/shapes/banner-1-shape-2.png" alt="kidearn" />
                                        </div>
                                        <div class="banner-one__shape5">
                                            <div class="banner-one__shape5-inner"></div>
                                        </div>
                                        <div class="banner-one__shape6">
                                            <div class="banner-one__shape6-inner"></div>
                                        </div>
                                        <div class="banner-one__content__bg"></div>
                                        <h2 class="banner-one__content__title">Embrace<br> confidence<br> for a lifetime
                                        </h2>
                                        <a href="contact.html" class="kidearn-btn">
                                            <span>Book a Visit</span>
                                        </a>
                                        <div class="banner-one__shape1 kidearn-splax"
                                            style="background-image: url(assets/images/shapes/banner-1-shape-1.png);"
                                            data-para-options='{
									"orientation": "down",
									"scale": 1.9,
									"overflow": true
									}'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider-item -->
            </div>
        </section>



        <section class="service-one">
            <div class="service-one__bg kidearn-splax" data-para-options='{
            "orientation": "up",
            "scale": 1.5,
            "overflow": true
            }'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 907 1117">
                    <path
                        d="M439.501 191.327C423.886 151.14 410.535 109.849 382.57 77.9193C364.573 57.2762 341.374 41.7837 316.691 29.9082C236.778 -8.54921 138.559 -8.863 55.8975 29.1363C-51.0518 78.3338 -92.2344 163.545 -124.062 267.647C-143.11 329.787 -172.464 389.023 -210.558 442.132C-241.37 485.071 -277.675 523.792 -309.262 566.153C-385.567 668.623 -459.365 778.565 -447.139 909.755C-441 975.319 -411.153 1039.68 -358.421 1077.45C-302.12 1117.73 -226.363 1123.79 -157.143 1109.58C-80.7379 1093.81 -14.8795 1049.94 58.6369 1028.82C138.638 1005.83 219.542 986.431 302.449 984.77C375.471 983.366 447.609 995.327 520.506 996.491C607.015 997.912 707.478 996.781 778.299 938.335C866.23 865.769 917.15 748.337 904.558 637.081C892.88 533.28 826.934 445.335 735.138 400.543C640.645 354.434 520.235 343.915 463.394 243.984C453.944 227.261 446.473 209.395 439.501 191.327Z" />
                </svg>
            </div>
            <div class="service-one__shape kidearn-splax"
                style="background-image: url(assets/images/shapes/about-bg-shape-1.png);" data-para-options='{
            "orientation": "left",
            "scale": 1.5,
            "overflow": true
            }'></div>
            <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">Specialities</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Our passion is childhood,<br> and we’re in kindergarten
                </h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item" style="--accent-color: #75C137;">
                            <div class="service-one__item__image-wrapper">
                                <div class="service-one__item__image kidearn-tilt"
                                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                    <img src="assets/images/resources/sh1.jpg" alt="kidearn" />
                                </div>
                                <div class="service-one__item__ball"></div>
                            </div>
                            <h4 class="service-one__item__title">Air Purified Class Rooms with A/C</h4>
                        </div>
                    </div><!-- /.service-item -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-one__item service-one__item--order" style="--accent-color: #26A6A1;">
                            <div class="service-one__item__image-wrapper">
                                <div class="service-one__item__image kidearn-tilt"
                                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                    <img src="assets/images/resources/sh2.jpg" alt="kidearn" />
                                </div>
                                <div class="service-one__item__ball"></div>
                            </div>
                            <h4 class="service-one__item__title">High Safe and Eco-Friendly Environment</h4>
                        </div>
                    </div><!-- /.service-item -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-one__item" style="--accent-color: #F25334;">
                            <div class="service-one__item__image-wrapper">
                                <div class="service-one__item__image kidearn-tilt"
                                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                    <img src="assets/images/resources/sh3.jpg" alt="kidearn" />
                                </div>
                                <div class="service-one__item__ball"></div>
                            </div>
                            <h4 class="service-one__item__title">Child Safe Infrastructure</h4>
                        </div>
                    </div><!-- /.service-item -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="service-one__item service-one__item--order" style="--accent-color: #FFAA23;">
                            <div class="service-one__item__image-wrapper">
                                <div class="service-one__item__image kidearn-tilt"
                                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                    <img src="assets/images/resources/sh4.jpg" alt="kidearn" />
                                </div>
                                <div class="service-one__item__ball"></div>
                            </div>
                            <h4 class="service-one__item__title">Security and Individual Attention</h4>
                        </div>
                  
                    </div><!-- /.service-item -->
                    <div class="text-center mt-5">
                    <a href="specialities" class="kidearn-btn ">
                                <span>Explore More</span>
                            </a>
                    </div>
                 
                </div>
            
            </div>
           
        </section>

        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline">About Us</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Beginning of the Success with us
                                </h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                            <b>HASSAN EDUCATIONAL INSTITUTION</b> for privileged learning is functioning under the auspices of <b>HASSAN EDUCATION ENVIRONMENT AND HEALTH FOUNDATION -THE PUBLIC RELIGIOUS TRUST</b>, Reg. No TN-229/2019 (which provides quality education in the various fields) with the noble vision of “Setting Standards in Teaching and Training” since 2016, A.S.M.I. Global Pre-School a division of HASSAN EDUCATIONAL INSTITUTION....
                            </p>
                            <a href="about" class="kidearn-btn">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-one__image">
                            <div class="about-one__image__one kidearn-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                                <img src="assets/images/resources/about-home-2.jpg" alt="kidearn" />
                            </div>
                            <div class="about-one__image__border wow fadeInUp" data-wow-delay="200ms">
                                <img src="assets/images/shapes/about-1-border.jpg" alt="kidearn" />
                            </div>
                            <div class="about-one__image__leaf kidearn-splax" data-para-options='{
						"orientation": "left",
						"scale": 1.5,
						"overflow": true
						}'>
                                <img src="assets/images/shapes/about-1-leaf.png" alt="kidearn" />
                            </div>
                            <div class="about-one__image__ball wow fadeInUp" data-wow-delay="100ms"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-one">
            <div class="testimonial-one__pen kidearn-splax" data-para-options='{
            "orientation": "left",
            "scale": 2.5,
            "overflow": true
            }'>
                <img src="assets/images/shapes/pen.png" alt="kidearn" />
            </div>
            <div class="container">
                <div class="testimonial-one__area">
                    <div class="testimonial-one__bg"></div>
                    <div class="testimonial-one__bg-shape kidearn-splax"
                        style="background-image: url(assets/images/shapes/testimonial-shape-1.png);" data-para-options='{
				"orientation": "down",
				"scale": 1.5,
				"delay": ".3",
				"transition": "cubic-bezier(0,0,0,1)",
				"overflow": true
				}'>
                    </div>
                    <div class="testimonial-one__star-left"><img src="assets/images/shapes/star1.png" alt="kidearn" />
                    </div>
                    <div class="testimonial-one__star-right"><img src="assets/images/shapes/star2.png" alt="kidearn" />
                    </div>
                
                    <div class="testimonial-one__carousel kidearn-owl__carousel owl-carousel owl-theme"
                        data-owl-options='{
				"items": 1,
				"margin": 0,
				"loop": true,
				"smartSpeed": 700,
				"nav": true,
				"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
				"dots": false,
				"autoplay": false
				}'>

                <div class="item">
                            <div class="testimonial-one__item">
                            <div class="sec-title text-center">


                            <h3 class="sec-title__title">CURRICULUM</h3>
                            <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                                <div class="testimonial-one__item__quote">
                                <p>The aim of OXFORD ADVANTAGE INTEGRATED LEARNING SOLUTIONS PROGRAMME is not to be a ‘crèche’, It is positioned as a fun-filled dream house wherever children unleash their imagination and discover themselves at their own pace.</p>
                                <p>      Ultimately, OXFORD ADVANTAGE INTEGRATED LEARNING SOLUTIONS PROGRAMME is all about building the three C’s in children:</p>

                              
                                    <span class="me-3 c3">•	CREATIVITY</span>
                                    <span class="me-3 c3">•	CHARACTER</span>
                                   <span class="c3"> •	CONFIDENCE</span> 

                                </div> 
                            
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-one__item">
                            <div class="sec-title text-center">


                            <h3 class="sec-title__title">ACTIVITIES</h3>
                            <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                                <div class="testimonial-one__item__quote">
                                <p>Overall development is very necessary for individual kids now a day like Dance, Jewel making, greeting card making, Coconut shell crafts, Mat work, Art, Bottle and Glass Painting, Decoration, Physical abilities, Linguistic speech, Photo frames, Origami, Memory game, Embroidery work, Brainy activity, Ice stick craft etc.</p>
                                

                                </div> 
                            
                            </div>
                        </div>
                     
                       
                    </div>
                </div>
            </div>
        </section>

        <section class="video-one">
                    <div class="video-one__bg"></div>
                        <div class="video-one__bg-shape1 kidearn-splax" data-para-options='{"orientation": "down", "scale": 1.9, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                    '><img src="assets/images/shapes/video-shape-1.png" alt="kidearn" />
                    </div>
                        <div class="video-one__bg-shape2 kidearn-splax" data-para-options='{"orientation": "up", "scale": 1.7, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                    }'><img src="assets/images/shapes/video-shape-2.png" alt="kidearn" />
                    </div>
                    <div class="video-one__bg-shape3 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.8, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                }'><img src="assets/images/shapes/video-shape-3.png" alt="kidearn" />
                    </div>
                    <div class="video-one__bg-shape4 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.6, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                }'><img src="assets/images/shapes/video-shape-4.png" alt="kidearn" />
                    </div>
                    <div class="video-one__bg-shape5 kidearn-splax" data-para-options='{"orientation": "left", "scale": 1.6, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                }'><img src="assets/images/shapes/video-shape-5.png" alt="kidearn" />
                    </div>
                    <div class="video-one__bg-shape6 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.7, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
                }'><img src="assets/images/shapes/video-shape-6.png" alt="kidearn" />
                    </div>
                    <div class="video-one__bg-shape7 kidearn-splax" data-para-options='{"orientation": "left", "scale": 1.3, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
            }'><img src="assets/images/shapes/video-shape-7.png" alt="kidearn" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-center">
                            <div class="video-one__content">
                                <h3 class="video-one__content__title">Let’s discover the best campus through a video tour
                                </h3>
                                <a href="contact" class="kidearn-btn">
                                    <span>Visit Now</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="video-one__btn-shape">
                                <div class="video-one__btn">
                                    <img src="assets/images/gallery/g77.jpg" alt="kidearn" />
                                    <a href="https://www.facebook.com/100012212112701/videos/6145197788923754/" class="video-popup" target="_blank">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="program-one">
            <div class="program-one__bg kidearn-splax" data-para-options='{
            "orientation": "up",
            "scale": 2.5,
            "overflow": true
            }'>
                    <img src="assets/images/shapes/program-bg-shape.png" alt="kidearn" />
            </div>
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">Our Programs</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">We meet kids at their level<br> regardless of their age</h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="program-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                            style='--accent-color: #F25334;'>
                            <div class="program-one__item__shape">
                                <svg class="program-one__item__shape-one" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 43">
                                    <path
                                        d="M11.0817 6.98831C-9.7901 23.3302 2.35379 52.1177 18.5511 39.5735C34.7647 27.0458 39.1287 -14.9434 11.0817 6.98831Z" />
                                </svg>
                                <svg class="program-one__item__shape-two" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15 21">
                                    <path
                                        d="M5.28824 3.20713C-4.67276 11.0063 1.12287 24.745 8.85298 18.7583C16.5909 12.7795 18.6736 -7.25972 5.28824 3.20713Z" />
                                </svg>
                            </div>
                            <div class="program-one__item__bg"></div>
                            <div class="program-one__item__image">
                                <img src="assets/images/program/pro1.jpg" alt="Toddler">
                            </div><!-- /.program-one__item__image -->
                            <div class="program-one__item__content">
                                <h3 class="program-one__item__title"><a href="pro-det">Play School</a></h3>
                                <!-- /.program-one__item__title -->
                                <div class="program-one__item__age">(1.6 to 2.3 years)</div><!-- /.program-one__item__age -->
                                <p class="program-one__item__text">At A.S.M.I Global Pre School most children love the play school more than playgrounds. </p>
                                <!-- /.program-one__item__text -->
                                <a class="program-one__item__rm" href="playschool"><span
                                        class="icon-right-arrow"></span></a><!-- /.program-one__item__text -->
                            </div><!-- /.program-one__item__content -->
                        </div><!-- /.program-one__item__one -->
                    </div><!-- /.program-item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="program-one__item program-one__item--order wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='100ms' style='--accent-color: #75C137;'>
                            <div class="program-one__item__shape">
                                <svg class="program-one__item__shape-one" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 43">
                                    <path
                                        d="M11.0817 6.98831C-9.7901 23.3302 2.35379 52.1177 18.5511 39.5735C34.7647 27.0458 39.1287 -14.9434 11.0817 6.98831Z" />
                                </svg>
                                <svg class="program-one__item__shape-two" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15 21">
                                    <path
                                        d="M5.28824 3.20713C-4.67276 11.0063 1.12287 24.745 8.85298 18.7583C16.5909 12.7795 18.6736 -7.25972 5.28824 3.20713Z" />
                                </svg>
                            </div>
                            <div class="program-one__item__bg"></div>
                            <div class="program-one__item__image">
                                <img src="assets/images/program/pro2.jpg" alt="Preschool">
                            </div><!-- /.program-one__item__image -->
                            <div class="program-one__item__content">
                                <h3 class="program-one__item__title"><a href="preeschool">Preschool</a>
                                </h3><!-- /.program-one__item__title -->
                                <div class="program-one__item__age">(2.6 to 3.5 years)</div><!-- /.program-one__item__age -->
                                <p class="program-one__item__text">This is a crucial age where children start preparing for school. The best part of this is, at Aathichudi, we never educate by force. </p>
                                <!-- /.program-one__item__text -->
                                <a class="program-one__item__rm" href="preeschool"><span
                                        class="icon-right-arrow"></span></a><!-- /.program-one__item__text -->
                            </div><!-- /.program-one__item__content -->
                        </div><!-- /.program-one__item__one -->
                    </div><!-- /.program-item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="program-one__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'
                            style='--accent-color: #2390FF;'>
                            <div class="program-one__item__shape">
                                <svg class="program-one__item__shape-one" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 43">
                                    <path
                                        d="M11.0817 6.98831C-9.7901 23.3302 2.35379 52.1177 18.5511 39.5735C34.7647 27.0458 39.1287 -14.9434 11.0817 6.98831Z" />
                                </svg>
                                <svg class="program-one__item__shape-two" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15 21">
                                    <path
                                        d="M5.28824 3.20713C-4.67276 11.0063 1.12287 24.745 8.85298 18.7583C16.5909 12.7795 18.6736 -7.25972 5.28824 3.20713Z" />
                                </svg>
                            </div>
                            <div class="program-one__item__bg"></div>
                            <div class="program-one__item__image">
                                <img src="assets/images/program/pro3.jpg" alt="Kindergarten">
                            </div><!-- /.program-one__item__image -->
                            <div class="program-one__item__content">
                                <h3 class="program-one__item__title"><a
                                        href="juniorkids">Junior Kids </a></h3>
                                <!-- /.program-one__item__title -->
                                <div class="program-one__item__age">(3.6 to 4.5 years)</div><!-- /.program-one__item__age -->
                                <p class="program-one__item__text">This is quite a crucial phase of children’s education. At this age, they master what they observe and learn. </p>
                                <!-- /.program-one__item__text -->
                                <a class="program-one__item__rm" href="juniorkids"><span
                                        class="icon-right-arrow"></span></a><!-- /.program-one__item__text -->
                            </div><!-- /.program-one__item__content -->
                        </div><!-- /.program-one__item__one -->
                    </div><!-- /.program-item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="program-one__item program-one__item--order wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='300ms' style='--accent-color: #FFAA23;'>
                            <div class="program-one__item__shape">
                                <svg class="program-one__item__shape-one" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 32 43">
                                    <path
                                        d="M11.0817 6.98831C-9.7901 23.3302 2.35379 52.1177 18.5511 39.5735C34.7647 27.0458 39.1287 -14.9434 11.0817 6.98831Z" />
                                </svg>
                                <svg class="program-one__item__shape-two" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15 21">
                                    <path
                                        d="M5.28824 3.20713C-4.67276 11.0063 1.12287 24.745 8.85298 18.7583C16.5909 12.7795 18.6736 -7.25972 5.28824 3.20713Z" />
                                </svg>
                            </div>
                            <div class="program-one__item__bg"></div>
                            <div class="program-one__item__image">
                                <img src="assets/images/program/pro4.jpg" alt="Flex-care">
                            </div><!-- /.program-one__item__image -->
                            <div class="program-one__item__content">
                                <h3 class="program-one__item__title"><a href="seniorkids">Senior Kids</a>
                                </h3><!-- /.program-one__item__title -->
                                <div class="program-one__item__age">(4.6 to 5.5 years)</div><!-- /.program-one__item__age -->
                                <p class="program-one__item__text">The concepts and learning methods get a little deeper at this stage.</p>
                                <!-- /.program-one__item__text -->
                                <a class="program-one__item__rm" href="seniorkids"><span
                                        class="icon-right-arrow"></span></a><!-- /.program-one__item__text -->
                            </div><!-- /.program-one__item__content -->
                        </div><!-- /.program-one__item__one -->
                    </div><!-- /.program-item -->
                </div>
            </div>
        </section>
        
        <section class="cta-one cta-one--about-page">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__shape1 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        		}'>
                        <img src="assets/images/shapes/cta-shape-1.png" alt="kidearn" />
                    </div>
                    <div class="cta-one__shape2 kidearn-splax" data-para-options='{"orientation": "down", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        		}'>
                        <img src="assets/images/shapes/cta-shape-2.png" alt="kidearn" />
                    </div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="cta-one__content">
                                <h3 class="cta-one__title">How to enroll your child in a class?</h3><!-- /.cta-one__title -->
                                <a href="/" class="kidearn-btn"><span>Visit Now</span></a>
                            </div><!-- /.cta-one__content -->
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-one__one wow fadeInUp" data-wow-delay="300ms">
                                <img src="assets/images/resources/cta-1.png" alt="kidearn" />
                                <div class="cta-one__one__text">All in<br> One</div>
                            </div>
                            <div class="cta-one__thumb">
                                <div class="cta-one__thumb__two"><img src="assets/images/shapes/cta-2.png" alt="kidearn" /></div>
                            </div><!-- /.cta-one__thumb -->
                        </div>
                    </div>
                </div><!-- /.cta-one__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.cta-one -->


    
        <!-- /.blog-three -->
        @endsection
