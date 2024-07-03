@extends('user.layouts.app')
@section('content')
  <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="/products_user">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($products as $product)
             <div class="col-md-4">
            <div class="product-item">
              <a href="/view_product?id={{$product->No_Produit}}"><img src="{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="/view_product?id={{$product->No_Produit}}"><h4>{{$product->name}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p class="text-muted font-weight-normal description" data-full-text="{{ $product->description }}">
                  {{ Str::limit($product->description, 70) }}
              </p>
                @auth
                <form action="{{ route('add.cart') }}" method="POST">
                  @csrf
                  <input type="hidden" name="id_produit" value="{{$product->No_Produit}}">
                  <button type="submit" class="CartBtn">
                  <p class="text">Add to Cart</p>  
                </button>
                </form>
                
                @endauth
                
              </div>
            </div>
          </div>
          @endforeach
         

        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About MAP</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>La MAP est une agence de presse centrale et stratégique qui a pour mission de défendre les intérêts nationaux et de protéger la souveraineté du Royaume du Maroc dans le secteur de l’information. Elle porte haut les valeurs de déontologie et d’intégrité. Elle se hisse aux exigences les plus élevées de rigueur et de fiabilité.<br><br>La MAP, figure de proue de la diplomatie médiatique marocaine, est pleinement consciente des transformations majeures que connait le secteur des médias à l’international. La lutte contre les fake news et la désinformation, les principaux périls qui menacent la pratique journalistique et les enjeux liés à l’adaptation aux transformations technologiques du secteur médiatique sont autant de défis qui se posent à nous.</p>
              <a href="/about_user" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/mapllogo.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
<style>
  .sid{
    display: flex;
    align-items: center;
    justify-content: 
  }
  .CartBtn {
  width: 140px;
  height: 40px;
  border-radius: 12px;
  border: none;
  background-color: rgb(47, 165, 224);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition-duration: .5s;
  overflow: hidden;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.103);
  position: relative;
}
.text {
  height: 100%;
  width: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgb(17, 17, 17);
  z-index: 1;
  transition-duration: .5s;
  font-size: 1.04em;
  font-weight: 600;
  position: relative;
  top: 10px;
  right: 5px;
}
</style>
@endsection

   