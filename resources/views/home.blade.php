<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kudu LMS</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section style="height:100%; width: 100%; box-sizing: border-box; background-color: #141432">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .modal-backdrop.show{
        background-color: #707092;
        opacity: 0.6;
      }
      .btn-close, .btn-close:hover{
          color: #FFF;
        }
      .modal-header-4-3.modal {
        top: 2rem;
      }
      .header-4-3 .navbar,
      .hero-header-4-3 {
        padding: 3rem 2rem;
      }
      .header-4-3 .navbar-dark .navbar-nav .nav-link {
        font-size: 18px;
        color: #707092;
        font-weight: 300;
        line-height: 1.5rem;
      }
      .header-4-3 .navbar-dark .navbar-nav .nav-link:hover {
        font-size: 18px;
        color: #E7E7E8;
        font-weight: 600;
        line-height: 1.5rem;}
      .header-4-3 .navbar-dark .navbar-nav .active > .nav-link,
      .header-4-3 .navbar-dark .navbar-nav .nav-link.active,
      .header-4-3 .navbar-dark .navbar-nav .nav-link.show,
      .header-4-3 .navbar-dark .navbar-nav .show > .nav-link {
        font-weight: 600;
      }
      .header-4-3 .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }
      .header-4-3 .navbar-dark .navbar-toggler {
        border: none;
      }
      .modal-content-header-4-3 .modal-header,
      .modal-content-header-4-3 .modal-footer {
        border: none;
      }
      .btn:focus, .btn:active {
        outline: none !important;
      }
      .btn-fill-header-4-3 {
        background-color: #524EEE;
        border: none;
        border-radius: 12px;
        color: #ffffff;
        font-weight: 600;
        padding: 12px 32px 12px 32px;
        font-size: 18px;
      }
      .btn-fill-header-4-3:hover {
        color: #FFFFFF;
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .btn-no-fill-header-4-3{
        color: #E7E7E8;
        font-weight: 300; 
        line-height: 1.75rem;
        padding: 12px 32px 12px 32px;
        font-size: 18px;
      }
      .btn-no-fill-header-4-3:hover{
        color: #E7E7E8;
      }
      .modal-header-4-3 .modal-dialog .modal-content {
        border-radius: 8px;
        background-color: #FFFFFF;
        border: none;
      }
      .responsive-header-4-3 li a {
        padding: 1rem 1rem;
      }
      #hero-header-4-3-img {
        height: auto;
        width: inherit;
      }
      .left-column-header-4-3{
          margin-bottom: 0.75rem;
          width: 100%;
      }
      .text-caption-header-4-3 {
          margin-bottom: 2rem;
          line-height: 1.625;
          font-size: 0.875rem;
          line-height: 1.25rem;
          font-weight: 600;
          color: #FB6262;
      }
      .title-text-big-header-4-3{
          font-weight: 600;
          margin-bottom: 2rem;
          font-size: 2.25rem;
          line-height: 2.5rem;
          color: #CBCBD2;
      }
      .title-text-small-header-4-3{
          font-weight: 600;
          margin-bottom: 2rem;
          font-size: 2.25rem;
          line-height: 2.5rem;
          color: #CBCBD2;
          padding-left: 0;
          padding-right: 0;
      }
      .div-button-header-4-3{
            margin-left: 0;
            margin-right: 0;
      }
      .btn-try-header-4-3{
          font-weight: 600;
          color: #FFFFFF;
          padding: 1rem 1.5rem 1rem 1.5rem;
          font-size: 1rem;
          line-height: 1.5rem;
          border-radius: 0.75rem;
          background-color: #524EEE;
          margin-bottom: 1rem;
          margin-right: 0;
          border: none;
      }
      .btn-try-header-4-3:hover{
        color: #FFFFFF;
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .btn-outline-header-4-3{
          font-weight: 400;
          border: 1px solid #707092;
          color:#707092;
          padding: 1rem 1.5rem 1rem 1.5rem;
          font-size: 1rem;
          line-height: 1.5rem;
          border-radius: 0.75rem;
          background-color: transparent;
          margin-bottom: 1rem;
      }
      .btn-outline-header-4-3:hover{
          border: 1px solid #FFFFFF;
          color: #FFFFFF;
      }
      .btn-outline-header-4-3:hover div path{
        fill: #FFFFFF;
      }
      .right-column-header-4-3{
          width: 100%;
      }
      @media (min-width: 576px) {
        .modal-header-4-3 .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }
        .header-4-3 .navbar {
          padding: 3rem 2rem;
        }
        .hero-header-4-3 {
          padding: 3rem 2rem 5rem 2rem;
        }
        .title-text-big-header-4-3{
            font-size: 3rem;
            line-height: 1.2;
        }
        .title-text-small-header-4-3{
            font-size: 3rem;
            line-height: 1.2;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .div-button-header-4-3{
            margin-left: 0;
            margin-right: 0.75rem;
        }
        .btn-try-header-4-3{
            margin-bottom: 0;
            margin-right: 0.75rem;
        }
        .btn-outline-header-4-3{
            margin-bottom: 0;
        }
      }
      @media (min-width: 768px) {
        .header-4-3 .navbar {
          padding: 3rem 4rem;
        }
        .hero-header-4-3 {
          padding: 3rem 4rem 5rem 4rem;
        }
        .left-column-header-4-3{
            margin-bottom: 3rem;
        }
        .title-text-small-header-4-3{
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .div-button-header-4-3{
            margin-left: 0;
            margin-right: 0.5rem;
        }
        .btn-try-header-4-3{
            margin-right: 0.5rem;
        }
      }
      @media (min-width: 992px) {
        .header-4-3 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }
        .header-4-3 .navbar {
          padding: 3rem 6rem;
        }
        .hero-header-4-3 {
          padding: 3rem 6rem 5rem 6rem;
        }
        .left-column-header-4-3{
            width: 50%;
            margin-bottom: 0;
        }
        .title-text-big-header-4-3{
            font-size: 3.75rem;
            line-height: 1.2;
        }
        .title-text-small-header-4-3{
            font-size: 3.75rem;
            line-height: 1.2;
        }
        .div-button-header-4-3{
            margin-left: 0;
            margin-right: 2rem;
        }
        .btn-try-header-4-3{
            margin-right: 2rem;
        }
        .right-column-header-4-3{
            width: 50%;
        }
      }
    </style>
    <div class="header-4-3" style="font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a href="/">
        <img style="margin-right:0.75rem" src="https://kudukomunikasi.id/wp-content/uploads/2021/03/cropped-logo-90x91-1.jpeg" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-4-3">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--mobile-->
      <div class="modal-header-4-3 modal fade" id="targetModal-header-4-3" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-4-3" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-content-header-4-3" style="background-color: #141432;">
            <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
              <a class="modal-title" id="targetModalLabel-header-4-3">
                <img style="margin-top:0.5rem" src="https://kudukomunikasi.id/wp-content/uploads/2021/03/cropped-logo-90x91-1.jpeg" alt="">
              </a>
              <button type="button" class="close-header-4-3 btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
              <ul class="navbar-nav responsive-header-4-3 me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#" style="color: #E7E7E8;">Utama</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mengenai Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Panduan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak</a>
                </li>
              </ul>
            </div>
            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
              <button class="btn btn-default btn-no-fill-header-4-3">Daftar</button>
              <button class="btn btn-fill-header-4-3">Masuk</button>
            </div>
          </div>
        </div>
      </div>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-4-3">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/" style="color: #E7E7E8;">Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mengenai Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <button class="btn btn-default btn-no-fill-header-4-3">Daftar</button>
        <button class="btn btn-fill-header-4-3">Masuk</button>
      </div>
    </nav>    

    <div>
      <div class="mx-auto d-flex flex-lg-row flex-column hero-header-4-3">
        <!-- Left Column -->
        <div class="left-column-header-4-3 d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
          <p class="text-caption-header-4-3">FREE 30 DAY TRIAL</p>
          <h1 class="title-text-big-header-4-3 d-lg-inline d-none">The best way<br> to organize your online learning</h1>
          <h1 class="title-text-small-header-4-3 d-lg-none d-inline">The best way to organize your online learning</h1>
          <div class="div-button-header-4-3 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
            <button class="btn d-inline-flex mb-md-0 btn-try-header-4-3">Try it free</button>
            <button class="btn btn-outline-header-4-3">                  
              <div class="d-flex align-items-center">
              <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9293 8L6.66668 5.158V10.842L10.9293 8ZM12.9173 8.27734L5.85134 12.988C5.80115 13.0214 5.74283 13.0406 5.6826 13.0435C5.62238 13.0463 5.5625 13.0328 5.50934 13.0044C5.45619 12.9759 5.41175 12.9336 5.38075 12.8818C5.34976 12.8301 5.33337 12.771 5.33334 12.7107V3.28934C5.33337 3.22904 5.34976 3.16989 5.38075 3.11817C5.41175 3.06645 5.45619 3.0241 5.50934 2.99564C5.5625 2.96719 5.62238 2.95368 5.6826 2.95656C5.74283 2.95944 5.80115 2.9786 5.85134 3.012L12.9173 7.72267C12.963 7.75311 13.0004 7.79435 13.0263 7.84273C13.0522 7.89111 13.0658 7.94513 13.0658 8C13.0658 8.05488 13.0522 8.1089 13.0263 8.15728C13.0004 8.20566 12.963 8.2469 12.9173 8.27734Z" fill="#707092"/>
              </svg>                                      
              Watch the video
              </div>
            </button>
          </div>
        </div>
        <!-- Right Column -->
        <div class="right-column-header-4-3 text-center d-flex justify-content-lg-end justify-content-center pe-0">
          <img id="img-fluid" style="display: block;max-width: 100%;height: auto;" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header4/Header-4-3.png" alt="">
        </div>

      </div>
    </div>
    </div>
    
  </section><section style="height:100%; width: 100%; box-sizing: border-box; background-color: #141432">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .btn:focus, .btn:active {
        outline: none !important;
      }
      .title-text-content-2-3 {
        padding-top: 5rem;
        margin-bottom: 3rem;
      }
      .text-title-content-2-3 {
        color: #FFFFFF;
        margin-bottom: 0.625rem;
        font-size: 2.25rem;
        line-height: 2.5rem;
        font-weight: 600;
      }
      .text-caption-content-2-3 {
        color: #707092;
        font-weight: 300;
      }
      .column-content-2-3 {
        padding-left: 2.25rem;
        padding-right: 2.25rem;
        padding-top: 2rem;
        padding-bottom: 2rem;
      }
      .icon-content-2-3 {
        margin-bottom: 1.5rem;
      }
      .icon-content-2-3-title {
        font-size: 1.5rem;
        line-height: 2rem;
        margin-bottom: 0.625rem;
        color: #FFFFFF;
      }
      .icon-content-2-3-caption {
        font-size: 1rem;
        line-height: 1.625;
        letter-spacing: 0.025em;
        color: #707092;
      }
      .card-content-2-3 {
        padding: 1.75rem;
        background-color: #292952;
        border-radius: 0.75rem;
        border: 1px solid #4C4C6D;
      }
      .card-block-content-2-3 {
        padding: 1rem 1rem 5rem 1rem;
        }
      .card-content-2-3-title {
        font-size: 1.5rem;
        line-height: 2rem;
        margin-bottom: 0.625rem;
        color: #FFFFFF;
        font-weight: 600;
      }
      .card-content-2-3-caption {
        font-size: 1rem;
        line-height: 1.5rem;
        color: #707092;
        letter-spacing: 0.025em;
        font-weight: 300;
        margin-bottom: 0;
      }
      .btn-card-content-2-3 {
        font-size: 1rem;
        line-height: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        background-color: #524EEE;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
        border: none;
      }
      .btn-card-content-2-3:hover {
        color: #ffffff;
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      .btn-outline-content-2-3 {
        font-size: 1rem;
        line-height: 1.5rem;
        color: #57578E;
        border: 1px solid #57578E;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }
      .btn-outline-content-2-3:hover {
        border: 1px solid #FFFFFF;
        color: #FFFFFF;
      }
      .card-text-content-2-3 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }
      .grid-padding-content-2-3 {
        padding: 0rem 1rem 3rem 1rem;
      }
      @media (min-width: 576px) {
        .grid-padding-content-2-3 {
          padding: 0rem 2rem 3rem 2rem;
        }
        .card-block-content-2-3 {
        padding: 3rem 2rem 5rem 2rem;
        }
      }
      @media (min-width: 768px) {
        .grid-padding-content-2-3 {
          padding: 0rem 4rem 3rem 4rem;
        }
        .card-block-content-2-3 {
        padding: 3rem 4rem 5rem 4rem;
        }
      }
      @media (min-width: 992px) {
        .grid-padding-content-2-3 {
          padding: 1rem 6rem 3rem 6rem;
        }
        .card-block-content-2-3 {
        padding: 3rem 6rem 5rem 6rem;
        }
        .column-content-2-3 {
        padding-left: 2.25rem;
        padding-right: 2.25rem;
        padding-top: 0;
        padding-bottom: 0;
      }
      }
      @media (min-width: 1200px) {
        .grid-padding-content-2-3 {
          padding: 1rem 10rem 3rem 10rem;
        }
        .card-block-content-2-3 {
        padding: 3rem 6rem 5rem 6rem;
        }
        .card-btn-space-content-2-3 {
          margin-top: 15px;
          margin-bottom: 15px;
        }
        .btn-card-content-2-3 {
          width: 95%;
          float: right;
        }
        .btn-outline-content-2-3 {
          width: 95%;
          float: right;
        }
      }
      @media (max-width: 980px) {
        .card-btn-space-content-2-3 {
          width: 100%;
        }
      }
    </style>
    <div style="font-family: 'Poppins', sans-serif;">

    <div class="text-center title-text-content-2-3">
      <h1 class="text-title-content-2-3">3 Keys Benefit</h1>
      <p class="text-caption-content-2-3" style="  margin-left: 3rem; margin-right: 3rem;">You can easily manage your business with a powerful tools</p>
    </div>

    <div class="grid-padding-content-2-3 text-center">
      <div class="row">
        <div class="col-lg-4 column-content-2-3">
          <div class="icon-content-2-3">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png" alt="">
          </div>
            <h3 class="icon-content-2-3-title">Easy to Operate</h3>
            <p class="icon-content-2-3-caption">This can easily help you to<br>  
              grow up your business fast</p>            
        </div>
        <div class="col-lg-4 column-content-2-3">
          <div class="icon-content-2-3">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png" alt="">
          </div>
            <h3 class="icon-content-2-3-title">Real-Time Analytic</h3>
            <p class="icon-content-2-3-caption">With real-time analytics, you<br>
              can check data in real time</p>
        </div>
        <div class="col-lg-4 column-content-2-3">
          <div class="icon-content-2-3">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png" alt="">
          </div>
            <h3 class="icon-content-2-3-title">Very Full Secured</h3>
            <p class="icon-content-2-3-caption">With real-time analytics, we<br>
              will guarantee your data</p>
        </div>
      </div>
    </div>

    <div class="card-block-content-2-3">
      <div class="card-content-2-3">
        <div class="d-flex flex-lg-row flex-column align-items-center">
          <div class="me-lg-3">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png" alt="">          
          </div>
          <div class="flex-grow-1 text-lg-start text-center card-text-content-2-3">
            <h3 class="card-content-2-3-title">Fast Business Management in 30 minutes</h3>
            <p class="d-none d-lg-block card-content-2-3-caption">Our tools for business analysis helps an organization understand<br> 
              market or business development.</p>
            <p class="d-block d-lg-none card-content-2-3-caption">Our tools for business analysis helps an organization understand 
              market or business development.</p>
          </div>
          <div class="card-btn-space-content-2-3">
            <button class="btn btn-card-content-2-3">Buy Now</button>
            <button class="btn btn-outline-content-2-3">Demo Version</button>
          </div>
        </div>
      </div>
    </div>

    </div>
    
  </section><section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #141432;">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .list-space-footer-2-3 {
  margin-bottom: 1.25rem;
}
.list-space-footer-2-3-title {
  margin-bottom: 1.5rem;
}
.footer-text-title-footer-2-3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #FFFFFF;
}
.list-menu-footer-2-3 {
  color: #707092;
  text-decoration: none !important;
  cursor: pointer;
}
.list-menu-footer-2-3:hover {
  color: #FFFFFF;
}
hr.hr-footer-2-3 {
  margin: 0;
  border: 0;
  border-top: 1px solid rgba(46, 46, 90, 1);
}
.border-color-footer-2-3 {
  color: #707092;
}
.footer-link-footer-2-3 {
  margin-right: 1.25rem;
  color: #707092;
}
.footer-link-footer-2-3:hover {
  color: #FFFFFF;
  cursor: pointer;
}
.social-media-c-footer-2-3:hover circle,
.social-media-p-footer-2-3:hover path {
  fill: #FFFFFF;
  cursor: pointer;
}
.footer-info-space-footer-2-3 {
  padding-top: 3rem;
}
.social-media-left-footer-2-3 {
  margin-right: 1.25rem;
}
.social-media-center-1-footer-2-3 {
  margin-right: 1.25rem;
}
.social-media-center-2-footer-2-3 {
  margin-right: 1.25rem;
}
.list-footer-footer-2-3 {
  padding: 5rem 1rem 6rem 1rem;
}
.info-footer-footer-2-3 {
  padding-left: 1rem;
  padding-right: 1rem;
  padding-bottom: 3rem;
}
@media (max-width: 980px) {
  .footer-responsive-space-footer-2-3 {
    margin-bottom: 1.25rem;
    margin-top: 1.25rem;
  }
}
@media (min-width: 576px) {
  .list-footer-footer-2-3 {
    padding: 5rem 2rem 6rem 2rem;
  }
  .info-footer-footer-2-3 {
    padding-left: 2rem;
    padding-right: 2rem;
    padding-bottom: 3rem;
  }
}
@media (min-width: 768px) {
  .list-footer-footer-2-3 {
    padding: 5rem 4rem 6rem 4rem;
  }
  .info-footer-footer-2-3 {
    padding-left: 4rem;
    padding-right: 4rem;
    padding-bottom: 3rem;
  }
}
@media (min-width: 992px) {
  .list-footer-footer-2-3 {
    padding: 5rem 6rem 6rem 6rem;
  }
  .info-footer-footer-2-3 {
    padding-left: 6rem;
    padding-right: 6rem;
    padding-bottom: 3rem;
  }
}
    </style>
    <div  style="font-family: 'Poppins', sans-serif;">
    <div class="list-footer-footer-2-3">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="">
            <div class="list-space-footer-2-3">
                <img src="https://kudukomunikasi.id/wp-content/uploads/2021/03/cropped-logo-90x91-1.jpeg" alt="">
            </div>
          <nav style="list-style-type:none;">
            <li class="list-space-footer-2-3">
              <a href="/" class="list-menu-footer-2-3">Utama</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Mengenai Kami</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Panduan</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Kontak</a>
            </li>
          </nav>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h2 class="footer-text-title-footer-2-3 list-space-footer-2-3-title">Product</h2>
          <nav style="list-style-type:none;">
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Real Time Analytic</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Easy to Operate</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Full Secured</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Analytic Tool</a>
            </li>
            <li class="list-space-footer-2-3">
                <a class="list-menu-footer-2-3">Story</a>
            </li>
          </nav>
        </div>
        <div class="col-lg-3 col-md-6">
          <h2 class="footer-text-title-footer-2-3 list-space-footer-2-3-title">Company</h2>
          <nav style="list-style-type:none;">
              <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Contact Us</a>
              </li>
              <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Blog</a>
              </li>
              <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Culture</a>
              </li>
              <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Security</a>
              </li>
          </nav>
        </div>
        <div class="col-lg-3 col-md-6">
          <h2 class="footer-text-title-footer-2-3 list-space-footer-2-3-title">Support</h2>
          <nav style="list-style-type:none;">
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Getting Started</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Help Center</a>
            </li>
            <li class="list-space-footer-2-3">
              <a class="list-menu-footer-2-3">Server Status</a>
            </li>
          </nav>
        </div>
      </div>
    </div>

    <div class="border-color-footer-2-3 info-footer-footer-2-3">
      <div class="">              
        <hr class="hr-footer-2-3">
      </div>
        <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space-footer-2-3">
            <div class="d-flex title-font font-medium align-items-center" style="cursor: pointer;">
                <svg class="social-media-c-footer-2-3 social-media-left-footer-2-3" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#707092"/>
                  <g clip-path="url(#clip0)">
                  <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z" fill="#141432"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                  </clipPath>
                  </defs>
                </svg>
                <svg class="social-media-c-footer-2-3 social-media-center-1-footer-2-3" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#707092"/>
                  <g clip-path="url(#clip0)">
                  <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="#141432"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                  </clipPath>
                  </defs>
                </svg>
                <svg class="social-media-p-footer-2-3 social-media-center-2-footer-2-3" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#707092"/>
                  <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#707092"/>
                  <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z" fill="#707092"/>
                </svg>
                <svg class="social-media-c-footer-2-3 social-media-right" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#707092"/>
                  <g clip-path="url(#clip0)">
                  <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z" fill="#141432"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                  </clipPath>
                  </defs>
                </svg>
            </div>
            <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center footer-responsive-space-footer-2-3">
              <a class="footer-link-footer-2-3" style="text-decoration: none;">Terms of Service</a>
              <span style="margin-right:1.25rem">|</span>
              <a class="footer-link-footer-2-3" style="text-decoration: none;">Privacy Policy</a>
              <span style="margin-right:1.25rem">|</span>
              <a class="footer-link-footer-2-3" style="text-decoration: none;">Licenses</a>
            </nav>
            <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                <p style="margin: 0">Copyright ©  2021 KUDU</p>
              </nav>
          </div>
    </div>
  </div>

  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>