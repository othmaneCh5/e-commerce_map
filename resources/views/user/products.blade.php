@extends('user.layouts.app')
@section('content')
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>map products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          {{-- <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div> --}}
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
               @foreach ($products as $product)
                   <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="{{$product->image}}" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$product->name}}</h4></a>
                          <h6>{{$product->price}}</h6>
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
               @endforeach
                    
                
               
                   
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
                @if ($products->onFirstPage())
                    <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                @else
                    <li><a href="{{ $products->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a></li>
                @endif
        
                @foreach(range(1, $products->lastPage()) as $page)
                    @if ($page == $products->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $products->url($page) }}">{{ $page }}</a></li>
                    @endif
                @endforeach
        
                @if ($products->hasMorePages())
                    <li><a href="{{ $products->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
                @else
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                @endif
            </ul>
        </div>
        </div>
      </div>
    </div>

    
    
@endsection
    