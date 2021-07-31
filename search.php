<?php
if (!isset($_GET['debug'])) {
    ini_set('display_errors', 0);
}
$results = [];
if(isset($_GET['q'])){
    require_once './system/lib/engine.php';
    $engine = new Engine();
    $results = $engine->search($_GET['q'], $_GET['limit'] ?? 10, $_GET['page'] ?? 1);
}
?>
<!DOCTYPE html>
<html>

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

<body class="mba open-house student-achievement contact-us">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header " class="run search_page">
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
                <h1>SEARCH RESULTS</h1>
                <div class="page-detail">Your Searched For <b>'<?= htmlentities($_GET['q']) ?>'</b> - <?= $results['total_results'] ?? 0 ?> results found:</div>
                <div class="open-house-tabs">
                    <!-- === Tab 1 === -->
                    <div class="tab-section active resultsdiv">
                        <?php if(empty(@$results['results'])): ?>
                            <div>Oops, we couldn't find what you were looking for. Go back home</div>
                        <?php endif?>
                        <?php foreach ($results['results'] as $result):?>
                        <div class="content-section-search">
                            <div class="address-area">
                                <h2><?= $result['title'] ?></h2>
                                <div class="complete-address">
                                    <a href="<?= $url . $result['url'] ?>" class="font-weight-bold">www.ksbl.edu.pk > <?= implode(' > ', explode(',', $result['pretty-url'])) ?></a>
                                    <p><?= $result['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <button type="button" class="btn btn-default btn-back">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <!-- === END Tab 1 === -->
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
<script>
    window.q = '<?= $_GET['q'] ?? '' ?>';
    window.page = '<?= $_GET['page'] ?? 1 ?>';
    window.total_results = <?= $results['total_results'] ?? 0 ?>;
    function getresults() {
        $.ajax({
            type: "POST",
            url: "<?= $url ?>system/search.php",
            data: {
                q: window.q,
                page: window.page
            },
            success: function (res) {
                if(res.success && res.success.results){
                    html = '';
                    res.success.results.forEach(el => {
                        html += `<div class="content-section-search">
                            <div class="address-area">
                                <h2>${el.title}</h2>
                                <div class="complete-address">
                                    <a href="<?= $url ?>${el.url}" class="font-weight-bold">www.ksbl.edu.pk > ${el['pretty-url'].split(',').join(' > ')}</a>
                                    <p>${el.description}</p>
                                </div>
                            </div>
                        </div>`
                    });
                    $('.resultsdiv').html(html)
                }
            }
        });
    }
    $(document).ready(function () {
        $('.btn-next').on('click', function () {
            if((window.page  * 10) < window.total_results){
                window.page++
                window.history.pushState('', '', window.location.href.split('?')[0] + `?q=${window.q}&page=${window.page}`);
                getresults()
            }
        });
        $('.btn-back').on('click', function () {
            if(window.page > 1){
                window.page--
                window.history.pushState('', '', window.location.href.split('?')[0] + `?q=${window.q}&page=${window.page}`);
                getresults()
            }
        });
    });
</script>
</body>

</html>