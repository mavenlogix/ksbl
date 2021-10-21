<!DOCTYPE html>
<html lang="en">
<?php 

include('../partials/head.php');

?>
<style type="text/css">
body,
html {

    overflow-x: hidden;

}
</style>

<body class="mba about bog">
    <!-----------------------------------------------------------------#

    #                       Header START                               #

    #----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../partials/navbar.php'); 
?>

            <div class="header-content">
                <a href="../index.php" title="KSBL" class="logo">
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
            <a href="../about/board-of-governors.php" class="department " title="Board of Governors">Board of Governors</a>
            <!-- Board of Governors -->
            <a href="../faculty.php" class="department" title="Faculty">Faculty</a>
            <!-- Accreditation -->
            <a href="../about/karachi-education-initiative/" class="department" title="KEI">KEI</a>
            <!-- KEi -->
            <a href="../contact-us.php" class="department" title="Contact Us">Contact Us</a>
            <!-- Contact -->
        </div><!-- container -->
    </div>
    <!-----------------------------------------------------------------#

    #                   MBA Department END                             #

    #----------------------------------------------------------------->
    <!-----------------------------------------------------------------#

    #                     Faculty Group Start                          #

    #----------------------------------------------------------------->
    <div class="faculty-section teacher-group">
        <div class="container">
            <div class="non_faculty_grid">
                <div class="non_faculty_grid_left">
                    <div class=" non_faculty_grid_img  non_faculty_grid_img_Dr_Junaid_Siddiqui">
                        <div class="non_faculty_grid_head">
                            <h1>Dr. Junaid Siddiqui</h1>
                            <h4>Information Systems</h4>
                        </div>
                    </div>
                    <div class="non_faculty_grid_two">
                        <div class="non_faculty_grid_two_left">
                            <h4>Recent Activity</h4>
                            <!-- <div class="recent_activity">
                                <a href="">Mubashar Speaks on the orientation for the Inaugral batch of KSBL MS Business Analytics. </a>
                                <span>Monday, March 22nd, 2021</span>
                            </div>
                            <div class="recent_activity">
                                <a href=""><b>Mubashar welcomes Mr. Shoaib Khalil,</b> Head of Channel & Business Development, Microsoft Pakistan, for a session at KSBL on Future Job Trends... </a>
                                <span>Monday, March 22nd, 2021</span>
                            </div>
                            <div class="recent_activity">
                                <a href="">The board of KSBL has appointed Mr. Mubashar Hameed as the Rector.
                                    In addition to his role as Rector KSBL, Mr. Hameed will also serve as CEO of Karachi Education Initiative (KEI). </a>
                                <span>Tuesday, May 12th, 2020</span>
                            </div> -->
                        </div>
                        <div class="non_faculty_grid_two_right">
                            <div class="non_faculty_grid_two_right_content">
                                <p><b>Dr. Junaid Siddiqui</b> is Professor of Business and Management Information Systems in California. He has been in the field of public education for the last 20 years, and has advised and mentored students in the areas of business, higher education and smart career choices. Dr. Siddiqui has degrees in Business, Information Systems and Education from California and Europe. He was chosen as one of the Most Influential Professors for the fifth time in 2019. His interests include Reading and Traveling.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="non_faculty_grid_right">
                <h4>Other Faculty Members</h4>
                    <div class="non_faculty_grid_right_scroll">

                    <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Farooq-e-Azam-Cheema.php">Dr. Farooq-e-Azam Cheema
                                <span>Provost & Acting Registrar</span>

                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Tariq-Basheer.php">Dr. Tariq Basheer
                                <span>Professor<br>Accounting & Finance<br>Dean - Faculty of Management Sciences</span>

                            </a>
                        </div>

                   
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Muhammad-Nadeem-Javaid.php">Dr. Nadeem Javaid
                                <span>Professor<br>
                                    Strategy & Economics<br>
                                </span>
                            </a>
                        </div>
                        
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Abdul-Rahim-Nasir.php">Dr. Abdul Rahim Nasir
                                <span>Professor<br>
                                Business and Supply Chain Analytics<br>
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Shazib-Ehsan-Shaikh.php">Dr. Shazib Ehsan Shaikh
                                <span>Associate Professor,<br>
                                    Business Analytics<br>
                                    Head of Department, Decision Sciences
                                </span>
                            </a>
                        </div>
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Ahmad-Junaid.php">Dr. Ahmad Junaid
                                <span>Associate Professor<br>
                                    Finance & Accounting
                                </span>
                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Muhammad-Athar-Siddiqui.php">Dr. Athar Siddiqui
                                <span>Associate Professor<br>
                                    OB & HR</span>
                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Faryal-Razzaq.php">Dr. Faryal Razzaq
                                <span>Assistant Professor<br>Management Sciences</span>
                            </a>
                        </div>                     
                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Asim-Khwaja.php">Dr. Asim Khwaja
                                <span>Assistant Professor<br>Decision Sciences</span>
                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Sheraz-Mustafa-Rajput.php">Dr. Sheraz Mustafa Rajput
                                <span>Associate Professor<br> Economics</span>
                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Waseem-Hassan.php">Dr. Waseem Hassan
                                <span>Associate Professor<br>Marketing Strategy</span>
                            </a>
                        </div>

                        

                        <!-- for visiting faculty members -->
                        <!-- <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Dr-Junaid-Siddiqui.php">Dr. Junaid Siddiqui
                                <span>Information Systems</span>
                            </a>
                        </div>

                        <div class="non_faculty_grid_right_sub_head">
                            <a href="faculty-profile/Nausheen-Ahmed.php">Nausheen Ahmed
                                <span>Business Law</span>
                            </a>
                        </div> -->



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