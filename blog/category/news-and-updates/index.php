<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'News-and-Events';
include('../../../partials/head.php');
$catalog->setcookie();
?>

<body class="mba open-house center-page category-page">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
                   <?php
include('../../../partials/navbar.php'); 
?>

            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content">
                <h1>News & Events . 2021</h1>
                <div class="page-detail">Stay up to date with the latest happenings at KSBL</div>
                <!---
					
					<div class="tabs">
							<a href="#" class="tab active" data-tab="2020">2020</a>
							<a href="#" class="tab" data-tab="2019">2019</a>
							<a href="#" class="tab" data-tab="2018">2018</a>
							<a href="#" class="tab" data-tab="archive">Archive</a>
							
						</div>

					--->
                <div class="center-page-content news-and-events container-boxes">
               

                <a href="blog/ksbl_and_iQualify_uk_signed_MOU.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/KSBL_&_iQualify.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL and iQualify UK signed a Memorandum of Understanding (MOU)</div>
                                <div class="date">Wednesday, November , 17th, 2021</div>
                            </div>
                        </div>
                    </a>


                <a href="blog/fall_2021_batch_gets_together.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/fall_2021_batch_image6.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Fall 2021 Batch gets together on campus for a fun evening</div>
                                <div class="date">Saturday, November, 13th, 2021</div>
                            </div>
                        </div>
                    </a>

                <a href="blog/Engro_Polymer_&_Chemicals.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/circular_plastic_institute.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">Engro Polymer & Chemicals signed a Memorandum of Understanding (MoU) to establish a Circular Plastics Institute</div>
                                <div class="date">Monday, November , 1st, 2021</div>
                            </div>
                        </div>
                    </a>

                    <a href="blog/mubashar_hameed_talks.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/Mubashar_Hameed_talks4.jpg" alt="Mubashar Hameed talks">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Mr. Mubashar Hameed talks to incoming batch of Undergraduate students on Leadership</div>
                                <div class="date">Monday, October, 25th, 2021</div>
                            </div>
                        </div>
                    </a>

                <a href="blog/Alumni_Homecoming_2021.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/far_2916.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Alumni Homecoming 2021</div>
                                <div class="date">Monday, October, 25th, 2021</div>
                            </div>
                        </div>
                    </a>
                
                <a href="blog/transformation-initiatives.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/transfermative-initiative.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Rector KSBL Mr. Mubashar Hameed conducts a townhall with employees about the latest transformation initiatives</div>
                                <div class="date">Thursday, July 1st, 2021</div>
                            </div>
                        </div>
                    </a>

                <a href="blog/waheed-umrani-case-research.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/dr-waheed-umrani.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">Head of KSBL Case Research Centre, Dr. Waheed Umrani’s latest Publication</div>
                                <div class="date">Tuesday, May 25th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/ksbl_simerge.php" class="latest-news-event half-wrap  ">
                        <div class="image-area">
                            <img src="images/blog/ksbl_simerge_image4.png" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">KSBL students recently arranged the annual Simerge event.</div>
                                <div class="date">Wednesday, Apr 7th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/MS_business_analytics.php" class="latest-news-event half-wrap   ">
                        <div class="image-area">
                            <img src="images/blog/Orientation_Ceremony_image8.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Orientation Ceremony for Inaugral Batch of KSBL MS Business Analytics.</div>
                                <div class="date">Wednesday, March 24th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/data_driven_marketing.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/data_driven_marketing.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A Guest speaker session on "Data-driven Marketing" by Ammar Hassan (CMO, Daraz)</div>
                                <div class="date">Tuesday, March 16th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/ksbl_women_day_dialogue.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/ksbl_women_day_dialogue2.jpg" alt="Blog other">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Women's Day Dialogue at KSBL</div>
                                <div class="date">Wednesday, March 10th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/cfa_challenge_pakistan.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/CFA_challenge_pakistan.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">KSBL Wins CFA Challenge Pakistan - another consecutive year</div>
                                <div class="date">Thursday, March 4th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/how_to_prepare_for_live_recruitment_games.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/live_recruitment_games.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">"How to prepare for Live Recruitment Games" by Kamran Kiyani</div>
                                <div class="date">Saturday, February 20th, 2021</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/market_segmentation.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/market_segmentation_2.png" alt="Data Science" style="min-height:184px;">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A guest speaker session on 'Market Segmentation' by Dr. Marco Vriens</div>
                                <div class="date">Friday, December 18th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/brand_positioning.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/brandPositioning.png" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A talk on 'Brand Positioning' by Graham Robertson</div>
                                <div class="date">Friday, December 18th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/perception_critical_for_leading_change.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/perception_critical_for_leading_change.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A Guest Speaker session on 'Perception: Critical for Leading Change' by Junaid Asrar Khan (Fatima Group)</div>
                                <div class="date">Tuesday, December 15th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/high_performance_culture.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/High_performance_culture.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A Guest Speaker session on 'Building Blocks of Creating a High Performance Culture' by Hassan Hashmi (Head of HR, Midas Safety)</div>
                                <div class="date">Monday, December 14th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/role_in_mergers_and_acquisitions.php" class="latest-news-event half-wrap  ">
                        <div class="image-area" height="184">
                            <img src="images/blog/a_talk_on.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">A Guest Speaker session on 'Understanding HR&#8217;s Role in Mergers & Acquisitions&#8217; by Muhammad Talha (HUBCO)</div>
                                <div class="date">Thursday, December 10th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/data_science.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/datascience.jpg" alt="Data Science">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">An online workshop titled 'Data Science for Non-Techies' was recently conducted by DICE Analytics for MBA students at KSBL</div>
                                <div class="date">Friday, Nov 13th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/student_council.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/student-council.jpg" alt="Student Council">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL Student Council recently conducted elections on campus for the selection of President of the Student Council</div>
                                <div class="date">Friday, Nov 13th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/daraz.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/daraz.jpg" alt="Daraz">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL and Daraz partner to empower SMEs through online education</div>
                                <div class="date">Tuesday, May 19th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/ksbl_appoints_mubashar.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/mubashar-hameed.jpg" alt="Mubashar Hameed">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL appoints Mubashar Hameed as Rector</div>
                                <div class="date">Tuesday, May 12th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/mrsohailbaig.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/students-meetup.jpg" alt="meets students">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">Mr Sohail Baig, CEO Emaar meets students for Mentoring Session</div>
                                <div class="date">Monday, February 24th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/ksbl_signs_mou.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/delta-initiative.jpg" alt="DELTA Initiative">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL Signs an MoU with SEED Ventures to Establish DELTA Initiative</div>
                                <div class="date">Wednesday, February 19th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/talk_on_ai.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/artificial-intelligence-ai.jpg" alt="Artificial Intelligence AI">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">KSBL Held Eminent Speaker Series Talk on Artificial Intelligence AI Powered HR Decisions</div>
                                <div class="date">Wednesday, February 19th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/alumni_reunion.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/alumni-reunion.jpg" alt="Alumni Reunion">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">Events</div>
                            <div class="other-details">
                                <div class="detail">KSBL Organized Alumni Reunion 2020</div>
                                <div class="date">Monday, February 17th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/fieldtrip_to_metro.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/metro_fieldtrip.jpg" alt="Daraz">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">EVENT</div>
                            <div class="other-details">
                                <div class="detail">KSBL Organized Field Trip to Metro Store for MBA Students as Part of Trade Marketing Class</div>
                                <div class="date">Monday, February 17th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/unilever_visits.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/unilever_visits.jpg" alt="Unilever visits KSBL">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">EVENT</div>
                            <div class="other-details">
                                <div class="detail">Unilever Visits KSBL to conduct Campus Drive at KSBL</div>
                                <div class="date">Wednesday, February 12th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/media_buying_planning.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/mediabuying_planning.jpg" alt="Media Buying & Planning">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">NEWS</div>
                            <div class="other-details">
                                <div class="detail">KSBL Organized Presentations on Media Buying & Planning Delivered by EMBA Students</div>
                                <div class="date">Tuesday, February 11th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/netwokring_night_2020.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/networking_night_2020.jpg" alt="Networking Night 2020">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">EVENT</div>
                            <div class="other-details">
                                <div class="detail">KSBL Organized Networking Night 2020 for senior MBA batches</div>
                                <div class="date">Tuesday, February 11th, 2020</div>
                            </div>
                        </div>
                    </a>
                    <a href="blog/session_on_mentalhealth.php" class="latest-news-event half-wrap">
                        <div class="image-area">
                            <img src="images/blog/session_on_mentalhealth.jpg" alt="Session on Mental Health">
                        </div>
                        <div class="news-event-detail">
                            <div class="tag">EVENT</div>
                            <div class="other-details">
                                <div class="detail">KSBL Organized a Session on 'Mental Health & Well-being at Workplaces' by Dr Mohammad Wasay (President, NARF)</div>
                                <div class="date">Wednesday, January 8th, 2020</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- container -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
       <?php
   include('../../../partials/footer.php');
?>

<!-- footer end -->
<?php
  include('../../../partials/footer-scripts.php');
?>
    <script async src="https://cse.google.com/cse.js?cx=5a67611eb2aef8e92"></script>
</body>

</html>