@extends('admin.layout.main')
@section('title','Ticket')
    
@section('container')
  <div class="container">
    <table class="mt2">
      <thead>
        <th>No</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Pergi</th>
        <th>Pulang</th>
        <th>Seat Class</th>
        <th>Price</th>
      </thead>
      <tbody>
        @foreach ($ticketDetails as $ticket)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ticket->depCity }}</td>
          <td>{{ $ticket->arrCity }}</td>
          <td>{{ $ticket->pergi }}</td>
          <td>{{ $ticket->pulang }}</td>
          <td>{{ $ticket->seatClass }}</td>
          <td>Rp. {{number_format($ticket ->price)}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row center-align">
      <div class="mt3">
        <a class="waves-effect waves-light btn" href="{{ url('admin/ticket/add')}}"><i class="material-icons left">add</i>Add Ticket</a>
      </div>
    </div>
  </div>
@endsection