<?php @include './components/common/header.php' ?>

<body id="shop-body">
  <div class="container-fluid px-5 d-flex justify-content-between mb-5 navbar position-fixed">
    <div class="navbar-logo d-flex justify-content-center align-items-center pt-2">
      <a href="../../index.php">
        <h2>HUGO BOSS</h2>
      </a>
    </div>
    <div class="navbar-links d-flex justify-content-center align-items-center pt-4">
      <ul class="d-flex list-unstyled gap-5">
        <li><a href="/" class="text-black">Home</a></li>
        <li><a href="../screens/shop.php" class="text-black">Shop</a></li>
        <li><a href="../screens/about.php" class="text-black">About</a></li>
        <li><a href="../screens/contact.php" class="text-black">Contact</a></li>
      </ul>
    </div>
  </div>
  <section id="products">
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"><img src="./assets/img/hugo-boss-bottled.jpg" alt="Image 1" class="img-thumbnail" height="800"></div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3>BOSS Amona</h3>
              <p>$149.99</p>
              <a class="border border-1 px-4 py-2 border-black text-black">View Product</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><img src="./assets/img/hugo-boss-the-scent-2.jpg" alt="Image 1" class="img-thumbnail" height="800"></div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3>BOSS Rebruta</h3>
              <p>$199.99</p>
              <a class="border border-1 px-4 py-2 border-black text-black">View Product</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><img src="./assets/img/hugo-boss-the-scent.jpg" alt="Image 1" class="img-thumbnail" height="800"></div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3>HUGO Fiora</h3>
              <p>$84.99</p>
              <a class="border border-1 px-4 py-2 border-black text-black">View Product</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header"><img src="./assets/img/hugo-boss-night.jpg" alt="Image 1" class="img-thumbnail" height="800"></div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3>BOSS Hugo</h3>
              <p>$349.99</p>
              <a class="border border-1 px-4 py-2 border-black text-black">View Product</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>