@extends('layouts.sipetarung')


@section('title')
Data Sipetarung
@endsection




@section('content')
    


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h5 class="mb-2">Info Box</h5>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-12">
                  {{-- <a href="{{asset("/")}}"> --}}
                    <a href="http://172.17.27.234:8080/webgis/">
                  <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="fas fa-map-marker-alt"></i></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">Peta</span>
                          {{-- <span class="info-box-number">1,410</span> --}}
                      </div>
                  </div>
                  </a>
              </div>


              <?php 
              
              $total_menara = DB::table("tower_surabaya")->count();
              $total_imb = DB::table('imb')->count();
              $total_penertiban = DB::table('penertiban')->count();
              $total_slf = DB::table('slf')->count();
              $total_pengaduan = DB::table('pengaduan')->count();
              $total_pertelaan = DB::table('pertelaan')->count();
              $total_tabg = DB::table('tabg')->count();


              ?>


              <div class="col-md-3 col-sm-6 col-12">
                  <a href="{{url('/menara')}}" target="_blank">
                  <div class="info-box">
                      <span class="info-box-icon bg-success"><i class="fas fa-broadcast-tower"></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">Menara <br> {{$total_menara}}</span>
                          {{-- <span class="info-box-number">410</span> --}}
                      </div>
                  </div>
                  </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                  <a href="{{url('/skrk-imb')}}" target="_blank">
                  <div class="info-box">
                      <span class="info-box-icon bg-warning"><i class="fas fa-building"></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">SKRK - IMB <br> {{$total_imb}}</span>
                          {{-- <span class="info-box-number">13,648</span> --}}
                      </div>
                  </div>
                  </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                  <a href="{{url('/penertiban')}}" target="_blank">
                  <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">Penertiban <br> {{$total_penertiban}}</span>
                          {{-- <span class="info-box-number">93,139</span> --}}
                      </div>
                  </div>
                  </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                  <a href="{{url('/pengaduan')}}" target="_blank">
                  <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="fas fa-exclamation-circle"></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">Pengaduan <br> {{$total_pengaduan}} </span>
                          {{-- <span class="info-box-number">93,139</span> --}}
                      </div>
                  </div>
                  </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <a href="{{url('/slf')}}" target="_blank">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">SLF <br> {{$total_slf}}</span>
                        {{-- <span class="info-box-number">93,139</span> --}}
                    </div>
                </div>
                </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <a href="{{url('/pertelaan')}}" target="_blank">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pertelaan <br> {{$total_pertelaan}}</span>
                        {{-- <span class="info-box-number">93,139</span> --}}
                    </div>
                </div>
                </a>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <a href="{{url('/tabg')}}" target="_blank">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">TABG <br> {{$total_tabg}}</span>
                        {{-- <span class="info-box-number">93,139</span> --}}
                    </div>
                </div>
                </a>
              </div>
            </div>
        </div>
    </section>



    @endsection