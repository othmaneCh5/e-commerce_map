<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Map Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    @livewireStyles
  </head>
  <body>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Map <em>Services</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/products_user">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about_user">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/open_contact">Contact Us</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                  @auth
                  <li class="nav-item">
                    <a href="/cart_page">
                      <button data-quantity="{{$numCarts}}" class="btn-cart">
                      <svg class="icon-cart" viewBox="0 0 24.38 30.52" height="30.52" width="24.38" xmlns="http://www.w3.org/2000/svg">
                        <title>icon-cart</title>
                        <path transform="translate(-3.62 -0.85)" d="M28,27.3,26.24,7.51a.75.75,0,0,0-.76-.69h-3.7a6,6,0,0,0-12,0H6.13a.76.76,0,0,0-.76.69L3.62,27.3v.07a4.29,4.29,0,0,0,4.52,4H23.48a4.29,4.29,0,0,0,4.52-4ZM15.81,2.37a4.47,4.47,0,0,1,4.46,4.45H11.35a4.47,4.47,0,0,1,4.46-4.45Zm7.67,27.48H8.13a2.79,2.79,0,0,1-3-2.45L6.83,8.34h3V11a.76.76,0,0,0,1.52,0V8.34h8.92V11a.76.76,0,0,0,1.52,0V8.34h3L26.48,27.4a2.79,2.79,0,0,1-3,2.44Zm0,0"></path>
                      </svg>
                      <span class="quantity"></span>
                    </button>
                    </a>
                    

                  </li>
                  <li class="nav-item">
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
                        </nav>
                      </label>
</div>
                    
                      


                </li>
                  @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                      @if (Route::has('register'))
                          <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                  @endauth
              </div>
          @endif
          </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
              
              - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
  
  
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/isotope.js"></script>
      <script src="assets/js/accordions.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
       

  function toggleDescription(event) {
    event.preventDefault();
    const link = event.target;
    const description = link.previousElementSibling;
    const fullText = description.getAttribute('data-full-text');
    const isExpanded = description.classList.toggle('expanded');

    if (isExpanded) {
        description.textContent = fullText;
        link.textContent = 'See less';
    } else {
        description.textContent = fullText.slice(0, 70) + '...';
        link.textContent = 'See more';
    }
}      
document.addEventListener('DOMContentLoaded', function() {
    const descriptions = document.querySelectorAll('.description');
    descriptions.forEach(desc => {
        const fullText = desc.getAttribute('data-full-text');
        if (fullText.length > 70) {
            desc.textContent = fullText.slice(0, 70) + '...';
            const link = document.createElement('a');
            link.href = '#';
            link.className = 'see-more';
            link.textContent = 'See more';
            link.onclick = toggleDescription;
            desc.parentElement.appendChild(link);
        }
    });
});

      </script>
  <style>
     .btn-cart {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 10px;
  border: none;
  background-color: transparent;
  position: relative;
  bottom: 12px;
}

.btn-cart::after {
  content: attr(data-quantity);
  width: fit-content;
  height: fit-content;
  position: absolute;
  font-size: 20px;
  color: rgb(0, 0, 0);
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  opacity: 1; /* Make it visible */
  visibility: visible; /* Make it visible */
  transition: .2s linear;
  top: 105%; /* Adjust top to match hover state */
}

.icon-cart {
  width: 24.38px;
  height: 30.52px;
  transition: .2s linear;
  transform: scale(1.2); /* Apply scale transformation */
}

.icon-cart path {
  fill: rgb(186, 34, 233); /* Change fill color */
  transition: .2s linear;
}

.quantity {
  display: none;
}


  .popup {
    --burger-line-width: 1.125em;
    --burger-line-height: 0.125em;
    --burger-offset: 0.625em;
    --burger-bg: #00bf63;
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
    --nav-button-hover-bg: #00bf63;
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
    color: #00bf63;
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
  
  </style>
  
    </body>
  
  </html>
  
  
  
     