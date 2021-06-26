<!DOCTYPE html>
<html lang="en">
<?php 

include('../partials/head.php');

?>

<body class="mba aboutt bog main-faculty">
    <!-----------------------------------------------------------------#

    #                       Header START                               #

    #----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="../index.html" title="KSBL" class="logo">
                    <img src="../images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
                <div class="heder-info">
                    <h1>FACULTY</h1>
                    <h2>KSBL faculty is composed of world-class scholars, focused on <span class="orange-yellow-text">transferring their knowledge & wisdom</span> to the next generation</h2>
                </div><!-- container -->
            </div>
        </div><!-- container -->
        </div><!-- Header-bottom -->
    </header>
    <!-----------------------------------------------------------------#

    #                       Header END                                 #

    #----------------------------------------------------------------->
    <div class="departments">
        <div class="container">
            <a href="../about/" class="department" title="Vision & Mission">Vision & Mission</a>
            <!-- About -->
            <a href="../about/board-of-governors.html" class="department " title="Board of Governors">Board of Governors</a>
            <!-- Board of Governors -->
            <a href="../faculty.html" class="department" title="Faculty">Faculty</a>
            <!-- Accreditation -->
            <a href="../about/karachi-education-initiative/" class="department" title="KEI">KEI</a>
            <!-- KEi -->
            <a href="../contact-us.html" class="department" title="Contact Us">Contact Us</a>
            <!-- Contact -->
        </div><!-- container -->
    </div>
    <div class="faculty-section teacher-group">
        <div class="container">
            <div class="faculty_grid">
                <div class="faculty_grid_left">
                    <div class="faculty_grid_head">
                        <h1>Dr. Farooq-e-Azam Cheema</h1>
                        <h4>Provost & Acting Registrar, <br>Sample for second line in lengthy titles</h4>
                        <a href="mail:to">emailaddress@ksbl.com</a>
                        <a href="">+ 92 0000 0000000</a>
                    </div>
                </div>
                <div class="faculty_grid_center">
                    <ul class="nav nav-tabs border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#vita">Vita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#credentials">Credentials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#interests">Interests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#publications">Publications</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content mt-2">
                        <div id="vita" class=" tab-pane active">
                            <p><b>Dr. Farooq e Azam Cheema</b> has a distinguished career in improving Pakistan's Education landscape with major contributions as member of the National Business Education Accreditation Council (NBEAC) and an accreditation mentor of renowned universities across Pakistan. He is the permanent member of National Curriculum Review Committee of Business Administration (HEC). He is also a member of coveted bodies like Chartered Institute of Personnel & Development (CIPD), UK and Chartered Institute of Logistics and Transport, UK.</p>
                            <p>
                                He completed his MSc. in Human Resource Management & Development from the University of Manchester, UK. His PhD. is in Management, from the University of Karachi.
                            </p>
                            <p>
                                Besides having diversified experience in academia with top tier higher education institutions of the country, he also has a vast experience of corporate HRM & D consultancy with special expertise in building the HR systems for renowned organizations and dealing with matters on Industrial Relations & Labour Laws. Dr. Cheema's area of expertise is Human Resource Development. He has been associated with reputable institutions like Employer Federation of Pakistan, Institute of Bankers Pakistan, and ICAP for last many years, and has conducted multiple workshops on managerial skills, Industrial Relations and Labour Laws there.
                            </p>
                            <p>
                                Prior to joining KSBL, Dr. Cheema served as the Dean Management and Social Sciences at Bahria University, Islamabad.
                            </p>
                        </div>
                        <div id="credentials" class=" tab-pane fade"><br>
                            <h3>Credentials</h3>
                        </div>
                        <div id="interests" class=" tab-pane fade"><br>
                            <h3>Interests</h3>
                        </div>
                        <div id="publications" class=" tab-pane fade"><br>
                            <h3>Publications</h3>
                        </div>
                    </div>
                </div>
                <div class="non_faculty_grid_right">
                    <h4>Other Faculty Members</h4>
                    <div class="non_faculty_grid_right_scroll">
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Dr. Tariq Basheer
                                <span>Professor<br> Accounting & Finance<br>
                                    Head of Department, Business Administration</span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Dr. Nadeem Javaid
                                <span>Professor<br>
                                    Strategy & Economics<br>
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Dr. Athar Siddiqui
                                <span>Associate Professor<br>
                                    OB & HR</span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Dr. Shazib Shaikh
                                <span>Associate Professor,<br>
                                    Business Analytics<br>
                                    Head of Department, Decision Sciences
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Dr. Ahmad Junaid
                                <span>Associate Professor<br>
                                    Finance & Accounting
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Finance & Accounting
                                <span>Professor<br>
                                    Strategy & Marketing Research
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="">Finance & Accounting
                                <span>Professor<br>
                                    Strategy & Marketing Research
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include('../partials/footer.php');
?>
    <!-- footer end -->
    <?php
include('../partials/footer-scripts.php');
?>
</body>

</html>