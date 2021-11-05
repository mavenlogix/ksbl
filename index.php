
<!DOCTYPE html>
<html>


<?php 

//Page name
$page_meta_key = 'home';

include('./partials/head.php');


?>

<body class="home">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run ">
        <div class="header-video">
            <video id="myvideo" width="1000" height="400" autoplay loop muted playsinline>
                <source class="active" src="images/ksbl-video-desktop.mp4" data-mobile="images/ksbl-video-mobile.mp4" data-desktop="images/ksbl-video-desktop.mp4" type="video/mp4">
                <source src="images/ksbl-video-desktop.mov" data-mobile="images/ksbl-video-mobile.mov" data-desktop="images/ksbl-video-desktop.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">

            <!-- navbar start -->
            <?php
                include('./partials/navbar.php'); 
            ?>
            <!-- navbar-end -->

            <a href="index.php" title="KSBL" class="logo">
                <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                <h1 class="d-block d-md-none mt-n1">Where leaders take flight...</h1>
               
            </a>
        </div><!-- container -->
        <div class="header-bottom">
                <div class="container">
                    <h1  class="d-none d-md-block">Where leaders take flight...</h1>
                     <h2 class=" homeHeading d-sm-none d-block mt-5">Admissions Open!</h2>
                </div><!-- container -->
                

                    <div class="ksbl-programs-wrap">
                    <div class="container">
                        <h2 class="homeHeading">Admissions Open!</h2>
                        
                        <div class="ksbl-programs">
                        
                            <a href="mba/" class="ksbl-program mba">
                                <h4>MBA</h4>
                                <div class="program-detail">
                                    Full-time MBA program  designed to enhance your leadership <br>potential
                                </div>
                            </a><!-- mba -->
                            
                            <a href="emba/" class="ksbl-program executive-mba">
                                <h4>EMBA</h4>
                                <div class="program-detail">
                                    A cutting-edge MBA program designed for working professionals & leaders
                                </div>
                            </a><!-- executive-mba -->

                            <a href="ms-business-analytics/" class="ksbl-program executive-edu-mba">
                                <h4>MS Business Analytics</h4>
                                <div class="program-detail">
                                    A holistic program that helps leaders harness the power of data
                                </div>
                            </a><!-- executive-edu-mba -->
                            <a href="./meba" class="ksbl-program executive-edu-mba">
                                <h4>BS MEBA</h4>
                                <div class="program-detail">
                                   A well-rounded approach in teaching Management, Entrepreneurship & Business Administration
                                </div>
                            </a><!-- executive-edu-mba -->
                            <a href="./bs-its" class="ksbl-program executive-edu-mba">
                                <h4>BS IT&S</h4>
                                <div class="program-detail">
                                    A holistic program enabling young minds to understand Information Technology and Systems
                                </div>
                            </a><!-- executive-edu-mba -->
                          <!--   <a href="executive-education-services/" class="ksbl-program executive-edu-mba">
                                <h4>Executive Education</h4>
                                <div class="program-detail">
                                    Open enrollment & customized programs for Managers, Leaders & Innovators
                                </div>
                            </a>
                             -->
                            <!--a href="ela/" class="ksbl-program engro-leadership-academy">
                                <h4>Engro Leadership Academy</h4>
                                <div class="program-detail">
                                    A milestone in academia-industry<br> collaboration for learning,<br> & leadership development
                                </div>
                            </a--><!-- engro-leadership-academy -->
                            
                            <!--a href="#" class="ksbl-program center-entrepreneurship">
                                <h4>Center of Entrepreneurship</h4>
                                <div class="program-detail">
                                    ELA, an institution for leadership <br>development
                                </div>
                            </a--><!-- center-entrepreneurship -->
                            
                            </div><!-- container -->
                        </div>
                        
                    </div>
                </div><!-- container -->
            </div><!-- Header-bottom -->
                
        </div><!-- Header-bottom -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      About KSBL Start                            #
	#----------------------------------------------------------------->
    <div class="about-ksbl-section">
        <div class="container">
            <div class="left-side">
                Developing purpose-driven leaders capable of 'shaping tomorrow' amidst the challenges and demands of emerging markets and technological innovation. We bring together people of ideas, agents of innovation and a futuristic approach instigating transformation in a holistic environment. We envision our fraternity to be the agents of organizational change through ethical decision-making, knowledge championship and exemplary professional conduct.
            </div>
            <div class="right-side">
                <a>The mission of KSBL</a> <br>A self-sustained, institution bringing innovative business education and life-long learning that develops leaders with character, ethics and capability - and facilitates diversity, inclusion and equal opportunities for all
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                      About KSBL END                              #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      Content Area Start                          #
	#----------------------------------------------------------------->
    <div class="content-section" id="content-area">
        <div class="container d-block">
            <!-- === START News and Event == -->
            <div class="news-and-events container-boxes addmission">
                <!-- <a href="blog/ksbl_appoints_mubashar.html" class="latest-news-event big-wrap">
						<div class="image-area"> <img src="images/mubasher-hameed-high.jpg" alt="Mubasher Hameed"/>
						</div>
						<div class="news-event-detail">
							<div class="tag">News</div>
							<div class="other-details">
								<h3>KSBL appoints Mubashar Hameed as Rector</h3>
								<div class="detail">CEO of Karachi Education Initiative (KEI), Mubashar Hameed is set to lead as Rector KSBL</div>
								<div class="date">Tuesday, May 12th, 2020</div>
							</div>
						</div>
						
					</a> -->
                <div class="latest-news-event big-wrap">
                    <div class="image-area"> <img src="images/upcoming-event-high_1.jpg" alt="Upcoming Event" />
                    </div>
                    <div class="news-event-detail addmission">
                        <div class="tag">ADMISSIONS</div>
                        <div class="other-details">
                            <br>
                            <h3 class="homeAdmissionOpen">Admissions Open!</h3>
                            <!-- <div class="type" style="font-size: 30px;">EMBA  |  BS MEBA  |  BS IT&S <br> -->
                            </div>
                            <div class="detail">
                                <div class="event-detail">
                                    <!-- <div class="event-date">Specializations: <br> Digital Marketing, Fintech and Talent <span id="content11">Management </span></div> <br> -->
                                </div>
                            </div>
                        </div>
                        <div class="apply-more-btn">
                            <a class="default-btn apply" href="http://admissions.colaraz.com/signup?institute=ksbledu" target="_blank" style="right: 0px !important;">Apply Now</a>
                            <!-- <a class="default-btn more" href="mba/">More</a> -->
                        </div>
                    </div>
                </div>
                <div class="latest-news-event half-wrap">
                    <div class="image-area">
                        <img src="images/home-msba.jpg" alt="KSBL Online" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag">PROGRAMS</div>
                        <div class="other-details">
                            <h3>Executive MBA</h3>
                            <div class="detail">A cutting-edge Executive MBA program designed for working professionals & leaders</div>
                        </div>
                    </div>
                    <a class="default-btn apply-now" href="emba/" target="_parent">More</a>
                </div>
                <div href="" class="latest-news-event half-wrap">
                    <div class="image-area">
                        <img src="images/BS-MEBA-3.jpg" alt="Students" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag">PROGRAMS</div>
                        <div class="other-details">
                            <h3>BS MEBA</h3>
                            <div class="detail">
                            Develop an entrepreneurial mindset that is driven by the latest in management</div>
                        </div>
                    </div>
                    <a class="default-btn apply-now" href="meba">More</a>
                </div>
                <div href="" target="new" class="latest-news-event half-wrap mobile-visible">
                    <div class="image-area">
                        <img src="images/BS-IT&S-1.jpg" alt="KSBL Online" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag">PROGRAMS</div>
                        <div class="other-details">
                            <h3>BS IT&S</h3>
                            <div class="detail">A holistic program enabling young minds to understand Information Technology and Systems</div>
                        </div>
                    </div>
                    <a class="default-btn apply-now last" href="bs-its">More</a>
                </div>
            </div>
            <!-- === END News and Event ==== -->
            <!-- === START News and Event == -->
            <div class="news-and-events container-boxes">
                <!-- <div href="" target="new" class="latest-news-event half-wrap mobile-visible">
										<div class="image-area">
											<img src="images/home-emba.jpg" alt="KSBL Online"/>
										</div>
										<div class="news-event-detail">
											<div class="tag">PROGRAMS</div>
											<div class="other-details">
												<h3>KSBL Executive MBA</h3>
												<div class="detail">Catalyze your career goals with the KSBL Executive MBA</div>
												
											</div>
										</div>
										<a class="default-btn apply-now last" href="emba/index.html">Apply Now</a>
										
									</div> -->
                <a href="javascript:void(0)" class="latest-news-event big-wrap">
                    <!--blog/ksbl_appoints_mubashar.html-->
                    <div class="image-area"> <img src="images/mubasher-hameed-high.jpg" alt="Mubasher Hameed" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag">Rector's MESSAGE</div>
                        <div class="other-details">
                            <!--<h3>Rector, Mubashar Hameed's Message for Students</h3>-->
                            <div class="detail less-font">"
                                These evolving times are all about having a holistic,
                                digital, and global outlook while making ethics and
                                character the bedrock for sustainability. Whether you
                                are a student gearing up for the gig economy, a
                                socially conscious start-up, or a corporate giant,
                                all feed into one global system enabled by technology
                                and continuous learning. <br>
                                At KSBL we are geared to become an agile ecosystem set to
                                forge lifelong partnerships with all our stakeholders and
                                create global impact, all for the benefit of current and future
                                generations.
                                "
                                <br>- Mubashar Hameed </div>
                        </div>
                    </div>
                </a>
                <div href="" target="new" class="latest-news-event half-wrap mobile-hide">
                    <div class="image-area">
                        <img src="images/BS-IT&S-1.jpg" alt="KSBL Online" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag">PROGRAMS</div>
                        <div class="other-details">
                            <h3>BS IT&S</h3>
                            <div class="detail">A holistic program enabling young minds to understand Information Technology and Systems</div>
                        </div>
                    </div>
                    <a class="default-btn apply-now last" href="bs-its">More</a>
                </div>
                <a class="latest-news-event half-wrap last-covid">
                    <div class="image-area">
                        <img style="height: 375px !important; " src="images/info-staff-student-high.jpg" alt="Covid-19" />
                    </div>
                    <div class="news-event-detail">
                        <div class="tag red">COVID-19</div>
                        <div class="other-details">
                            <br>
                            <h3>In the interest of safety & caution</h3>
                            <div class="detail">KSBL will remain closed for visitors amid COVID'19 outbreak, until further notice. Pending further notice, the scheduled classes will be conducted as planned via online mediums.</div>
                        </div>
                        <div class="powered-by">Sindh Government's directives</div>
                    </div>
                </a>
            </div>
            <!-- === END News and Event ==== -->
            <!-- === START Success Stories == -->
            <div class="success-stories container-boxes">
                <div class="headings">
                    <h2>Success Stories</h2>
                    <div class="sub-heading">KSBL Alumni</div>
                </div>
                <div class="image-area">
                    <img src="images/testimonial-image-high.png" height="346" alt="Testimonial" />
                </div>
                <div class="stories full-wrap owl-carousel owl-theme">
                    <div class="item">
                        <div class="quotes">
                            <div class="testimonial">
                                "Becoming a part of KSBL allowed me to discover business facets from a new perspective and in the meantime, learn tools & techniques; to help me add a share to the profitability of my organization. The teaching methodologies and extensive workshops by professionals belonging to business strata allowed me to transform my leadership style and become a better business practitioner in the process!"
                            </div>
                            <div class="about-user">
                                <div class="name">Zohaib Sikander</div>
                                <div class="other-info">
                                Senior Manager Modern Trade & Ecommerce<br>P&G Pakistan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quotes">
                            <div class="testimonial">
                                "The teaching methodologies and classroom environment of the KSBL EMBA program enriched my mind with how business principles are applied in the real world!"
                            </div>
                            <div class="about-user">
                                <div class="name">M. Zafar Iqbal</div>
                                <div class="other-info">
                                    Senior Finance Manager, <br>Colgate Palmolive Pakistan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quotes">
                            <div class="testimonial">
                                "Joining the KSBL EMBA program was like taking my management and intellect to a whole next level!"
                            </div>
                            <div class="about-user">
                                <div class="name">Ali Imran Khan</div>
                                <div class="other-info">
                                    Executive Vice President, <br>Meezan Bank Limited
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END Success Stories ==== -->
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                      Content Area END                            #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      EXPLORE OUR Campus  START                   #
	#----------------------------------------------------------------->
    <div class="videoSecondHome explore-campus">
 <div class="container">
        <div class="modal fade " id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="vidPlay()">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
           <div style="position: relative;">
            <button class="active playBtnVid" onclick="vidPlay()"><img src="images/play_vid.svg"></button>

            <video id="myvideo" muted onclick="vidPlay()">
                <source class="" src="images/KSBL_video_home.mp4" data-mobile="images/KSBL_video_home.mp4" data-desktop="images/KSBL_video_home.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video> 
            </div>
        </div>

    </div>
</div>
</div>   

   <img src="images/explore-campus-high.png" alt="Explore Campus" class="explore-campus-image" />
    

    <div class="about-campus" >
        <img src="images/camera-high.png" width="62" alt="camera" data-toggle="modal" data-target="#videoModal" onclick="vidPlay()"/>
        <div class="campus-info">While our campus remains closed during COVID'19 lockdown, here is your chance to explore our campus <strong>virtually</strong>!</div>
        <div class="virtual-visit "> <a href="campus.php" class="text-white" title="Explore our campus virtually">Explore our campus!  </a></div>

    </div>
</div>


</div>
    <!-----------------------------------------------------------------#
	#                      EXPLORE OUR Campus  END                     #
	#----------------------------------------------------------------->
    

    <!-- footer start -->
    <?php
        include('./partials/footer.php');
    ?>
    <!-- footer end -->
   <?php
        include('./partials/footer-scripts.php');
    ?>
</body>

</html>