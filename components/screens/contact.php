<?php @include './components/common/header.php' ?>

<body class="contact-class">
  <div class="container-fluid px-5 d-flex justify-content-between mb-5 navbar position-fixed contact-navbar">
    <div class="navbar-logo d-flex justify-content-center align-items-center pt-2">
      <a href="../../index.php">
        <h2>HUGO BOSS</h2>
      </a>
    </div>
    <div class="navbar-links d-flex justify-content-center align-items-center pt-4">
      <ul class="d-flex list-unstyled gap-5">
        <li><a href="/webbly-hugo-boss/index.php">Home</a></li>
        <li><a href="/webbly-hugo-boss/components/screens/shop.php">Shop</a></li>
        <li><a href="/webbly-hugo-boss/components/screens/about.php">About</a></li>
        <li><a href="/webbly-hugo-boss/components/screens/contact.php" class="active">Contact</a></li>
      </ul>
    </div>
  </div>

  <section id="contact-form" class="py-5">
    <div class="container mt-5">
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="left-wrapper">
            <div class="text-component">
              <h3 class="mt-5 text-black">Contact Us</h3>
              <p>Let your visitors know how you would like to stay in touch.</p>
            </div>
            <form>
              <div class="form-group">
                <p>* Indicates required field</p>
              </div>
              <div class="form-group">
                <label for="first-name">Name *</label>
                <div class="input-group d-flex">
                  <input type="text" id="first-name" placeholder="First" required>
                  <input type="text" id="last-name" placeholder="Last" required>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" required>
              </div>
              <div class="form-group check">
                <input type="checkbox" id="marketing-checkbox" required>
                <label for="marketing-checkbox">I agree to receiving marketing and promotional <br> materials *</label>
              </div>
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-end">
          <div class="right-wrapper d-flex justify-content-center align-items-end">
            <div class="text-dark d-flex align-items-end"><img src="/webbly-hugo-boss/assets/img/map.png" alt="Image 1" class="img-thumbnail "></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>

</html>