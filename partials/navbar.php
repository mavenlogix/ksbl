<div class="header-top">
    <nav id="top-navigation">
        <ul>
            <li><a href="index.html" class="<?= is_active(['index.html', '']) ?>" title="Home">Home</a></li>
            <li class="expend">
                <a href="javascript:void(0)" class="<?= is_active(['mba', 'emba', 'ms-business-analytics', 'meba', 'bs-its', 'executive-education-services']) ?>" title="Programs">Programs</a>
                <ul class="sub-menu">
                    <li><a href="mba/" title="MBA">MBA</a></li>
                    <li><a href="emba/" title="Executive MBA">Executive MBA</a></li>
                    <li><a href="ms-business-analytics/" title="MS Business Analytics">MS Business Analytics</a></li>
                    <li><a href="meba/" title="MEBA">BS MEBA</a></li>
                    <li><a href="/bs-its/" title="MEBA">BS IT&S</a></li>
                    <li><a href="executive-education-services/" title="Executive Education">Executive Education</a></li>
                </ul>
            </li>
            <li class="expend">
                <a href="javascript:void(0)" class="<?= is_active(['mba/admissions', 'mba/fee', 'mba/financial-assistance', 'mba/information-sessions', 'why-KSBL.php']) ?>" title="Admissions">Admissions</a>
                <ul class="sub-menu">
                    <li><a href="mba/admissions/" title="Admission Process">Admission Process</a></li>
                    <li><a href="mba/fee/" title="Fee Structure">Fees</a></li>
                    <li><a href="mba/financial-assistance/" title="Financial Assistance">Financial Assistance</a></li>
                    <li><a href="mba/information-sessions/" title="Open House Sessions">Open House</a></li>
                    <li><a href="why-KSBL.php" title="Why KSBL">Why KSBL</a></li>
                </ul>
            </li>
            <li><a href="blog/category/news-and-updates/" class="<?= is_active('blog/category/news-and-updates') ?>" title="News">News</a></li>
            <li><a href="alumni/success-stories.php" class="<?= is_active('alumni/success-stories.php') ?>" title="Alumni">Alumni</a></li>
        </ul>
    </nav>
    <div class="menu-serch">
        <!--  START Search -->
        <div class="search icon-link">
            <img src="images/search-icon-high.png" width="23" height="23" class="search-icon" alt="" />
            <div class="search-content header-model">
                <div class="container">
                    <h2>Search KSBL</h2>
                    <script async src="https://cse.google.com/cse.js?cx=5a67611eb2aef8e92"></script>
                    <div class="gcse-search"></div>
                </div>
            </div>
        </div>
        <!--  END Search -->
        <!--  START Navigation -->
        <div class="main-navigation icon-link">
            <img src="images/menu-icon-high.png" width="28" height="19" class="menu-icon" alt="" />
            <div class="navigation-content header-model">
                <div class="container">
                    <div class="naviagtions">
                        <a href="index.html" title="KSBL" class="hmbg-logo">
                            <img src="ksbl-menu-logo.png" width="239" alt="KSBL" />
                        </a>
                        <div class="main-menu heder-menu">
                            <ul>
                                <li><a href="index.php" class="<?= is_active(['index.html', '']) ?>" title="Home">Home</a></li>
                                <li><a href="blog/category/news-and-updates/" class="<?= is_active('blog/category/news-and-updates') ?>" title="News">News</a></li>
                                <li><a href="alumni/success-stories.php" class="<?= is_active('alumni/success-stories.php') ?>" title="Alumni">Alumni</a></li>
                                <li><a href="future-of-work.html" class="<?= is_active('future-of-work.html') ?>" title="Future of Work">Future of Work</a></li>
                            </ul>
                        </div>
                        <div class="program-services heder-menu">
                            <h3>Programs</h3>
                            <ul class="desktop-menu">
                                <li><a href="mba/" class="<?= is_active('mba') ?>" title="MBA">MBA</a></li>
                                <li><a href="emba/" class="<?= is_active('emba') ?>" title="Executive MBA">Executive MBA</a></li>
                                 <li><a href="../meba/" class="<?= is_active('memba') ?>" title="MEBA">BS MEBA</a></li>
                               <li><a href="../bs-its/" class="<?= is_active('bs-its') ?>" title="IT&S">BS IT&S</a></li>
                                <li><a href="ms-business-analytics/" class="<?= is_active('ms-business-analytics') ?>" title="MS Business Analytics">MS Business Analytics</a></li>
                                <li><a href="executive-education-services/" class="<?= is_active('executive-education-services') ?>" title="Executive Education">Executive Education</a></li>
                            </ul>
                            <ul class="mobile-menu">
                                <li><a href="mba/" class="<?= is_active('mba') ?>" title="MBA">MBA</a></li>
                                <li><a href="emba/" class="<?= is_active('emba') ?>" title="Executive MBA">Executive MBA</a></li>
                                <li><a href="ms-business-analytics/" class="<?= is_active('ms-business-analytics') ?>" title="MS Business Analytics">MS Business Analytics</a></li>
                                <li class="expend <?= is_active(['executive-education-services', 'executive-education-services/customized-programs', 'ela']) ?>">
                                    <a href="javascript:void(0)" title="Executive Education">Executive Education</a>
                                    <ul class="sub-menu">
                                        <li><a href="executive-education-services/" title="About">About</a></li>
                                        <li><a href="executive-education-services/customized-programs/" title="Custom Programs">Custom Programs</a></li>
                                        <li><a href="ela/" title="Engro Leadership Academy">Engro Leadership Academy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="admission heder-menu">
                            <h3>Admissions</h3>
                            <ul>
                                <li><a href="mba/admissions/" class="<?= is_active('mba/admissions') ?>" title="Admission Process">Admission Process</a></li>
                                <li><a href="mba/fee/" class="<?= is_active('mba/fee') ?>" title="Fee Structure">Fees</a></li>
                                <li><a href="mba/financial-assistance/" class="<?= is_active('mba/financial-assistance') ?>" title="Financial Assistance">Financial Assistance</a></li>
                                <li><a href="mba/information-sessions/" class="<?= is_active('mba/information-sessions') ?>" title="Open House Sessions">Open House</a></li>
                                <li><a href="why-KSBL.php" class="<?= is_active('why-KSBL.php') ?>" title="Why KSBL">Why KSBL</a></li>
                            </ul>
                        </div>
                        <div class="ksbl-menu heder-menu">
                            <h3>About</h3>
                            <ul>
                                <li><a href="about/" class="<?= is_active('about') ?>" title="Vision & Mission">Vision & Mission</a></li>
                                <li><a href="about/board-of-governors.html" class="<?= is_active('about/board-of-governors.html') ?>" title="Board of Governors">Board of Governors</a></li>
                                <li><a href="faculty.php" class="<?= is_active('faculty.php') ?>" title="Faculty">Faculty</a></li>
                                <li><a href="about/karachi-education-initiative/" class="<?= is_active('about/karachi-education-initiative') ?>" title="Karachi Education Initiative (KEI)">Karachi Education Initiative (KEI)</a></li>
                                <li><a href="careers.php" class="<?= is_active('careers.php') ?>" title="Jobs at KSBL">Jobs</a></li>
                                <li><a href="contact-us.php" class="<?= is_active('contact-us.php') ?>" title="Contact Us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Navigation -->
    </div><!-- Search-menu -->
</div>