<?php $this->load->view('header'); ?>
<div class="sdetails-wrap">
    <div class="row">
        <div class="col s12 m9 margin-t-15">
            <div class="udetail_container  ">
                <div class="row">
                    <div class="col m12 s12 card-panel edituser ">
                    <h1 class="page-title">Update Your Profile</h1>
                        <div class="basic-info">
                                <p><strong>Brif Instruction</strong></p>
                                <p>
                                1. Aspirants should select the institution they intend to get into.<br>
                                2. Graduates should select the institution they graduated from.<br>
                                3. First select your institution then wait for the page to reload the list of schools. Once the page reloads, you can now 
                                </p>
                        </div>
                        <form id="edituser">
                               <div class="form-group input-field col s12">
                                 <select class="form-control browser-default" name="schooltype">
                                    <option value="">select  school type</option>
                                    <option value="anything">anything</option>
                                    <option value="friendship">friendship</option>
                                    <option value="friendship">friendship</option>
                            </select>
                        </div>
                                <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="school">

                                                            <option value="">select your school</option>
                                                             <option value="anything">anything</option>
                                                            <option value="anything">anything</option>
                                                             <option value="friendship">friendship</option>
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="level">

                                                            <option value="">select level</option>
                                                             <option value="anything">anything</option>
                                                            <option value="friendship">friendship</option>
                                                             <option value="friendship">friendship</option>
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="department" name="department" type="text" class="validate">
                                        <label for="department">Department</label>
                                    </div>
                                        <h5 class="red-text">Login Information</h5>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption" type="text" name="username" class="validate">
                                        <label for="Caption">Username</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption" type="text" name="password" class="validate">
                                        <label for="Caption">password</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                        <input id="Caption" name="cpassword" type="text" class="validate">
                                        <label for="Caption"> verify password</label>
                                    </div>
                                           <h5 class="red-text">personal Information</h5>
                                    <div class="form-group input-field col s12">
                                        <input id="first_name" name="first_name" type="text" class="validate">
                                        <label for="Caption"> first Name</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="last_name" name="last_name" type="text" class="validate">
                                        <label for="Caption"> Last Name</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="gender">

                                                            <option value="">Gender</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="mobile" name="phone_number" type="text" class="validate">
                                        <label for="Caption">Mobile Number</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="email" name="email" type="text" class="validate">
                                        <label for="Caption">Email Id</label>
                                    </div>
                                    <div class="col s2 user-icon form-group input-field">
                                         <img src="<?php echo base_url() . 'images/user.jpg' ?>" class="responsive-img circle">  
                                    </div>
                                   <div class="form-group file-field input-field col s10">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input name="attach" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                        </div>
                                    </div>
                                       <h5 class="red-text">Connect2Me Information</h5>

                                    <div class="form-group input-field col s12">
                                        <input id="date" type="date" name="date" >
                                        <label for="date">Date of birth</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="status">

                                                            <option value="">Currently single</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="interestedIn">

                                                            <option value="">Interested In</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
                                                        </select>
                                    </div>

                                    <div class="form-group input-field col s12">
                                        <textarea id="aboutme" name="aboutme" class="materialize-textarea"></textarea>
                                        <label for="aboutme">About Me</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myinterest" name="myinterest" class="materialize-textarea"></textarea>
                                        <label for="myinterest">My Interests</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myhobby" name="myhobby" class="materialize-textarea"></textarea>
                                        <label for="myhobby">My Hobby</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="laction">Register
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m3 margin-t-15">
            <div class="online_std z-depth-1">
                <ul class="online_std_list">
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">   
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                   <img src="<?php echo base_url() . 'images/user.jpg' ?>">   
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>