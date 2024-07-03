@extends('user.layouts.app')
@section('content')
<div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h2>CART</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="best-features about-features">
    <div class="container">
        <table>
     @foreach ($cartItems as $cartItem)
     <tr>
        <td>
            <div class="col-md-12">
          <div class="right-image">
            <img src="{{$cartItem->image}}" alt="">
          </div>
        </div>
        </td>
           <td>
            <div class="col-md-6">
          <div class="left-content">
            <h4>{{$cartItem->name}}&amp; {{$cartItem->price}}</h4>
            <p>{{$cartItem->description}}</p>
            
          </div>
        </div>
    </td>
    <td>
        <div class="buttt">
            <div class="col-md-8">
              <a href="/buy?id={{$cartItem->No_Produit}}">
                <div data-tooltip="Price:-$20" class="button">
                    <div class="button-wrapper">
                      <div class="text">Buy Now</div>
                        <span class="icon">
                          <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                    </svg>
                        </span>
                      </div>
                    </div>
              </a>
                
                    
                    
        </div>
        <div class="col-md-8">
            <a href="/delete_cart?id={{$cartItem->No_Produit}}">
            <button class="bin-button">
                <svg
                  class="bin-top"
                  viewBox="0 0 39 7"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
                  <line
                    x1="12"
                    y1="1.5"
                    x2="26.0357"
                    y2="1.5"
                    stroke="white"
                    stroke-width="3"
                  ></line>
                </svg>
                <svg
                  class="bin-bottom"
                  viewBox="0 0 33 39"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <mask id="path-1-inside-1_8_19" fill="white">
                    <path
                      d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"
                    ></path>
                  </mask>
                  <path
                    d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"
                    fill="white"
                    mask="url(#path-1-inside-1_8_19)"
                  ></path>
                  <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
                  <path d="M21 6V29" stroke="white" stroke-width="4"></path>
                </svg>
              </button>
            </a>
        </div>
        </div>
        
           </td>
        
        
     </tr>
     @endforeach
      </table>

    </div>
  </div>
  <style>
  .bin-button {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 55px;
  height: 55px;
  border-radius: 15px;
  background-color: rgb(255, 95, 95);
  cursor: pointer;
  border: 3px solid rgb(255, 201, 201);
  transition-duration: 0.3s;
}
.bin-bottom {
  width: 15px;
}
.bin-top {
  width: 17px;
  transform-origin: right;
  transition-duration: 0.3s;
}
.bin-button:hover .bin-top {
  transform: rotate(45deg);
}
.bin-button:hover {
  background-color: rgb(255, 0, 0);
}
.bin-button:active {
  transform: scale(0.9);
}

    .button {
  --width: 100px;
  --height: 35px;
  --tooltip-height: 35px;
  --tooltip-width: 90px;
  --gap-between-tooltip-to-button: 18px;
  --button-color: #222;
  --tooltip-color: #fff;
  width: var(--width);
  height: var(--height);
  background: var(--button-color);
  position: relative;
  text-align: center;
  border-radius: 0.45em;
  font-family: "Arial";
  transition: background 0.3s;
}

.button::before {
  position: absolute;
  content: attr(data-tooltip);
  width: var(--tooltip-width);
  height: var(--tooltip-height);
  background-color: #555;
  font-size: 0.9rem;
  color: #fff;
  border-radius: .25em;
  line-height: var(--tooltip-height);
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 10px);
  left: calc(50% - var(--tooltip-width) / 2);
}

.button::after {
  position: absolute;
  content: '';
  width: 0;
  height: 0;
  border: 10px solid transparent;
  border-top-color: #555;
  left: calc(50% - 10px);
  bottom: calc(100% + var(--gap-between-tooltip-to-button) - 10px);
}

.button::after,.button::before {
  opacity: 0;
  visibility: hidden;
  transition: all 0.5s;
}

.text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.button-wrapper,.text,.icon {
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  color: #fff;
}

.text {
  top: 0
}

.text,.icon {
  transition: top 0.5s;
}

.icon {
  color: #fff;
  top: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon svg {
  width: 24px;
  height: 24px;
}

.button:hover {
  background: #222;
}

.button:hover .text {
  top: -100%;
}

.button:hover .icon {
  top: 0;
}

.button:hover:before,.button:hover:after {
  opacity: 1;
  visibility: visible;
}

.button:hover:after {
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) - 20px);
}

.button:hover:before {
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button));
}




    table{
        border: 2px solid blue;
    }
    td , tr{
        border: 2px solid blue;
    }
    .buttt{
        display: flex;
        margin: 10px;
    }
  </style>
@endsection