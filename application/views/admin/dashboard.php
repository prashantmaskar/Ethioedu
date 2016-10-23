<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $m_title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="../../css/adminmaterialize.css" type="text/css" rel="stylesheet" media="screen">
        <link href="../../css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="../../css/admin.css" type="text/css" rel="stylesheet" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="page-topbar ">
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <ul class="left">
                            <li>
                                <h1 class="logo-wrapper">
                                    <a href="#" class="brand-logo darken-1" >
                                        EthioEdu
                                    </a>    
                                </h1>
                                <span class="logo-text">Ethioedu</span>
                            </li>
                        </ul>
                        <ul class="right hid-mid-screen">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                    <i class="mdi-action-settings-overscan"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                    <i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                                    <i class="mdi-communication-chat"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>

        </header>
        <!--header End-->

        <!--start main-->
        <div id="main">
            <div class="wrapper">
                <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="../../images/avatar.jpg" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                        Fikreman
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <i class="mdi-action-face-unlock"></i>
                                                Profile
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
                        <li class="bold active">
                            <a href="#" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        School Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addschool' ?>">Add School</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Listschool' ?>">List School</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Course Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addcourse' ?>">Add Course</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listcourse' ?>">List Course</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        News Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addnews' ?>">Add News</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listnews' ?>">List News</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Service Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="#">Past Exam</a>
                                            </li>
                                            <li><a href="#">Tips</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/quesanswer' ?>">Questions & Answers</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Project_Topic' ?>">Project Topics</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Events' ?>">Add Events</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/ListEvent' ?>"> List Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>                   
                </aside>
                <section id="content">
                    <div class="container">
                        <div id="card-stats">
                            <div class="row">
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content  green white-text">
                                            <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                            <h4 class="card-stats-number">566</h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                            </p>
                                        </div>
                                        <div class="card-action  green darken-2">
                                            <div id="clients-bar" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content pink lighten-1 white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                            <h4 class="card-stats-number">1806</h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                            </p>
                                        </div>
                                        <div class="card-action  pink darken-2">
                                            <div id="invoice-line" class="center-align"><canvas width="241" height="25" style="display: inline-block; width: 241px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content blue-grey white-text">
                                            <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                            <h4 class="card-stats-number">$806.52</h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                            </p>
                                        </div>
                                        <div class="card-action blue-grey darken-2">
                                            <div id="profit-tristate" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content purple white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                            <h4 class="card-stats-number">$8990.63</h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                            </p>
                                        </div>
                                        <div class="card-action purple darken-2">
                                            <div id="sales-compositebar" class="center-align"><canvas width="214" height="25" style="display: inline-block; width: 214px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                            <a class="btn-floating btn-large">
                                <i class="mdi-action-stars"></i>
                            </a>
                            <ul>
                                <li><a href="css-helpers.html" class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-communication-live-help"></i></a></li>
                                <li><a href="app-widget.html" class="btn-floating yellow darken-1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-device-now-widgets"></i></a></li>
                                <li><a href="app-calendar.html" class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-editor-insert-invitation"></i></a></li>
                                <li><a href="app-email.html" class="btn-floating blue" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-communication-email"></i></a></li>
                            </ul>
                        </div>
                        <!-- Floating Action Button -->

                    </div>
                </section>
            </div>
        </div>
        <script type="text/javascript" src="../../js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="../../js/materialize.js"></script>
    </body>

</html>
