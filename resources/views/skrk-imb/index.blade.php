
@extends('layouts.sipetarung')

@section('title')

Data SKRK - IMB

@endsection


@section('link_lain')

<script>
  let baseUrl = "{{asset('/')}}";
</script>

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
                    <form action="{{route("search_imb")}}" id="input-search" method="get">
                    <div class="row">
                    
                    
                    
                                  
                  











                    
                    <div class = "d-flex justify-content-between">
                      <div class = "d-flex justify-content-start mr-4">

                      {{-- <div class="col-3"> --}}
                        <div class="form-group mr-1" id = "forms1">
                          <label>Pilih Kolom 1:</label>
                          <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                            <option value="id_imb">ID</option>
                            <option value="no_upt">No UPT SKRK</option>
                            <option value="no_skrk">No SKRK</option>
                            <option value="tgl_skrk">Tanggal No SKRK</option>
                            <option value="pemohon">Pemohon</option>
                            <option value="alamat_persil">Alamat Persil SKRK</option>
                            <option value="permohonan">Permohonan</option>
                            <option value="peruntukan">Peruntukan</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="no_imb">No SK IMB</option>
                            <option value="tgl_imb">Tanggal SK IMB</option>
                            <option value="atas_nama">Atas Nama</option>
                            <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                            <option value="persil_imb">Alamat Persil IMB</option>
                            <option value="penggunaan">Penggunaan Bangunan</option>
                            <option value="luas_bangunan">Luas Bangunan</option>
                            <option value="tinggi_bangunan">Tinggi Bangunan</option>
                            <option value="jumlah_lantai">Jumlah Lantai</option>
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
                            <option value="id_imb">ID</option>
                            <option value="no_upt">No UPT SKRK</option>
                            <option value="no_skrk">No SKRK</option>
                            <option value="tgl_skrk">Tanggal No SKRK</option>
                            <option value="pemohon">Pemohon</option>
                            <option value="alamat_persil">Alamat Persil SKRK</option>
                            <option value="permohonan">Permohonan</option>
                            <option value="peruntukan">Peruntukan</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="no_imb">No SK IMB</option>
                            <option value="tgl_imb">Tanggal SK IMB</option>
                            <option value="atas_nama">Atas Nama</option>
                            <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                            <option value="persil_imb">Alamat Persil IMB</option>
                            <option value="penggunaan">Penggunaan Bangunan</option>
                            <option value="luas_bangunan">Luas Bangunan</option>
                            <option value="tinggi_bangunan">Tinggi Bangunan</option>
                            <option value="jumlah_lantai">Jumlah Lantai</option>
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
                            <option value="id_imb">ID</option>
                            <option value="no_upt">No UPT SKRK</option>
                            <option value="no_skrk">No SKRK</option>
                            <option value="tgl_skrk">Tanggal No SKRK</option>
                            <option value="pemohon">Pemohon</option>
                            <option value="alamat_persil">Alamat Persil SKRK</option>
                            <option value="permohonan">Permohonan</option>
                            <option value="peruntukan">Peruntukan</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="no_imb">No SK IMB</option>
                            <option value="tgl_imb">Tanggal SK IMB</option>
                            <option value="atas_nama">Atas Nama</option>
                            <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                            <option value="persil_imb">Alamat Persil IMB</option>
                            <option value="penggunaan">Penggunaan Bangunan</option>
                            <option value="luas_bangunan">Luas Bangunan</option>
                            <option value="tinggi_bangunan">Tinggi Bangunan</option>
                            <option value="jumlah_lantai">Jumlah Lantai</option>
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





                 



                    <center>



                      <div class = "form-group" id = "total_keseluruhan">


                      <h3> <strong>Total Data Yang Ditampilkan : </strong> <span id = "total_sekarang"> </span> </h3> 
  
                        
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
                    <th>ID</th>
                    <th>No UPT IMB</th>
                    <th>No IMB</th>
                    <th>No SKRK</th>
                    <th>Persil IMB</th>
                    <th>Nama Jalan</th>
                    <th>Nama Pemohon IMB</th>
                    <th>Alamat Pemohon IMB</th>
                    {{-- <th>Kelurahan</th> --}}
                    {{-- <th>Kecamatan</th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($skrk as $skrk_imbs)
                    
                        <tr>
                            <td>{{$skrk_imbs->id_imb}}</td>
                            <td>{{$skrk_imbs->no_upt_imb}}</td>
                            <td>{{$skrk_imbs->no_imb}}</td>
                            <td>{{$skrk_imbs->no_skrk}}</td>
                            <td>{{$skrk_imbs->persil_imb}}</td>
                            <td>{{$skrk_imbs->nama_jalan}}</td>
                            <td>{{$skrk_imbs->nama_pemohon_imb}}</td>
                            <td>{{$skrk_imbs->alamat_pemohon_imb}}</td>
                            <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('skrk_imb_id',$skrk_imbs->id_imb )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditSkrkIMB">Update</button> </center></td>
                        </tr>

                    @endforeach







                  </tbody>
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



@section('modals')
    
@endsection













@push('script')


<script>

$(function () {
    $('.select2').select2()
  });

  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Data Di Update.')
  });

  $(document).ready(function() {
    

    table();



  });

  
  function table() {
   let example2 = $('#example2').DataTable({
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
    "serverSide": false,

      "order":[0,'asc'],
	

      "initComplete": function(settings, json) {
      // "drawCallback": function(settings, json) {


      var api = this.api();
      var numRows = api.page.info().recordsDisplay;
      console.log(numRows);


          $('#total_sekarang').html(
        numRows
              );

      // Place the value in your HTML using jQuery, etc
  }
      


		})
    
    
    example2.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');




  }
</script>




    
@endpush






