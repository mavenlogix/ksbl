<!DOCTYPE html>
<html lang="en">
<?php 
$page_meta_key = 'Executive-Education-Programs';
include('../partials/head.php');

?>

<body class="mba ees FacBookings">
    <!-----------------------------------------------------------------#
    #                       Header START                               #
    #----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
                <div class="heder-info">
                    <h1>EXECUTIVE EDUCATION</h1>
                    <h2>First-rate executive training for operational and functional roles for professionals across varied sectors</h2>
                </div><!-- container -->
            </div>
        </div><!-- container -->
        <div class="header-bottom">
            <div class="ksbl-programs-wrap">
                <div class="container">
                    <div class="ksbl-programs">
                        <a href="mba/" class="ksbl-program mba ">MBA</a>
                        <!-- mba -->
                        <a href="emba/" class="ksbl-program executive-mba ">Executive MBA</a>
                        <!-- executive-mba -->
                        <a href="ms-business-analytics/" class="ksbl-program engro-leadership-academy ">MS Business Analytics</a>
                        <a href="meba/" class="ksbl-program executive-edu-mba ">BS MEBA</a>
                        <a href="bs-its/" class="ksbl-program executive-edu-mba">BS IT&S</a>
                        <a href="executive-education-services/" class="ksbl-program executive-edu-mba active">Executive Education</a>
                        <!-- executive-edu-mba -->
                    </div><!-- container -->
                </div>
            </div>
        </div>
        </div><!-- Header-bottom -->
    </header>
    <div class="departments">
        <div class="container">
            <a href="executive-education-services/" class="department " title="MBA">About</a>
            <!-- About Executive Education -->
            <a href="executive-education-services/customized-programs/" class="department" title="Custom Programs">Custom Programs</a>
            <!-- Custom Programs -->
            <a href="ela/" class="department" title="Engro Leadership Academy">Engro Leadership Academy</a>
            <a href="bookings/" class="department active" title="Bookings">Facility Bookings</a>
        </div><!-- container -->
    </div>
    <div class="facBookingForm">
        <div class="container">
            <h1 class="text-center">Title</h1>
            <div class="dGrid">
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aGFsbHdheXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                        <div class="content-details fadeIn-right">
                            <h3>This is a title</h3>
                            <p>This is a short description</p>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://images.unsplash.com/photo-1615414047026-802692414b79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGhhbGx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                        <div class="content-details fadeIn-right">
                            <h3>This is a title</h3>
                            <p>This is a short description</p>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="https://images.unsplash.com/photo-1592899940510-1240e12e70db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhhbGx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                        <div class="content-details fadeIn-right">
                            <h3>This is a title</h3>
                            <p>This is a short description</p>
                        </div>
                    </a>
                </div>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <form class="">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text" class="form-control" id="name"  placeholder="Enter name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label >Contact Number</label>
                            <input type="number" class="form-control" id="email"  placeholder="Enter phone no">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  placeholder="Enter email">
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label >Facility Required</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                
                            </select>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label >Date</label>
                            <input type="date" class="form-control" id="date"  placeholder="Enter date">
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label >Time</label>
                            <input type="time" class="form-control" id="Time"  placeholder="Enter time">
                        </div>
                    </div>
                          <div class="col-lg-4">
                        <div class="form-group">
                            <label >Food Required</label>
                            <select class="form-control">
                                <option>All </option>
                                <option>Hi-Tea </option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                                
                            </select>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label >No of attendees</label>
                            <input type="text" class="form-control" id="attendees"  placeholder="Enter attendees">
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label >Nature of event</label>
                            <input type="text" class="form-control" id="event"  placeholder="Enter event nature">
                        </div>
                    </div>
                     <div class="col-lg-12">
                        <div class="form-group">
                            <label >Any other requirements</label>
                            <textarea type="text" class="form-control" id="requirements"  placeholder="Enter any other requirements"></textarea> 
                        </div>
                    </div>
                    <div class="col-lg-2 mx-auto">
                        <button class="btn btn_submit">Submit</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('../partials/footer.php');?>
    <!-- footer end -->
    <?php include('../partials/footer-scripts.php');?>
</body>

</html>