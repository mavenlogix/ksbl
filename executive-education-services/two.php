<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'Executive-Education-Programs';
include('../partials/head.php');

?>
<body class="mba ees">
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
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                       MBA Department                             #
	#----------------------------------------------------------------->
    <div class="departments">
        <div class="container">
            <a href="executive-education-services/" class="department active" title="MBA">About</a>
            <!-- About Executive Education -->
            <a href="executive-education-services/customized-programs/" class="department" title="Custom Programs">Custom Programs</a>
            <!-- Custom Programs -->
            <a href="ela/" class="department" title="Engro Leadership Academy">Engro Leadership Academy</a>
        </div><!-- container -->
    </div>
    <!-----------------------------------------------------------------#
	#                   MBA Department END                             #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      About MBA Start                            #
	#----------------------------------------------------------------->
    <div class="mba-section">
        <div class="container">
            <div class="left-side">
                <img src="images/ees/ee-1.jpg" alt="About our MBA" />
            </div>
            <div class="right-side">
                <h2>Changing the Way Executives are Trained</h2>
                <div class="detail">
                    <p>Mastery for executives and decision-makers rests in the knowledge they hold, the power to communicate and a detailed yet overarching understanding of the business at hand. Our executive education programs prepare and train for all-embracing components at play.
                        <p>Executive Education at KSBL encourages and supports intellectual leadership and ongoing innovation across all major disciplines of business education. With the ambition of being the most cutting-edge executive education center in the region, we prepare professionals for the next stage in their career. It is through our deep learning that we understand the expectations of the industry, helping us to tailor our learning interventions, keeping the professionals' knowledge and skillsets absolutely market relevant.
                            </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                      About END                              #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      Faculty MBA Start                           #
	#----------------------------------------------------------------->
    <div class="mba-section">
        <div class="container">
            <div class="left-side">
                <img src="images/ees/ee-2.jpg" alt="Faculty" />
            </div>
            <div class="right-side">
                <h2>KSBL Executive Education Program Areas</h2>
                <div class="detail">
                    <p>KSBL Open enrollment and customized programs are offered in the following 6 broad areas. You may get in touch with us at <a href="mailto:execed@ksbl.edu.pk">execed@ksbl.edu.pk</a> to find out more and discuss your personal or organizational needs and know about the myriad of learning options as per your needs.
                        <br><strong>Strategy
                            <br>Leadership
                            <br>Personal Development
                            <br>Finance
                            <br>Digital
                            <br>General Management </strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                      Faculty MBA END                             #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                      Open House Start                            #
	#----------------------------------------------------------------->
    <div class="edsNewPrograms">
       
    <style>
        .cardsParent{
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        .cardsParent .myCards{
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border: solid 1px orange;
            border-radius: 20px;
            margin: 20px;
        }

        .cardsParent .myCards .cardDate{
            color: #FAA633;
            font-size: 34px;
            font-weight: 600;
        }
        .cardsParent .myCards .cardDate::after{
            content: '';
            display: block;
            height: 2px;
            width: 100%;
            background: #FAA633;
        }
        .cardsParent .myCards .cardBody{
            padding: 20px 0px;
        }
        .cardsParent .myCards .cardBody h6{
            font-size: 22px;
        }
        .cardsParent .myCards .cardBody p{

        }
        .cardsParent .myCards .cardsBtn{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
        .cardsParent .myCards .cardsBtn button{
            background: transparent;
            border: solid 1px #FAA633;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 110px;
            height: 40px;
            color: white;
            transition: 0.5s;
            margin: 5px;
            border-radius: 10px;
        }
        .cardsParent .myCards .cardsBtn button:hover{
            border: solid 1px white;
            color: #FAA633;
            animation: myanimate;
            animation-duration: 1s;
            background-color: white;
        }
        @keyframes myanimate {
            from{
                /* border: solid 1px #FAA633; */
                background-color: transparent;
            }
            to{
                background-color: white;
            }
        }
      
        @media (min-width: 481px) and (max-width: 992px) {
            .cardsParent{
            flex-direction: column;
            }
        }
        @media (max-width: 480px) {

            .cardsParent{
            flex-direction: column;
            }

            .cardsParent .myCards .cardsBtn{
                flex-direction: column;
            }

            .cardsParent .myCards{
            padding: 10px;
            margin: 10px;
        }
        }

    </style>

        <div class="container ">


            <div class="cardsParent">
                <div class="myCards">
                    <div class="cardDate">
                        Jan 20, 2022
                    </div>
                    <div class="cardBody">
                        <h6>
                            Goal Setting
                        </h6>
                        <p>
                            Your first step towards success
                        </p>
                    </div>
                    <div class="cardsBtn">
                        <button class="enroll">Enroll Now</button>
                        <button class="catalog">View Catalog</button>
                    </div>
                </div>

                <div class="myCards">
                <div class="cardDate">
                        Jan 25 - 26, 2022
                    </div>
                    <div class="cardBody">
                        <h6>
                        Finance for Non-Financial Executives
                        </h6>
                        <p>
                        Finance fundamentals for non-finance executives
                        </p>
                    </div>
                    <div class="cardsBtn">
                        <button class="enroll">Enroll Now</button>
                        <button class="catalog">View Catalog</button>
                    </div>
                </div>

                <div class="myCards">
                <div class="cardDate">
                Jan 26 - 27, 2022
                    </div>
                    <div class="cardBody">
                        <h6>
                        Visualizing data stories
                        </h6>
                        <p>
                        Unlock the magical ways to turn hidden gems into shining insights
                        </p>
                    </div>
                    <div class="cardsBtn">
                        <button class="enroll">Enroll Now</button>
                        <button class="catalog">View Catalog</button>
                    </div>
                </div>

            </div>

           
            <div class="contact-committee increaseWidth">
              <!--   <span>Since pre-program reading is required, it is advised to send registration(s) at least 10 working days prior to the program.</span> -->
                <h2>For more information, please contact our
                    Executive Education Team
                </h2>
                <a href="mailto:execed@ksbl.edu.pk">execed@ksbl.edu.pk</a>
                <a href="tel:03332161255">PABX: +92 (21) 38771999, Ext 716, +92 (333) 216 1255</a>
                <a href="executive-education-services/pdf/performance_based_coaching.pdf" title="Contact Us" class="mb-0">Apply</a>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                      Open House END                              #
	#----------------------------------------------------------------->
    <?php
include('../partials/footer.php');
?>

<!-- footer end -->
<?php
include('../partials/footer-scripts.php');
?>


</body>

</html>