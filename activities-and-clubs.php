<!DOCTYPE html>
<html lang="en">
<!-- <title>KSBL | Activites & Clubs</title> -->
<?php 

include('./partials/head.php');

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55371745-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() { dataLayer.push(arguments); }
gtag('js', new Date());

gtag('config', 'UA-55371745-1');
</script>

<body class="mba open-house student-achievement activity-club">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('./partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.html" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content">
                <h1>SOCIETIES & CLUBS</h1>
                <div class="page-detail">KSBL Students Clubs and Societies are run by students, under the KSBL Students' Council. They play an integral part in a student's life at the institution in honing their leadership skills. Students may register themselves as a member in any of these societies and explore activities of their interest and liking. </div>
                <div class="open-house-tabs">
                    <!-- === Tab 1 === -->
                    <div class="tab-section active">
                        <div class="student-achievement">
                            <div class="image-section">
                                <br><img src="images/soc-clubs/sports.png" alt="Sports & Adventure Society" />
                            </div>
                            <div class="content-section">
                                <h2><br>KSBL Sports & Adventure Society</h2>
                                <div class="detail">KSBL Sports & Adventure Society was established to encourage active participation of students outside the classroom in physical activities. The purpose of this society is to promote and organize sports tournaments and conduct activities, such as trips to beaches and amusement parks, throughout the year. </div>
                                <div class="button-links">
                                    <a href="mailto:hr@ksbl.edu.pk?subject=Request to join club&body=Hi, I would like to join KSBL's Club named..." title="Join" class="join-btn btn-blue  btn-yellow-orange-white">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === END Tab 1 === -->
                    <!-- === Tab 2 === -->
                    <div class="tab-section active">
                        <div class="student-achievement">
                            <div class="image-section">
                                <br><img src="images/soc-clubs/welfare.png" alt="Welfare Society" />
                            </div>
                            <div class="content-section">
                                <h2><br>KSBL Welfare Society</h2>
                                <div class="detail">KSBL takes pride in contributing to the development of humanity and societies at large. Under the KSBL Welfare Society, the institution has introduced the Sahara Initiative, under which students have conducted various clothes and donation collection drives and other charitable activities. </div>
                                <div class="button-links">
                                    <a href="mailto:hr@ksbl.edu.pk?subject=Request to join club&body=Hi, I would like to join KSBL's Club named..." title="Join" class="join-btn btn-blue  btn-yellow-orange-white">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === END Tab 2 === -->
                    <!-- === Tab 3 === -->
                    <div class="tab-section active">
                        <div class="student-achievement">
                            <div class="image-section">
                                <br><img src="images/soc-clubs/placements.png" alt="Placements Society" />
                            </div>
                            <div class="content-section">
                                <h2><br>KSBL Placements Society</h2>
                                <div class="detail">KSBL Placements Society organizes professional development training sessions and workshops for the students. The students work closely with the KSBL Management to make all arrangements for these sessions that also include on-campus Assessment Centers, workshops by Alumni on various management topics, and personality development and career counseling sessions, to name a few.</div>
                                <div class="button-links">
                                    <a href="mailto:hr@ksbl.edu.pk?subject=Request to join club&body=Hi, I would like to join KSBL's Club named..." title="Join" class="join-btn btn-blue  btn-yellow-orange-white">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === END Tab 3 === -->
                    <!-- === Tab 4 === -->
                    <div class="tab-section active">
                        <div class="student-achievement">
                            <div class="image-section">
                                <br><img src="images/soc-clubs/leadership.png" alt="Leadership Club" />
                            </div>
                            <div class="content-section">
                                <h2><br>KSBL Leadership Club</h2>
                                <div class="detail">The KSBL Leadership Club is initiated to inculcate leadership and team-building skills in students and equip them with essential tools for their career growth and development through various on-campus events. Under the umbrella of KSBL's Leadership Club, students organize the institution's annual flagship event SiMERGE where Universities from all across the country are invited to participate. Furthermore, many networking sessions with industry leaders, concerts, and other on-campus student events are also organized by the Leadership Club. </div>
                                <div class="button-links">
                                    <a href="mailto:hr@ksbl.edu.pk?subject=Request to join club&body=Hi, I would like to join KSBL's Club named..." title="Join" class="join-btn btn-blue  btn-yellow-orange-white">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === END Tab 4 === -->
                    <!-- === Tab 5 === -->
                    <div class="tab-section active">
                        <div class="student-achievement">
                            <div class="image-section">
                                <br><img src="images/soc-clubs/characterbuilding.png" alt="Character-building" />
                            </div>
                            <div class="content-section">
                                <h2><br>KSBL Character-Building Society</h2>
                                <div class="detail">KSBL on the advice of NAB (National Accountability Bureau) has initiated the KSBL Character-building Society, intending to further instill moral, ethical, social, and academic values in students. This Club organizes many guest speaker sessions that create awareness against topics like corruption and the consumption of drugs. </div>
                                <div class="button-links">
                                    <a href="mailto:hr@ksbl.edu.pk?subject=Request to join club&body=Hi, I would like to join KSBL's Club named..." title="Join" class="join-btn btn-blue  btn-yellow-orange-white">Join</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- === END Tab 5 === -->
                </div>
            </div>
        </div><!-- container -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <?php
include('./partials/footer.php');
?>
    <!-- footer end -->
    <?php
include('./partials/footer-scripts.php');
?>
</body>

</html>