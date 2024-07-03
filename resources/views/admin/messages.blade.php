@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title">Messages</h4>
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
@endsection