<?php @include './components/common/header.php' ?>

<body class="store-class">
  <div class="container-fluid px-5 d-flex justify-content-between mb-5 navbar position-fixed store-navbar">
    <div class="navbar-logo d-flex justify-content-center align-items-center pt-2">
      <a href="../../index.php">
        <h2>HUGO BOSS</h2>
      </a>
    </div>
    <div class="navbar-links d-flex justify-content-center align-items-center pt-4">
      <ul class="d-flex list-unstyled gap-5">
        <li><a href="/">Home</a></li>
        <li><a href="../screens/shop.php" class="active">Shop</a></li>
        <li><a href="../screens/about.php">About</a></li>
        <li><a href="../screens/contact.php">Contact</a></li>
      </ul>
    </div>
  </div>

  <section id="store-section" class="py-5">
    <div class="container">
      <div class="row gap-5">
        <div class="col d-flex justify-content-end align-items-center">
          <img src="/assets/img/hugo-boss-night.jpg" alt="Image 1" class="img-thumbnail">
        </div>
        <div class="col left-col d-flex flex-column gap-3">
          <div class="texts">
            <h2 class="name">BOSS Hugo</h2>
            <h2 class="cost">$349.99</h2>
            <hr>
          </div>
          <div class="links">
            <a href=""><i class="fa fa-car" style="font-size:48px;"></i></a>
            <a href=""><i class="fa fa-car" style="font-size:48px;"></i></a>
            <a href=""><i class="fa fa-car" style="font-size:48px;"></i></a>
            <a href=""><i class="fa fa-car" style="font-size:48px;"></i></a>
            <hr>
          </div>
          <div class="intertive-wrapper">
            <h5>Quantity</h5>
            <input type="number" name="" id="">
          </div>
          <div class="interactive-wrapper2">
            <button>ADD TO CART</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>