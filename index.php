<?php @include './components/common/header.php' ?>

<body>
  <section id="hero-section">
    <?php @include './components/common/navbar.php' ?>
  </section>

  <section id="premium-collection" class="py-5">
    <div class="container">
      <div class="text py-5">
        <h3 class="text-center mb-5">Premium Collection</h3>
        <p class="text-center mt-5">Free shipping with orders over $400</p>
      </div>
      <div class="row px-5 my-5">
        <div class="col-md-4 column-image">
          <img src="./assets/img/premium-1.jpg" alt="Image 1" class="img-thumbnail" height="800">
        </div>
        <div class="col-md-4 column-image">
          <img src="./assets/img/premium-2.jpg" alt="Image 2" class="img-thumbnail" height="800">
        </div>
        <div class="col-md-4 column-image">
          <img src="./assets/img/premium-3.jpg" alt="Image 3" class="img-thumbnail" height="800">
        </div>
      </div>
    </div>
  </section>

  <section id="our-philosofy" class="py-5 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="text py-5">
        <h1 class="text-center mb-5">OUR PHILOSOPHY</h1>
        <p class="text-center mt-5">We have produced the perfect perfume with the best scent and quality in the world</p>
      </div>
    </div>
  </section>

  <section id="featured-products" class="py-5">
    <div class="container">
      <div class="row text-center d-flex gap-3 mb-5">
        <h1>Featured products</h1>
        <p>Includes free shipping (US only)</p>
      </div>
      <div class="row gap-3">
        <div class="card col-4">
          <div class="card-header"></div>
          <div class="card-body"></div>
        </div>
        <div class="card col-4">
          <div class="card-header"></div>
          <div class="card-body"></div>
        </div>
        <div class="card col-4">
          <div class="card-header"></div>
          <div class="card-body"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="tag" class="d-flex justify-content-center align-items-center gap-3 flex-column">
    <a href="/">This Weekend</a>
    <h1>UP TO 15% OFF ON ALL PRODUCTS</h1>
    <p>Now Through December 31</p>
  </section>

  <?php @include './components/common/footer.php' ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>