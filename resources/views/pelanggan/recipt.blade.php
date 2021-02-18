@extends('pelanggan.layouts.layout')
@section('title_page', 'Recipts')
@section('content')
  <x-pelanggan.navbar/>
  
  <section class="recipt-orders">
    <div class="container">
      <h2 class="h2 recipt-order-title">Rentall List</h2>
      <div class="row no-gutters">
        <div class="recipt-order" id="recipt-order">
            @php $i=1 @endphp
            @foreach($outlineInfo as $info)
              @php $i++ @endphp
              <div class="recipt-list">
                  <div class="recipt-header">
                    <button class="btn btn-secondary btn-collapse" data-toggle="collapse" data-target="#reciptbody{{$i}}" aria-expanded="false" aria-controls="reciptbody{{$i}}"></button>
                    <div class="recipt-item-title">
                      <div class="recipt-item-image">
                          <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-5193587/yamaha_yamaha_xsr_155_sepeda_motor_-vin_2019-_otr_jabodetabek-_full04_b7pbqliq.jpg" alt=""/>
                      </div>
                      <div class="recipt-item-text">
                        <div class="f-title-sm item-text-title">{{$info->kendaraan->nama_kendaraan}} (#{{$info->kode_transaksi}})</div>
                        <div class="f-meta-data item-text-meta-data">
                          <span>{{$info->kendaraan->jenis}} {{$info->kendaraan->tahun}} - {{$info->kendaraan->warna}} {{$info->kendaraan->nomor_plat}}</span>
                        </div>
                        <div class="f-title-sm item-text-price">
                          <span class="item-price">Harga: {{$info->harga_sewa}}</span>
                          <span class="badge warning">{{$info->status_recipt}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="recipt-item-cta">
                        <a href="#" class="btn btn-md btn-icon btn-primary confirm-btn"><i class="fas fa-handshake"></i> Confirm Payment</a>
                        <span class="f-meta-data">Created at: 21 Juni 2021</span>
                    </div>
                  </div>
                  <div class="recipt-body collapse" id="reciptbody{{$i}}" data-parent="#recipt-order">
                    <div class="recipt-info">
                      <div class="row branch-info-row">
                        <div class="col-6 branch-info">
                          <div class="branch-info branch-name f-title-md">
                            <p>Geger Kalong Branch</p>
                          </div>
                          <div class="branch-info meta-data">
                            <span class="f-meta-data address">Jl gegek Kalong</span>
                            <span class="f-meta-data city">Bandung Jawa barat</span>
                            <span class="f-meta-data phone">0865236547</span>
                          </div>
                        </div>
                        <div class="col-6 bank-info">
                          <div class="bank-image">
                            <img src="https://cdn.worldvectorlogo.com/logos/bca-bank-central-asia.svg" alt="BCA">
                          </div>
                          <div class="meta-data">
                            <span class="f-title-sm bank-no">No. Rek 2433454352</span>
                            <span class="f-body bank-holder">Bank Holder. Pt Pertamina</span>
                          </div>
                        </div>
                      </div>
                      <div class="row item-info-row">
                        <div class="col-6 item-info-col">
                          <div class="item-info item-rental-method">
                            <span class="f-meta-data item-info-title">Rental Method</span>
                            <span class="f-button-md item-info-desc">Diantar</span>
                          </div>
                          <div class="item-info item-rental-method">
                            <span class="f-meta-data item-info-title">Antar Time</span>
                            <span class="f-button-md item-info-desc">10:00</span>
                          </div>
                        </div>
                        <div class="col-6 item-info-col">
                          <div class="item-info item-rental-date">
                            <span class="f-meta-data item-info-title">Rentall Date</span>
                            <span class="f-button-md item-info-desc">Wednesday, 13/10/2021</span>
                          </div>
                          <div class="item-info  item-rental-return-date">
                            <span class="f-meta-data item-info-title">Return Date</span>
                            <span class="f-button-md item-info-desc">Wednesday, 13/10/2021</span>
                          </div>
                          <div class="item-info  item-rental-total-day">
                            <span class="f-meta-data item-info-title">Total Days</span>
                            <span class="f-button-md item-info-desc">2 Days</span>
                          </div>
                        </div>
                      </div>
                      <div class="row item-info-row">
                        <div class="col-12 item-info-col">
                          <div class="item-info item-rental-method">
                            <span class="f-meta-data item-info-title">Diantar Ke</span>
                            <span class="f-button-md item-info-desc">Jl. Jagakarsa</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
      </div>
    </div>
  </section>    
      <a href="{{route("pelanggan.recipt.show", $info->kode_transaksi)}}">
        Detail Recipt
      </a>
  <x-pelanggan.terms/> 
  <x-pelanggan.footer/>   
@endsection