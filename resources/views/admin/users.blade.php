@extends('admin.layouts.app');
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">users</h4>
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
@endsection