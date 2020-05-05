@extends('admin.layout.main')

@section('title','Home')

@section('container')

  <div class="container">
    <div class="row">
      <div class="col s6 offset-s3">
        <div class="section">
          <ul class="collection with-header">
            <li class="collection-header"><h4>Go To</h4></li>
            <a href="{{ url('/admin/ticket') }}" class="collection-item">Ticket</a>
            <a href="{{ url('/admin/payment') }}" class="collection-item">Payment</a>
            <a href="{{ url('/admin/cash') }}" class="collection-item">Cash</a>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection