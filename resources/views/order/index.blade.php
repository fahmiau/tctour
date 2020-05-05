@extends('layout.main')

@section('title','Order')

@section('container')
<div class="container center-align">
  <h1>Order Your Ticket Here</h1>
</div>

<div class="container">
  <div class="row">
    <div class="col s12 l10 offset-l1">
      <div class="card blue lighten-5">
        <form action="/order" method="POST">
          @csrf
          <div class="card-content dark-text">
            <span class="card-title">Flight Detail</span>

            <div class="container">
              <div class="row">
                <div class="input-field col l6">
                  <i class="material-icons prefix">flight_takeoff</i>
                  <input type="text" id="depCity" name="depCity">
                  <label for="depCity">Kota Asal</label>
                </div>
                <div class="input-field col l6">
                  <i class="material-icons prefix">flight_land</i>
                  <input type="text" id="arrCity" name="arrCity">
                  <label for="arrCity">Kota Tujuan</label>
                </div>
                <div class="input-field col l6">
                  <i class="material-icons prefix">date_range</i>
                  <input type="text" class="datepicker" id="pergi" name="pergi">
                  <label for="pergi">Tanggal Pergi</label>
                </div> 
                <div class="input-field col l6">
                  <i class="material-icons prefix">date_range</i>
                  <input type="text" class="datepicker" id="pulang" name="pulang">
                  <label for="pulang">Tanggal Pulang</label>
                </div>
                <div class="input-field col l6">
                  <i class="material-icons prefix">airline_seat_recline_extra</i>
                  <select name="seatClass" id="seatClass">
                    <option value="" selected disabled>Pilih Seat Class</option>
                    <option value="Economy Class">Economy Class</option>
                    <option value="Business Class">Business Class</option>
                    <option value="First Class">First Class</option>
                  </select>
                  <label>Seat Class</label>
                </div>
              </div>
            </div>
            
          </div>
          <div class="card-action">
            <button class="btn waves-effect waves-light" type="submit">Cari Tiket</button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>
@endsection