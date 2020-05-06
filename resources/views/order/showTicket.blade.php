@extends('layout.main')

@section('title','Ticket')

@section('container')

  <div class="container">
    <div class="mt2 center-align table1">
      <h4>Available Tickets</h4>
      <table class="mt2 highlight">
        <thead>
          <th>No</th>
          <th>Kota Asal</th>
          <th>Kota Tujuan</th>
          <th>Tanggal Pergi</th>
          <th>Tanggal Pulang</th>
          <th>Seat Class</th>
          <th>Price</th>
        </thead>
        <tbody>
          @foreach ($ticketDetails as $ticketDetail)              
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ticketDetail->depCity}}</td>
            <td>{{$ticketDetail->arrCity}}</td>
            <td>{{$ticketDetail->pergi}}</td>
            <td>{{$ticketDetail->pulang}}</td>
            <td>{{$ticketDetail->seatClass}}</td>
            <td>
              {{$ticketDetail->price}}&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="btn waves-effect waves-light blue" type="submit">Beli Tiket</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection