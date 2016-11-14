<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
                <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">List Course</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">List Course</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Registered Schools.</p>
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Course Name</th>
                                                    <th data-field="name">Course Category</th>
                                                    <th data-field="price">Duration</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mater Science</td>
                                                    <td>Science</td>
                                                    <td>5 Month</td>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mater Science</td>
                                                    <td>Science</td>
                                                    <td>5 Month</td>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>