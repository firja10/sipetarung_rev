
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
                            <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('skrk_imb_id',$skrk_imbs->id_imb )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditSkrkIMB{{$skrk_imbs->id_imb}}">Update</button> </center></td>
                        </tr>




                        <form action="{{route("update_skrk_imb_id", $skrk_imbs->id_imb)}}" id="input-skrk" method="POST" enctype="multipart/form-data">
                          @csrf

                          @method('PATCH')


                        <div class="modal fade" id="EditSkrkIMB{{$skrk_imbs->id_imb}}">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Data SKRK</h4>
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
                                       
                                            <div id="edit-modal1">



                                              <input type="hidden" name="emp_scan_skrk" id="emp_scan_skrk">
                                              <input type="hidden" name="emp_scan_imb" id="emp_scan_imb">
                                              <input type="hidden" name="emp_scan_zoning" id="emp_scan_zoning">
                                              <input type="hidden" name="emp_scan_gambar" id="emp_scan_gambar">
                                              <input type="hidden" name="id_imb" id="id_imb" class="form-control" value="{{$skrk_imbs->id_imb}}">
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">No UPT SKRK</label>
                                                  <input type="text" name="no_upt" id="no_upt" class="form-control" value="{{$skrk_imbs->no_upt}}">
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">No SK SKRK</label>
                                                  <input type="text" name="no_skrk" id="no_skrk" class="form-control" value="{{$skrk_imbs->no_skrk}}">
                                              </div>



                        
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SKRK</label>
                                                <div class="input-group date" id="tgl_skrk" data-target-input="nearest">
                                                    <input type="text" name="tgl_skrk" id="input_tgl_skrk" class="form-control datetimepicker-input" data-target="#tgl_skrk"/>
                                                    <div class="input-group-append" data-target="#tgl_skrk" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal2">

{{-- 
                                              <div class="form-group">
                                                <label for="inputProjectLeader">Nama Pemohon SKRK</label>
                                                <input type="text" name="pemohon" id="pemohon" class="form-control" value="{{$skrk_imbs->pemohon}}">
                                            </div>
                                            <div class="form-group">
                                              <label for="inputDescription">Alamat Persil SKRK</label>
                                              <textarea name="alamat" id="alamat" class="form-control" rows="4">{{$skrk_imbs->alamat_persil}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Permohonan</label>
                                                <input type="text" name="permohonan" id="permohonan" class="form-control" value="{{$skrk_imbs->pemohon}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Peruntukan</label>
                                                <input type="text" name="peruntukan" id="peruntukan" class="form-control" value="{{$skrk_imbs->peruntukan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputClientCompany">Kelurahan</label>
                                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="{{$skrk_imbs->kelurahan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Kecamatan</label>
                                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{$skrk_imbs->kecamatan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">No UPT IMB</label>
                                                <input type="text" name="no_upt_imb" id="no_upt_imb" class="form-control" value="{{$skrk_imbs->no_upt_imb}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">No SK IMB</label>
                                                <input type="text" name="no_imb" id="no_imb" class="form-control" value="{{$skrk_imbs->no_imb}}">
                                            </div> --}}




                        
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




                                              {{-- <div class="form-group">
                                                <label for="inputProjectLeader">Atas Nama</label>
                                                <input type="text" name="atas_nama" id="atas_nama" class="form-control" value="{{$skrk_imbs->atas_nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Nama Pemohon IMB</label>
                                                <input type="text" name="nama_pemoh" id="nama_pemoh" class="form-control" value="{{$skrk_imbs->pemohon}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Alamat Persil IMB</label>
                                                <textarea name="persil_imb" id="persil_imb" class="form-control" rows="4">{{$skrk_imbs->persil_imb}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Penggunaan</label>
                                                <input type="text" name="penggunaan" id="penggunaan" class="form-control" value="{{$skrk_imbs->penggunaan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Luas Bangunan</label>
                                                <input type="text" name="luas_bangunan" id="luas_bangunan" class="form-control" value="{{$skrk_imbs->luas_bangunan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Tinggi Bangunan</label>
                                                <input type="text" name="tinggi_bangunan" id="tinggi_bangunan" class="form-control" value="{{$skrk_imbs->tinggi_bangunan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Jumlah Lantai</label>
                                                <input type="text" name="jumlah_lantai" id="jumlah_lantai" class="form-control" value="{{$skrk_imbs->jumlah_lantai}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">File SKRK</label>
                                                <input type="file" name="scan_skrk" id="scan_skrk" class="form-control" value="{{$skrk_imbs->scan_skrk}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">File Zoning</label>
                                                <input type="file" name="scan_zoning" id="scan_zoning" class="form-control" value="{{$skrk_imbs->scan_zoning}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">File IMB</label>
                                                <input type="file" name="scan_imb" id="scan_imb" class="form-control" value="{{$skrk_imbs->scan_imb}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">File Gambar IMB</label>
                                                <input type="file" name="scan_gamba" id="scan_gambar" class="form-control" value="{{$skrk_imbs->scan_gambar}}">
                                            </div>
 --}}




                        
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



                                <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>





                                
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>

                      </form>











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






