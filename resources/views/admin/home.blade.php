@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">users</h4>
                      <a href="/open_users"><p class="text-muted mb-1">view all</p></a>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          @foreach ($users as $user)
                            <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-account"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">{{$user->name}}</h6>
                                <p class="text-muted mb-0">{{$user->email}}</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">joined at</p>
                                <p class="text-muted mb-0">{{$user->created_at}}</p>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">${{$totalSalesAmount}}</h2>
                    
                        </div>
              
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Sales</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$numsales }}</h2>
                     
                        </div>
           
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Products</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{$numproducts}}</h2>
                          
                        </div>
                        
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">orders</h4>
                      <a href="/open_orders"><p class="text-muted mb-1 small">View all</p></a>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Client Name </th>
                            <th> Order No </th>
                            <th> Product Cost </th>
                            <th> Project </th>
                            <th> Start Date </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($salesItems as $item)
                             <tr>
                            <td>{{$item->user_name}}</td>
                            <td> {{$item->sales_id}}</td>
                            <td>{{$item->product_price}}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->date}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages</h4>
                      <a href="/open_messages"><p class="text-muted mb-1 small">View all</p></a>
                    </div>
                    <div class="preview-list">
                      @foreach ($messages as $message)
                        <div class="preview-item border-bottom">
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">{{$message->name}}</h6>
                              <p class="text-muted text-small">{{$message->created_at}}</p>
                            </div>
                            <p class="text-muted">{{$message->message}}</p>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              
            </div>
          </div>
          
        
@endsection
          