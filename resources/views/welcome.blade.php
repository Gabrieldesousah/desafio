@include('layouts.header')

@include('layouts.navbar')

  @include('elements.modal')

  @include('elements.intro')
  
      <!--   *** FEATURES ***-->
      <section id="features" class="section">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <div class="icon"><i class="pe-7s-diamond"></i></div>
              <h2>First great feature</h2>
              <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.  </p>
            </div>
            <div class="col-md-6">
              <p><img alt="" src="img/features1.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section class="section background-gray-lightest">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <p><img alt="" src="img/features2.png" class="img-responsive"></p>
            </div>
            <div class="col-md-6">
              <div class="icon brand-terciary"><i class="pe-7s-rocket"></i></div>
              <h2>Second super feature</h2>
              <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
            </div>
          </div>
        </div>
      </section>

      <!--   *** FEATURES END ***  -->

  @include('elements.partners')

  @include('elements.features')

  @include('elements.text')

  @include('elements.integrations')

  @include('elements.testimonials')

  @include('elements.join')

  @include('elements.contact')


@include('layouts.footer')