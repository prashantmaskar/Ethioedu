<!DOCTYPE html>
<html lang="en">     
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />

    <head>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />

    </head>
    <body>
        <div class="header-top grey darken-3 ">

            <div class="row">
                <div class="col s12 ">
                    <ul class="top-nav">
                        <li><a href="#">INFO@ETHIOEDU.COM</a></li>


                        <li><a href="#">CONTACT/HOTLINE</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">REGISTER </a></li>
                        <li><a href="#">LOGIN</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="header-top1 grey darken-4 ">

            <div class="row">
                <div class="col s3 ">
                    <img class="logo_bar" src="<?php echo base_url() . 'images/logo.png' ?>">
                </div>
                <div class="col s9 ">
                    <div class="upper_slider">
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/benner_Horizontal1.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal2.png' ?>"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="navbar-fix">
            <nav class="grey darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <ul id="dropdown1" class="dropdown-content dropdown-menu">
                        <li><a href="<?php echo base_url() . 'index.php/news' ?>">Latest News</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/reportnews' ?>">Report News</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() . 'index.php/gist' ?>">Latest Gist & Gossip</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a " href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" data-hover="true" data-activates="dropdown1">LATEST NEWS </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/schools' ?>">SCHOOLS</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/course' ?>">COURSES</a></li>
                        <li><a class="active" href="<?php echo base_url() . 'index.php/vactender' ?>">VACANCY/TENDER</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/connectme' ?>">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>

                    </ul>

                    <ul id="nav-mobile" class="side-nav mobile-nav">
                        <li><a class="active" href="#">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" >LATEST NEWS</a></li>
                        <li><a href="#">SCHOOLS</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m7 grid-example">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Vacancies/Tender <span class="News-button"><a href="http://localhost/ETHIO/index.php/post_vacancy" class="waves-effect waves-light btn">Post Vacancy</a></span></h1>
                            </div>
                        </div>
                        <div class="col m12 s12">
                            <div class="news_sort_form col m12">
                                <div class="col s3">
                                    <p>Sort Tenders:</p>
                                </div>
                                <div class="input-field col s3">
                                    <input id="Caption" type="date" class=" datepicker validate">
                                    <label for="Caption"> From</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="Caption" type="date" class=" datepicker validate">
                                    <label for="Caption"> To</label>
                                </div>
                                <div class="input-field col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">search
                                        <i class="material-icons ">search</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="vacancy_list_wrap">
                                <ul class="vacancy_list">
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>
                                    <li class="vacancy_content">
                                        <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="vacancy_link">
                                            <span class="vacancy_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">14-Aug-2016</span>&nbsp;[13:40:50]</strong> This tender for the school renovation and other work of school. for apply to this vacancy click on above link.</span>
                                    </li>

                                </ul>

                                <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12 m3 z-depth-1">
                    <div class="latest_news_wrap ">
                        <h1 class="red_label_title">Latest News</h1>
                        <ul class="latest_news_list">
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>

                        </ul>
                    </div>

                    <div class="Most_news_wrap ">
                        <h1 class="red_label_title">Most Read</h1>
                        <ul class="Most_news_list">
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li> <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>

                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer grey darken-3">
            <div class="row">
                <div class="col l2 s12">
                    &nbsp;


                </div>
                <div class="col l2 s12">
                    <h5 class="red-text">Navigation</h5>
                    <ul>
                        <li><a class="white-text" href="#">HOME</a></li>
                        <li><a class="white-text" href="#">LATEST NEWS</a></li>
                        <li><a class="white-text" href="#">SCHOOLS</a></li>
                        <li><a class="white-text" href="#">COURSES</a></li>
                        <li><a class="white-text"  href="#">VACANCY/TENDER</a></li>
                        <li><a class="white-text" href="#">CONNECT TO ME</a></li>
                        <li><a class="white-text" href="#">SERVICE</a></li>
                        <li><a class="white-text" href="#">HOW TO PAY USING <span class="red-text"> M-BIRR</span> / <span class="red-text"> Hello-Cash</span></a></li>
                    </ul>

                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">Get In Touch</h5>
                    <ul class="white-text">
                        <li>2144 - 007 - 1566</li>
                        <li>No 48, Season street,</li>
                        <li>Livingstone,</li>
                        <li>ETHIOPIA, Africa</li>
                        <li>Email : <a href="mailto:info@example.com">info@ethioedu.com</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">About Us</h5>
                    <p class="grey-text text-lighten-4">
                        The ETHIOEDU.COM started with the aim of easing the process of searching for educational information in ETHIOPIA.
                    </p>


                    <h5 class="red-text">Follow Us</h5>
                    <div class="footer-social-bookmark">
                        <ul class="white-text social-media">
                            <li><a class="white-text"  target="_blank" href="#" class="facebook"><i class="fa fa-facebook "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="twitter"><i class="fa fa-twitter "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-linkedin "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-pinterest "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="youtube"><i class="fa fa-youtube "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="instagram"><i class="fa fa-instagram "></i></a></li>

                        </ul>
                    </div>


                </div>
            </div>

            <div class="footer-copyright red darken-1">
                <div class="container center-align">
                    Copyright © 2016 ethioedu.com | <a href="http://ethioedu.com/contact-us/">Contact Us</a>.
                    All Names, Acronyms and Trademarks displayed on this website are those of their respective owners.
                    Read our <a href="http://ethioedu.com/school/docs/privacy-policy/">privacy policy</a> and <a href="http://ethioedu.com/school/docs/terms-of-use/">terms of use. </a>

                </div>
            </div>
        </footer>

        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

    </body>
</html>



