@extends('admin.layout.main')
@section('title','Add Ticket')

@section('container')

  <div class="container">
    <div class="row mt3">
      <div class="col s6">
        <form action="/admin/ticket" method="post">
          @csrf
          <div class="input-field col s12">
            <i class="material-icons prefix">flight_takeoff</i>
            <input type="text" id="depCity" name="depCity">
            <label for="depCity">Kota Asal</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">flight_land</i>
            <input type="text" id="arrCity" name="arrCity">
            <label for="arrCity">Kota Tujuan</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input type="text" class="datepicker" id="pergi" name="pergi">
            <label for="pergi">Tanggal Pergi</label>
          </div> 
          <div class="input-field col s12">
            <i class="material-icons prefix">date_range</i>
            <input type="text" class="datepicker" id="pulang" name="pulang">
            <label for="pulang">Tanggal Pulang</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">airline_seat_recline_extra</i>
            <select name="seatClass" id="seatClass">
              <option value="" selected disabled>Pilih Seat Class</option>
              <option value="Economy Class">Economy Class</option>
              <option value="Business Class">Business Class</option>
              <option value="First Class">First Class</option>
            </select>
            <label>Seat Class</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">attach_money</i>
            <input type="text" id="price" name="price">
            <label for="price">Price</label>
          </div>
          <button class="btn waves-effect waves-light" type="submit">Add
            <i class="material-icons left">add</i>
          </button>
        </form>
      </div>
    </div>
  </div>

@endsection