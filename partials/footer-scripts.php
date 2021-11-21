
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= $url ?>js/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/script.js"></script>

   <!--  <script src="js/script-faculty.js"></script> -->
   <script>
        $('#searchfield').autocomplete({
            source: "<?= $url ?>system/suggest.php",
            minLength: 0,
            select: function( event, ui ) {
                location.href = '<?= $url ?>search.php?q=' + ui.item.value
            }
        });

        var video = document.querySelector(".videoSecondHome video");
        var btn = document.querySelector(".playBtnVid");

        function vidPlay() {

          if (video.paused) {
            video.play();
            btn.style.display = "none";
            
             
        } else {
            video.pause();
            btn.style.display = "block";
            
        }
    }


 
</script>