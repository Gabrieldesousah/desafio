<style>


</style>
<section id="parallaxBar" data-speed="6" data-type="background">
    <div class="container-fluid">
    </div>
</section> 
	  <section id="text" class="text-page section-inverse background-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Text page</h2>
              <p class="lead text-center">Age lived smile six defer bed their few. Had admitting concluded too behaviour him she.</p>
              <div class="row">
                <div class="col-sm-6">
                  <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                  <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other. </p>
                </div>
                <div class="col-sm-6">
                  <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                  <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<script type="text/javascript">

$(document).ready(function(){
    $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);   
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                var coords = '50% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });    
            });
   });  
}); 
</script>