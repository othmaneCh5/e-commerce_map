@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Order Status</h4>
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
                      @foreach ($salesItems1 as $item)
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
@endsection