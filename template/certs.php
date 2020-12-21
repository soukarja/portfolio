<?php

$data=[
    ["IICDC Quaterfinalist", "Innovation Challenge", "achievement", "certs/iicdc2019_Certificate_quali.png"],
    ["MLH Winner", "The Best Submission", "achievement", "certs/mlh19_winner.png"],
    ["Google Digital Marketing", "Certification", "learn", "certs/Google_Digital_unlocked_certificate.png"],
    ["IICDC Participation", "Innovation Challenge", "part", "certs/iicdc_participation.png"],
    ["Microsoft Student Partner", "Microsoft Workshop", "learn", "certs/microsoft_cert.png"]
];
// foreach ($data as $a)
// {
//     echo $a[0];
// }

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <!--Portfolio CSS-->
    <link rel="stylesheet" type="text/css" href="css/mixitup.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <!--Icons CSS-->
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--Particles CSS-->
    <link rel="stylesheet" type="text/css" href="css/particles.css">
</head>

<body>

    

 <!--Start Body Wrap-->
 <div id="body-wrapper">
    <!--Start Header-->


<!-- Portfolio Section -->
<section id="portfolios" class="bg-gray default-padding">
  <!-- Container Starts -->
  <div class="container">
    <!--Start Heading-->
    <div class="row">
        <div class="col-12">
            <div class="heading text-center">
                <h2 class="p-color">CERTIFICATIONS</h2>
                <p>Cool. Isn't it?</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter=".achievement, .learn, .part">All</span></li>
            <li><span class="filter" data-filter=".achievement">Achievements</span></li>
            <li><span class="filter" data-filter=".learn">Learning</span></li>
            <li><span class="filter" data-filter=".part">Participation</span></li>
            <!--<li><span class="filter" data-filter=".web">Web</span></li>-->
        </ul>
    </div>
    <!--End Heading-->
    <div id="portfoliolist1">

    <?php

    foreach ($data as $a)
    {
        echo "<div class='portfolio1 $a[2]' data-cat='$a[2]'>
        <div class='portfolio-wrapper1'>             
            <img src='$a[3]' alt='' />
            <div class='label'>
                <div class='label-text'>
                    <a class='text-title'>$a[0]</a>
                    <span class='text-category'>$a[1]</span>
                </div>
                <div class='label-bg'></div>
            </div>
        </div>
    </div>              
";
    }


?>





<!--     
        <div class="portfolio1 achievement" data-cat="achievement">
            <div class="portfolio-wrapper1">             
                <img src="certs/iicdc2019_Certificate_quali.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">IICDC Quaterfinalist</a>
                        <span class="text-category">Innovation Challenge</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>              

        <div class="col-12 col-lg-4 portfolio1 achievement" data-cat="achievement">
            <div class="portfolio-wrapper1">         
                <img src="certs/mlh19_winner.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">MLH Winner</a>
                        <span class="text-category">The Best Submission</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>      

        <div class="col-12 col-lg-4 portfolio1 learn" data-cat="learn">
            <div class="portfolio-wrapper1">         
                <img src="certs/Google_Digital_unlocked_certificate.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Google Digital Marketing</a>
                        <span class="text-category">Certification</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">                     
                <img src="certs/iicdc_participation.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">IICDC Participation</a>
                        <span class="text-category">Innovation Challenge</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>     
        
        <div class="col-12 col-lg-4 portfolio1 learn" data-cat="learn">
            <div class="portfolio-wrapper1">         
                <img src="certs/microsoft_cert.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Microsoft Student Partner</a>
                        <span class="text-category">Microsoft Workshop</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/CapgeminiTechchallengecoding.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Capgemini Coding</a>
                        <span class="text-category">Contest</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">
                <img src="certs/codechef_coding_workshop.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Codechef Coding</a>
                        <span class="text-category">Competitive Coding Workshop</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>          

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/CapgeminiTechchallengePenTesting.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Capgemini Penetration Testing</a>
                        <span class="text-category">Contest</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/KW_-240-1.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">IIT Kharagpur Robotics</a>
                        <span class="text-category">KSHITIJ 2020</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  


        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/welfare1.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Social Welfare</a>
                        <span class="text-category">Participation for a Cause</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  



        <div class="col-12 col-lg-4 portfolio1 learn" data-cat="learn">
            <div class="portfolio-wrapper1">         
                <img src="certs/udemy/ethhacking.jpg" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Ethical Hacking</a>
                        <span class="text-category">Course</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  


        <div class="col-12 col-lg-4 portfolio1 learn" data-cat="learn">
            <div class="portfolio-wrapper1">         
                <img src="certs/udemy/photoshop.jpg" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Adobe Photoshop</a>
                        <span class="text-category">Course</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  



        <div class="col-12 col-lg-4 portfolio1 learn" data-cat="learn">
            <div class="portfolio-wrapper1">         
                <img src="certs/udemy/robotics.jpg" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Robotics</a>
                        <span class="text-category">Course</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  

        

        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/poster_uemk.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Poster Making</a>
                        <span class="text-category">Competition</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  


        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/project_uemk.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Project Making</a>
                        <span class="text-category">Competition</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>  


        <div class="col-12 col-lg-4 portfolio1 part" data-cat="part">
            <div class="portfolio-wrapper1">         
                <img src="certs/mlh19_attendee.png" alt="" />
                <div class="label">
                    <div class="label-text">
                        <a class="text-title">Major Hacking League</a>
                        <span class="text-category">MLH Workshop</span>
                    </div>
                    <div class="label-bg"></div>
                </div>
            </div>
        </div>   -->


        <!-- mix it up js -->
        

    </div>

</div>
<!-- Container Ends -->
</section>
<!-- Portfolio Section Ends --> 


<!--End Footer-->
</div>
<!--End Body Wrap-->

<!--jQuery JS-->
<script src="js/jquery-1.12.0.min.js"></script>
<!--Custom Google Map JS-->
<script src="js/map-scripts.js"></script>
<!--Slick Js-->
<script src="js/slick.min.js"></script>
<!--Counter JS-->
<script src="js/waypoints.js"></script>
<script src="js/counterup.min.js"></script>
<!--Particles custom JS-->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<!--Bootstrap JS-->
<script src="js/bootstrap.min.js"></script>
<!--Magnic PopUp JS-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--Owl Carousel JS-->
<script src="js/owl.carousel.min.js"></script>
<!--Mixitup JS-->
<script src="js/jquery.mixitup.min.js"></script>
<!--Jquery Easing Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<!--Scrolly JS-->
<script src="js/scrolly.js"></script>
<!--Ajax Contact JS-->
<script src="js/ajax-contact-form.js"></script>
<!--Icon JS-->
<script src="js/ionicons.js"></script>
<!--Main JS-->
<script src="js/custom.js"></script>

</body>

</html>
