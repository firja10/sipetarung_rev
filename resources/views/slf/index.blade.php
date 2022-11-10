@extends('layouts.sipetarung')



@section('title')

Data SLF
    
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



                    <form action="{{route("search_slf")}}" id="input-search" method="get">
                    <div class="row">




                      <div class = "d-flex justify-content-between">
                        <div class = "d-flex justify-content-start mr-4">
  
                        {{-- <div class="col-3"> --}}
                          <div class="form-group mr-1" id = "forms1">
                            <label>Pilih Kolom 1:</label>
                            <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                              <option value="gid">GID</option>
                              <option value="no_sk_slf">No SK SLF</option>
                              <option value="tanggal_slf">Tanggal SLF</option>
                              <option value="jenis_slf">Jenis SLF</option>
                              <option value="nama_bangunan">Nama Bangunan</option>
                              <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                              <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                              <option value="nama_pemohon_slf">Nama Pemohon SLF</option>
                              <option value="peruntukan">Peruntukan</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_imb">No IMB</option>
                              <option value="tgl_imb">Tanggal IMB</option>
                              <option value="atas_nama">Atas Nama</option>
                              <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                              <option value="alamat_persil_imb">Alamat Persil IMB</option>
                              <option value="penggunaan_bangunan">Penggunaan Bangunan</option>
                              <option value="luas_bangunan">Luas Bangunan</option>
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
                              <option value="gid">GID</option>
                              <option value="no_sk_slf">No SK SLF</option>
                              <option value="tanggal_slf">Tanggal SLF</option>
                              <option value="jenis_slf">Jenis SLF</option>
                              <option value="nama_bangunan">Nama Bangunan</option>
                              <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                              <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                              <option value="nama_pemohon_slf">Nama Pemohon SLF</option>
                              <option value="peruntukan">Peruntukan</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_imb">No IMB</option>
                              <option value="tgl_imb">Tanggal IMB</option>
                              <option value="atas_nama">Atas Nama</option>
                              <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                              <option value="alamat_persil_imb">Alamat Persil IMB</option>
                              <option value="penggunaan_bangunan">Penggunaan Bangunan</option>
                              <option value="luas_bangunan">Luas Bangunan</option>
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
                              <option value="gid">GID</option>
                              <option value="no_sk_slf">No SK SLF</option>
                              <option value="tanggal_slf">Tanggal SLF</option>
                              <option value="jenis_slf">Jenis SLF</option>
                              <option value="nama_bangunan">Nama Bangunan</option>
                              <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                              <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                              <option value="nama_pemohon_slf">Nama Pemohon SLF</option>
                              <option value="peruntukan">Peruntukan</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_imb">No IMB</option>
                              <option value="tgl_imb">Tanggal IMB</option>
                              <option value="atas_nama">Atas Nama</option>
                              <option value="nama_pemohon_imb">Nama Pemohon IMB</option>
                              <option value="alamat_persil_imb">Alamat Persil IMB</option>
                              <option value="penggunaan_bangunan">Penggunaan Bangunan</option>
                              <option value="luas_bangunan">Luas Bangunan</option>
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
                    <th>ID</th>
                    {{-- <th>No SKRK</th> --}}
                    <th>No SLF</th>
                    <th>Alamat Persil IMB</th>
                    <th>Nama Bangunan</th>
                    <th>Nama Pemohon SLF</th>
                    <th>Atas Nama</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>




                    @foreach ($slf as $slfs)
                    
                    <tr>
                        <td>{{$slfs->gid}}</td>
                        <td>{{$slfs->no_sk_slf}}</td>
                        <td>{{$slfs->alamat_persil_imb}}</td>
                        <td>{{$slfs->nama_bangunan}}</td>
                        <td>{{$slfs->nama_pemohon_slf}}</td>
                        <td>{{$slfs->atas_nama}}</td>
                        <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('slf_id',$slfs->gid )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditSlf{{$slfs->gid}}">Update</button> </center></td>
                    </tr>






                    
<div class="modal fade" id="EditSlf{{$slfs->gid}}">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data SLF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="edit-modal">
                  {{-- <form action="`+baseUrl+`"api/slf/store_json/"`+id+`" id="input-pengaduan" method="POST" enctype="multipart/form-data"> --}}
                  <form action="{{route("update_slf_id", $slfs->gid)}}" id="input-slf" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')


                    <div id="edit-modal1">
                      
                  </div>
                  <div class="form-group">
                    <label>Tanggal SLF</label>
                    <div class="input-group date" id="tgl_slf" data-target-input="nearest">
                        <input type="text" name="tgl_slf" value="input_tgl_slf" class="form-control datetimepicker-input" data-target="#tgl_slf"/>
                        <div class="input-group-append" data-target="#tgl_slf" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  <div id="edit-modal2">
                      
                  </div>
                  <div class="form-group">
                    <label>Tanggal IMB</label>
                    <div class="input-group date" id="tgl_imb" data-target-input="nearest">
                        <input type="text" name="tgl_imb" id="input_tgl_imb" class="form-control datetimepicker-input" data-target="#tgl_imb"/>
                        <div class="input-group-append" data-target="#tgl_imb" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  <div id="edit-modal3">
                      
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-edit justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>




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