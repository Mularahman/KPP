<!--
    =========================================================
    * Soft UI Dashboard - v1.0.7
    =========================================================

    * Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
    * Copyright 2022 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (https://www.creative-tim.com/license)
    * Coded by Creative Tim

    =========================================================

    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="/backend/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="/backend/assets/img/favicon.png">
      <title>
        Soft UI Dashboard by Creative Tim
      </title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="/backend/assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="/backend/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="/backend/assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="/backend/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    </head>

    <body class="">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
            Soft UI Dashboard
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                  <i class="fa fa-chart-pie opacity-6  me-1"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="../pages/profile.html">
                  <i class="fa fa-user opacity-6  me-1"></i>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="../pages/sign-up.html">
                  <i class="fas fa-user-circle opacity-6  me-1"></i>
                  Sign Up
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="../pages/sign-in.html">
                  <i class="fas fa-key opacity-6  me-1"></i>
                  Sign In
                </a>
              </li>
            </ul>
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-round btn-sm mb-0 btn-outline-white me-2" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online Builder</a>
            </li>
            <ul class="navbar-nav d-lg-block d-none">
              <li class="nav-item">
                <a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light">Free download</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
          <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/backend/assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                  <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                  <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
              <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                  <div class="card-header text-center pt-4">
                    <h5>Register with</h5>
                  </div>

                  <div class="card-body">
                    <?php if(session()->has('error')): ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong ><?php echo e(session('error')); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                    <form action="/registeruser" method="POST" class="">
                        <?php echo csrf_field(); ?>
                        <!-- Form -->
                        <div class="form-group mb-3">
                            <label >Your Name</label>
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Username"  name="name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Your Email</label>
                            <div class="input-group">

                                <input type="email" class="form-control" placeholder="example@company.com" id="email" name="email" autofocus required>
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-3">
                                <label for="password">Your Password</label>
                                <div class="input-group">

                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <!-- End of Form -->

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember" required>
                                    <label class="form-check-label fw-normal mb-0" for="remember" >
                                        I agree to the <a href="#" class="fw-bold">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn bg-gradient-dark">Sign up</button>
                        </div>

                      <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login" class="text-dark font-weight-bolder">Sign in</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <footer class="footer py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Pricing
                </a>
              </div>
              <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                  Copyright © <script>
                    document.write(new Date().getFullYear())
                  </script> Soft by Creative Tim.
                </p>
              </div>
            </div>
          </div>
        </footer>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
      </main>
      <!--   Core JS Files   -->
      <script src="/backend/assets/js/core/popper.min.js"></script>
      <script src="/backend/assets/js/core/bootstrap.min.js"></script>
      <script src="/backend/assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="/backend/assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="/backend/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
    </body>

    </html>
<?php /**PATH D:\Belajar Web\KPP\resources\views/admin/auth/register.blade.php ENDPATH**/ ?>