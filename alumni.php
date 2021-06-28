<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'Alumni-Directory';
include('./partials/head.php');

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55371745-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-55371745-1');
</script>

<body class="mba open-house center-page alumni">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="header-video">
            <video id="myvideo" width="1000" height="400" autoplay loop muted playsinline>
                <source class="active" src="images/alumni_highres.mp4" data-mobile="images/alumni_lowres.mp4" data-desktop="images/alumni_highres.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <?php
include('./partials/navbar.php'); 
?>

            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content">
                <h1>Alumni Directory</h1>
                <div class="page-detail">Our alumni network is an ever-expanding community of professionals, management gurus, entrepreneurs and executives. While we educate for a better future, we also provide you with an active platform to connect, network and discover endless opportunities with your fellow alma mater.</div>
                <div class="tabs">
                    <div class="tab active" data-tab="financial-institutions">Financial Institutions</div>
                    <div class="tab" data-tab="industrial-conglomerates">Industrial Conglomerates</div>
                    <div class="tab" data-tab="service-sector">Service Sector</div>
                </div>
                <div class="center-page-content">
                    <!-- === Tab 1: Financial Institutions === -->
                    <div class="tab-section active" data-tab="financial-institutions">
                        <div class="left-side">
                            <ul>
                                <li>Allied Bank Limited</li>
                                <li>Adamjee Insurance Company Limited</li>
                                <li>Business Recorder</li>
                                <li>Central Depository Company of Pakistan</li>
                                <li>Chartered Institute of Management Accountants</li>
                                <li>Concern Worldwide Pakistan</li>
                                <li>EFU Life Assurance Ltd</li>
                                <li>First Capital Group</li>
                                <li>Habib Bank Limited</li>
                                <li>HSBC Bank Middle East Limited</li>
                            </ul>
                        </div>
                        <div class="right-side">
                            <ul>
                                <li>IGI Investment Bank</li>
                                <li>Inland Revenue</li>
                                <li>JS Investments Limited</li>
                                <li>JS Private Equity</li>
                                <li>Karachi Education Initiative</li>
                                <li>Meezan Bank Limited</li>
                                <li>National Management Consultants (Pvt.) Ltd.</li>
                                <li>Soneri Bank Limited</li>
                                <li>United Bank Fund Managers Ltd.</li>
                                <li>United Bank Limited</li>
                            </ul>
                        </div>
                    </div>
                    <!-- === END Tab 1: Financial Institutions === -->
                    <!-- === Tab 2: Industrial Conglomerates === -->
                    <div class="tab-section" data-tab="industrial-conglomerates">
                        <div class="left-side">
                            <ul>
                                <li>ABCO Industries (Pvt.) Limited</li>
                                <li>AkzoNobel</li>
                                <li>AkzoNobel - Soda Ash Business</li>
                                <li>Arif Habib Corporation</li>
                                <li>Atlas Battery Limited</li>
                                <li>Bayer CropScience Private Limited</li>
                                <li>Creek Developers</li>
                                <li>Dawood Corporation Private Ltd</li>
                                <li>Dawood Hercules Chemical Limited</li>
                                <li>Dawood Hercules Corporation</li>
                                <li>Dawood Lawrencepur Limited</li>
                                <li>Descon Engineering Limited</li>
                                <li>English Biscuit Manufacturers Pvt Ltd</li>
                                <li>Engro Corporation Limited</li>
                                <li>Engro Eximp</li>
                                <li>Engro Fertilizers Limited</li>
                                <li>Engro Foods</li>
                                <li>Engro Polymer & Chemicals Limited</li>
                                <li>Fatima Group</li>
                                <li>Fauji Fertilizer Company</li>
                                <li>GlaxoSmithKline Pakistan Limited</li>
                                <li>House of Habib</li>
                                <li>Indus Dyeing and Manufacturing</li>
                            </ul>
                        </div>
                        <div class="right-side">
                            <ul>
                                <li>International Industries Limited</li>
                                <li>International Power Global Development Ltd.</li>
                                <li>Khalil Al Sayegh Jewellery</li>
                                <li>Linde Pakistan Limited</li>
                                <li>Lotte Pakistan PTA Limited</li>
                                <li>Matco Rice Processing</li>
                                <li>Mausummery Textiles</li>
                                <li>Monsanto Pakistan Agritech (Pvt.) Ltd</li>
                                <li>National Foods</li>
                                <li>Oil & Gas Development Company Limited</li>
                                <li>Oyster Technologies Pvt. Ltd</li>
                                <li>Pak Arab Fertilizers</li>
                                <li>Pakistan Petroleum Limited</li>
                                <li>Philips Electrical Industries of Pakistan</li>
                                <li>Saif Group</li>
                                <li>Shabbir Tiles & Ceramics Limited</li>
                                <li>Soorty Enterprises (Pvt.) Limited</li>
                                <li>The Dawood Foundation</li>
                                <li>The Dawood Group</li>
                                <li>Unilever Pakistan Limited</li>
                                <li>United Towel Exporters</li>
                                <li>Yunus Textile Mills Limited</li>
                            </ul>
                        </div>
                    </div>
                    <!-- === END Tab 2: Industrial Conglomerates === -->
                    <!-- === Tab 3: service-sector === -->
                    <div class="tab-section" data-tab="service-sector">
                        <div class="left-side">
                            <ul>
                                <li>Abbott Laboratories Pakistan Limited</li>
                                <li>Aga Khan University Hospital</li>
                                <li>Al-Mumtaz Corporation</li>
                                <li>Aqeel Karim Dhedhi Securities</li>
                                <li>Brooke Hospital for Animals (Pakistan)</li>
                                <li>Burque Corporation (Pvt.) Ltd.</li>
                                <li>Cloud BPO Pvt. Ltd.</li>
                                <li>Metro Securities (Pvt.) Limited</li>
                            </ul>
                        </div>
                        <div class="right-side">
                            <ul>
                                <li>National Management Consultants (Pvt.) Ltd.</li>
                                <li>Pakistan International Airlines</li>
                                <li>Riphah International University</li>
                                <li>Roots School System</li>
                                <li>S.M. Masood & Company Chartered Accountants</li>
                                <li>Shirazi Trading Company (Private) Ltd.</li>
                                <li>Sidat Hyder Morshed Associates (Pvt.) Ltd.</li>
                                <li>Sukkur Institute of Business Administration</li>
                            </ul>
                        </div>
                    </div>
                    <!-- === END Tab 3: service-sector === -->
                </div>
            </div>
            <!--====== COntent END  ====== -->
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