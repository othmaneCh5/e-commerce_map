<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a id="logo" class="sidebar-brand brand-logo" href="/redirect"><h1>ADMIN</h1></a>
          <a id="logo" class="sidebar-brand brand-logo-mini" href="/redirect"><h1>A</h1></a>
        </div>
        <ul class="nav">
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/redirect">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="/products">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Products</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/redirect"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
                <a class="nav-link btn btn-success create-new-button"   href="/">View as user</a>
                
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div id="bb">
                    <label class="popup">
                                        <input type="checkbox" />
                                        <div tabindex="0" class="burger">
                                          <svg
                                            viewBox="0 0 24 24"
                                            fill="white"
                                            height="20"
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                          >
                                            <path
                                              d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"
                                            ></path>
                                          </svg>
                                        </div>
                                        <nav class="popup-window">
                                          <legend>Quick Start</legend>
                                          <ul>
                                            <li>
                                              <button>
                                                <svg
                                                  width="14"
                                                  height="14"
                                                  viewBox="0 0 24 24"
                                                  fill="none"
                                                  stroke="currentColor"
                                                  stroke-width="1.2"
                                                  stroke-linecap="round"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                >
                                                  <path
                                                    d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z"
                                                  ></path>
                                                </svg>
                                                <a href="{{ route('profile.show') }}">
                                                    {{ __('Profile') }}
                                                </a>
                                              </button>
                                            </li>
                                            <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <svg
                                                  width="14"
                                                  height="14"
                                                  viewBox="0 0 24 24"
                                                  fill="none"
                                                  stroke="currentColor"
                                                  stroke-width="1"
                                                  stroke-linecap="round"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                >
                                                  <path
                                                    d="M2.598 9h-1.055c1.482-4.638 5.83-8 10.957-8 6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5c-5.127 0-9.475-3.362-10.957-8h1.055c1.443 4.076 5.334 7 9.902 7 5.795 0 10.5-4.705 10.5-10.5s-4.705-10.5-10.5-10.5c-4.568 0-8.459 2.923-9.902 7zm12.228 3l-4.604-3.747.666-.753 6.112 5-6.101 5-.679-.737 4.608-3.763h-14.828v-1h14.826z"
                                                  ></path>
                                                </svg>
                                                {{ __('Log Out') }}
                                                {{-- <iframe src="opo" frameborder="0"></iframe> --}}
                                              </button>
                                            </form>
                                            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            @yield('content')

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                </div>
              </footer>
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="admin/assets/js/off-canvas.js"></script>
        <script src="admin/assets/js/hoverable-collapse.js"></script>
        <script src="admin/assets/js/misc.js"></script>
        <script src="admin/assets/js/settings.js"></script>
        <script src="admin/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="admin/assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
        <style>
            .popup {
      --burger-line-width: 1.125em;
      --burger-line-height: 0.125em;
      --burger-offset: 0.625em;
      --burger-bg: #356688;
      --burger-color: #333;
      --burger-line-border-radius: 0.1875em;
      --burger-diameter: 3.125em;
      --burger-btn-border-radius: calc(var(--burger-diameter) / 2);
      --burger-line-transition: 0.3s;
      --burger-transition: all 0.1s ease-in-out;
      --burger-hover-scale: 1.1;
      --burger-active-scale: 0.95;
      --burger-enable-outline-color: var(--burger-bg);
      --burger-enable-outline-width: 0.125em;
      --burger-enable-outline-offset: var(--burger-enable-outline-width);
      /* nav */
      --nav-padding-x: 0.25em;
      --nav-padding-y: 0.625em;
      --nav-border-radius: 0.375em;
      --nav-border-color: #ccc;
      --nav-border-width: 0.0625em;
      --nav-shadow-color: rgba(0, 0, 0, 0.2);
      --nav-shadow-width: 0 1px 5px;
      --nav-bg: #eee;
      --nav-font-family: "Poppins", sans-serif;
      --nav-default-scale: 0.8;
      --nav-active-scale: 1;
      --nav-position-left: unset;
      --nav-position-right: 0;
      /* if you want to change sides just switch one property */
      /* from properties to "unset" and the other to 0 */
      /* title */
      --nav-title-size: 0.625em;
      --nav-title-color: #777;
      --nav-title-padding-x: 1rem;
      --nav-title-padding-y: 0.25em;
      /* nav button */
      --nav-button-padding-x: 1rem;
      --nav-button-padding-y: 0.375em;
      --nav-button-border-radius: 0.375em;
      --nav-button-font-size: 17px;
      --nav-button-hover-bg: #2e3645;
      --nav-button-hover-text-color: #fff;
      --nav-button-distance: 0.875em;
      /* underline */
      --underline-border-width: 0.0625em;
      --underline-border-color: #ccc;
      --underline-margin-y: 0.3125em;
    }
    
    /* popup settings 👆 */
    
    .popup {
      display: inline-block;
      text-rendering: optimizeLegibility;
      position: relative;
    }
    
    .popup input {
      display: none;
    }
    
    .burger {
      display: flex;
      position: relative;
      align-items: center;
      justify-content: center;
      background: var(--burger-bg);
      width: var(--burger-diameter);
      height: var(--burger-diameter);
      border-radius: var(--burger-btn-border-radius);
      border: none;
      cursor: pointer;
      overflow: hidden;
      transition: var(--burger-transition);
      outline: var(--burger-enable-outline-width) solid transparent;
      outline-offset: 0;
    }
    
    .popup-window {
      transform: scale(var(--nav-default-scale));
      visibility: hidden;
      opacity: 0;
      position: absolute;
      padding: var(--nav-padding-y) var(--nav-padding-x);
      background: var(--nav-bg);
      font-family: var(--nav-font-family);
      color: var(--nav-text-color);
      border-radius: var(--nav-border-radius);
      box-shadow: var(--nav-shadow-width) var(--nav-shadow-color);
      border: var(--nav-border-width) solid var(--nav-border-color);
      top: calc(
        var(--burger-diameter) + var(--burger-enable-outline-width) +
          var(--burger-enable-outline-offset)
      );
      left: var(--nav-position-left);
      right: var(--nav-position-right);
      transition: var(--burger-transition);
      margin-top: 10px;
    }
    
    .popup-window legend {
      padding: var(--nav-title-padding-y) var(--nav-title-padding-x);
      margin: 0;
      color: var(--nav-title-color);
      font-size: var(--nav-title-size);
      text-transform: uppercase;
    }
    
    .popup-window ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
    }
    
    .popup-window ul button {
      outline: none;
      width: 100%;
      border: none;
      background: none;
      display: flex;
      align-items: center;
      color: var(--burger-color);
      font-size: var(--nav-button-font-size);
      padding: var(--nav-button-padding-y) var(--nav-button-padding-x);
      white-space: nowrap;
      border-radius: var(--nav-button-border-radius);
      cursor: pointer;
      column-gap: var(--nav-button-distance);
    }
    
    .popup-window ul li:nth-child(1) svg,
    .popup-window ul li:nth-child(2) svg {
      color: #1b3689;
    }
    
    .popup-window ul li:nth-child(4) svg,
    .popup-window ul li:nth-child(5) svg {
      color: rgb(153, 153, 153);
    }
    
    .popup-window ul li:nth-child(7) svg {
      color: red;
    }
    
    .popup-window hr {
      margin: var(--underline-margin-y) 0;
      border: none;
      border-bottom: var(--underline-border-width) solid
        var(--underline-border-color);
    }
    
    /* actions */
    
    .popup-window ul button:hover,
    .popup-window ul button:focus-visible,
    .popup-window ul button:hover svg,
    .popup-window ul button:focus-visible svg {
      color: var(--nav-button-hover-text-color);
      background: var(--nav-button-hover-bg);
    }
    
    .burger:hover {
      transform: scale(var(--burger-hover-scale));
    }
    
    .burger:active {
      transform: scale(var(--burger-active-scale));
    }
    
    .burger:focus:not(:hover) {
      outline-color: var(--burger-enable-outline-color);
      outline-offset: var(--burger-enable-outline-offset);
    }
    
    .popup input:checked + .burger span:nth-child(1) {
      top: 50%;
      transform: translateY(-50%) rotate(45deg);
    }
    
    .popup input:checked + .burger span:nth-child(2) {
      bottom: 50%;
      transform: translateY(50%) rotate(-45deg);
    }
    
    .popup input:checked + .burger span:nth-child(3) {
      transform: translateX(
        calc(var(--burger-diameter) * -1 - var(--burger-line-width))
      );
    }
    
    .popup input:checked ~ nav {
      transform: scale(var(--nav-active-scale));
      visibility: visible;
      opacity: 1;
    }
    .edit-button {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: 0.3s;
  overflow: hidden;
  position: relative;
  text-decoration: none !important;
}

.edit-svgIcon {
  width: 17px;
  transition-duration: 0.3s;
}

.edit-svgIcon path {
  fill: white;
}

.edit-button:hover {
  width: 120px;
  border-radius: 50px;
  transition-duration: 0.3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.edit-button:hover .edit-svgIcon {
  width: 20px;
  transition-duration: 0.3s;
  transform: translateY(60%);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
}

.edit-button::before {
  display: none;
  content: "Edit";
  color: white;
  transition-duration: 0.3s;
  font-size: 2px;
}

.edit-button:hover::before {
  display: block;
  padding-right: 10px;
  font-size: 13px;
  opacity: 1;
  transform: translateY(0px);
  transition-duration: 0.3s;
}
.delete-button {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: 0.3s;
  overflow: hidden;
  position: relative;
}

.delete-svgIcon {
  width: 15px;
  transition-duration: 0.3s;
}

.delete-svgIcon path {
  fill: white;
}

.delete-button:hover {
  width: 90px;
  border-radius: 50px;
  transition-duration: 0.3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.delete-button:hover .delete-svgIcon {
  width: 20px;
  transition-duration: 0.3s;
  transform: translateY(60%);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
}

.delete-button::before {
  display: none;
  content: "Delete";
  color: white;
  transition-duration: 0.3s;
  font-size: 2px;
}

.delete-button:hover::before {
  display: block;
  padding-right: 10px;
  font-size: 13px;
  opacity: 1;
  transform: translateY(0px);
  transition-duration: 0.3s;
}
.buts{
  display: flex;
  gap: 20px;
  position: relative;
  left: 100px;
}
.see-more{
  text-decoration: none;
  color: gray;
}
.butss{
  display: flex;
  gap: 670px;
}
.button {
  position: relative;
  width: 150px;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  border: 1px solid #40708b;
  background-color: #355d7d;
}

.button, .button__icon, .button__text {
  transition: all 0.3s;
}

.button .button__text {
  transform: translateX(30px);
  color: #fff;
  font-weight: 600;
}

.button .button__icon {
  position: absolute;
  transform: translateX(109px);
  height: 100%;
  width: 39px;
  background-color: #40708b;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button .svg {
  width: 30px;
  stroke: #fff;
}

.button:hover {
  background: #40708b;
}

.button:hover .button__text {
  color: transparent;
}

.button:hover .button__icon {
  width: 148px;
  transform: translateX(0);
}

.button:active .button__icon {
  background-color: #1e344f;
}

.button:active {
  border: 1px solid #1e344f;
}
        </style>
      </body>
    </html>