@extends('layouts.sipetarung')



@section('title')
Data Menara / Tower
@endsection


@section('judul')

Data Menara Sipetarung

@endsection






@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
               
               
               
               
               
                    {{-- <form action="{{ route('pertelaan.search.json') }}" method="get"> --}}
                    <form action="{{url("/api/tower/search_json")}}" id="input-search" method="get">
                    <div class="row">
                      
                      



                    <div class = "d-flex justify-content-between">
                      <div class = "d-flex justify-content-start mr-4">

                      {{-- <div class="col-3"> --}}
                        <div class="form-group mr-1" id = "forms1">
                          <label>Pilih Kolom 1:</label>
                          <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                              <option value="gid">GID</option>
                              <option value="provider">Provider</option>
                              <option value="tipe_tower">Tipe Tower</option>
                              <option value="tinggi_tower">Tinggi Tower</option>
                              <option value="no_upt_skrk">No UPT SKRK</option>
                              <option value="no_upt">No UPT IMB</option>
                              <option value="sk_skrk">SK SKRK</option>
                              <option value="sk_imb">SK IMB</option>
                              <option value="nama_pemohon">Nama Pemohon</option>
                              <option value="alamat_pemohon">Alamat Pemohon</option>
                              <option value="alamat_tower">Alamat Tower</option>
                              <option value="jenis_data">Jenis Data</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="izin">Izin</option>
                              <option value="ket_imb">Keterangan IMB</option>
                          </select>
                        </div>
                      {{-- </div>
                      <div class="col-3"> --}}
                        <div class="form-group ml-1">
                          <label>Masukkan Nilai 1:</label>
                          <input type="text" name="nilai" id="nilai" class="form-control"/>
                        </div>
                      </div>
                    {{-- </div> --}}

            

                    <div class = "d-flex justify-content-start ml-4">
                      {{-- <div class="col-3"> --}}
                        <div class="form-group mr-1">
                          <label>Pilih Kolom 2:</label>
                          <select class="select2" name="kolom2" id="kolom2" style="width: 100%;">
                              <option value="gid">GID</option>
                              <option value="provider">Provider</option>
                              <option value="tipe_tower">Tipe Tower</option>
                              <option value="tinggi_tower">Tinggi Tower</option>
                              <option value="no_upt_skrk">No UPT SKRK</option>
                              <option value="no_upt">No UPT IMB</option>
                              <option value="sk_skrk">SK SKRK</option>
                              <option value="sk_imb">SK IMB</option>
                              <option value="nama_pemohon">Nama Pemohon</option>
                              <option value="alamat_pemohon">Alamat Pemohon</option>
                              <option value="alamat_tower">Alamat Tower</option>
                              <option value="jenis_data">Jenis Data</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="izin">Izin</option>
                              <option value="ket_imb">Keterangan IMB</option>
                          </select>
                        </div>
                      {{-- </div>
                      <div class="col-3"> --}}
                        <div class="form-group ml-1">
                          <label>Masukkan Nilai 2:</label>
                          <input type="text" name="nilai2" id="nilai2" class="form-control"/>
                        </div>
                      </div>
                    {{-- </div> --}}

                    </div>
                    </div>








                    <div class = "d-flex justify-content-center">


                      {{-- <div class="col-3"> --}}
                        <div class="form-group mr-1">
                          <label>Pilih Kolom 3:</label>
                          <select class="select2" name="kolom3" id="kolom3" style="width: 100%;">
                              <option value="gid">GID</option>
                              <option value="provider">Provider</option>
                              <option value="tipe_tower">Tipe Tower</option>
                              <option value="tinggi_tower">Tinggi Tower</option>
                              <option value="no_upt_skrk">No UPT SKRK</option>
                              <option value="no_upt">No UPT IMB</option>
                              <option value="sk_skrk">SK SKRK</option>
                              <option value="sk_imb">SK IMB</option>
                              <option value="nama_pemohon">Nama Pemohon</option>
                              <option value="alamat_pemohon">Alamat Pemohon</option>
                              <option value="alamat_tower">Alamat Tower</option>
                              <option value="jenis_data">Jenis Data</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="izin">Izin</option>
                              <option value="ket_imb">Keterangan IMB</option>
                          </select>
                        </div>
                      {{-- </div> --}}
                      {{-- <div class="col-3"> --}}
                        <div class="form-group ml-1">
                          <label>Masukkan Nilai 3:</label>
                          <input type="text" name="nilai3" id="nilai3" class="form-control"/>
                        </div>
                      {{-- </div> --}}
   

                    </div>

        










                    <center>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                          {{-- <i class="fa fa-search"></i> --}}
                          Cari Data
                      </button>
                      </div>
                      </form>

                    </center>
    


                    <?php
                    
                    // DB::table('')


                    ?>

                    <center>



                      <div class = "form-group" id = "total_keseluruhan">


                      <h4> <strong>Total Data Yang Ditampilkan :   </strong> <span id = "total_sekarang"> </span></h4> 
  
                        
                        <h4 id = "total_sekarang_2"></h4>
  
                        {{-- <br>
             <input type="text" name="" id="total_menara" value = "10" class = "form-control"> --}}
  
  
                      </div>



                    </center>

                 





                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>GID</th>
                    <th>SK IMB</th>
                    <th>Provider</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Tipe Tower</th>
                    <th>Tinggi Tower</th>
                    <th>Alamat Tower</th>
                    <th>SK SKRK</th>
                    {{-- <th>Keterangan IMB</th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
             
                    @foreach ($tower as $towers)
                    <tr>
                        <td>{{$towers->gid}}</td>
                        <td>{{$towers->sk_imb}}</td>
                        <td>{{$towers->provider}}</td>
                        <td>{{$towers->kelurahan}}</td>
                        <td>{{$towers->kecamatan}}</td>
                        <td>{{$towers->tipe_tower}}</td>
                        <td>{{$towers->tinggi_tower}}</td>
                        <td>{{$towers->alamat_tower}}</td>
                        <td>{{$towers->sk_skrk}}</td>
                        <td><button class = "btn btn-secondary mr-2">View</button> <button class="btn btn-primary">Update</button></td>

                    </tr>
                        
                    @endforeach

                  </tbody>
                  {{-- <tfoot> --}}
                  {{-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> --}}
                  {{-- </tfoot> --}}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection


    @push('script')



    <script>



$(function () {
    $('.select2').select2()
  });
	// let baseUrl = "{{asset('/')}}";
	// console.log(baseUrl);
  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Data Di Update.')
  });
	$(document).ready(function () {
		// $("#example1").DataTable({
		//   "responsive": true, "lengthChange": false, "autoWidth": false,
		//   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		table()
	});



    function table() {
        
        let example =  $('#example2').DataTable({
        "dom": 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "bDestroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
        "processing": true,
        "order":[0,'asc'],

        "initComplete": function(settings, json) {
      // "drawCallback": function(settings, json) {

      var panjang = $('#example2 tbody tr').length;

      var api = this.api();
      var numRows = api.page.info().recordsDisplay;
      console.log(numRows);


          $('#total_sekarang').html(
        numRows
              );

      // Place the value in your HTML using jQuery, etc
  }


  
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        
    }



    </script>

        
    @endpush