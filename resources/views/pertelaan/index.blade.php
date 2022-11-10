@extends('layouts.sipetarung')

@section('title')

Data Pertelaan
    
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
                    <form action="{{route("search_pertelaan")}}" id="input-search" method="get">
                    <div class="row">





                        

                    
                    <div class = "d-flex justify-content-between">
                        <div class = "d-flex justify-content-start mr-4">
  
                        {{-- <div class="col-3"> --}}
                          <div class="form-group mr-1" id = "forms1">
                            <label>Pilih Kolom 1:</label>
                            <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                                <option value="gid">GID</option>
                                <option value="no_sk_pertelaan">No SK Pertelaan</option>
                                <option value="tanggal_pertelaan">Tanggal Pertelaan</option>
                                <option value="jenis_pertelaan">Jenis Pertelaan</option>
                                <option value="nama_bangunan">Nama Bangunan</option>
                                <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                                <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                                <option value="nama_pemohon_pertelaan">Nama Pemohon Pertelaan</option>
                                <option value="pemohon_bangunan_pertelaan">Pemohon Bangunan Pertelaan</option>
                                <option value="kelurahan">Kelurahan</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="no_imb">No IMB</option>
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
                                <option value="no_sk_pertelaan">No SK Pertelaan</option>
                                <option value="tanggal_pertelaan">Tanggal Pertelaan</option>
                                <option value="jenis_pertelaan">Jenis Pertelaan</option>
                                <option value="nama_bangunan">Nama Bangunan</option>
                                <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                                <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                                <option value="nama_pemohon_pertelaan">Nama Pemohon Pertelaan</option>
                                <option value="pemohon_bangunan_pertelaan">Pemohon Bangunan Pertelaan</option>
                                <option value="kelurahan">Kelurahan</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="no_imb">No IMB</option>
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
                                <option value="no_sk_pertelaan">No SK Pertelaan</option>
                                <option value="tanggal_pertelaan">Tanggal Pertelaan</option>
                                <option value="jenis_pertelaan">Jenis Pertelaan</option>
                                <option value="nama_bangunan">Nama Bangunan</option>
                                <option value="no_persetujuan_teknis">No Persetujuan Teknis</option>
                                <option value="tgl_persetujuan_teknis">Tanggal Persetujuan Teknis</option>
                                <option value="nama_pemohon_pertelaan">Nama Pemohon Pertelaan</option>
                                <option value="pemohon_bangunan_pertelaan">Pemohon Bangunan Pertelaan</option>
                                <option value="kelurahan">Kelurahan</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="no_imb">No IMB</option>
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
  










                    {{-- <div class="form-group"> --}}
                      {{-- <div class="input-group input-group-lg"> --}}
                        {{-- <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="Lorem ipsum"> --}}
                        {{-- <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div> --}}
                      {{-- </div> --}}
                    {{-- </div> --}}



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
                    {{-- <th>No SKRK</th> --}}
                    <th>No Pertelaan</th>
                    <th>Alamat Persil IMB</th>
                    <th>Nama Bangunan</th>
                    <th>Nama Pemohon Pertelaan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    
                    @foreach ($pertelaan as $pertelaans)
                    
                        <tr>
                            <td>{{$pertelaans->gid}}</td>
                            <td>{{$pertelaans->no_sk_pertelaan}}</td>
                            <td>{{$pertelaans->alamat_persil_imb}}</td>
                            <td>{{$pertelaans->nama_bangunan}}</td>
                            <td>{{$pertelaans->nama_pemohon_pertelaan}}</td>
                           
                            <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('pertelaan_id',$pertelaans->gid )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditPertelaan{{$pertelaans->gid}}">Update</button> </center></td>
                        </tr>




                        <form action="{{route("update_pertelaan_id", $pertelaans->gid)}}" id="input-pertelaan" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PATCH')


                        <div class="modal fade" id="EditPertelaan{{$pertelaans->gid}}">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Data Pertelaan</h4>
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


                            <input type="hidden" name="gid" id="gid" class="form-control" value="{{$pertelaans->gid}}">
                            <input type="hidden" name="emp_file_sk_pertelaan" id="emp_file_sk_pertelaan">
                            <input type="hidden" name="emp_file_perstek" id="emp_file_perstek">
                            <input type="hidden" name="emp_file_gambar_pertelaan" id="emp_file_gambar_pertelaan">
                            <input type="hidden" name="emp_file_gambar_as_build" id="emp_file_gambar_as_build">
                            <div class="form-group">
                                <label for="inputClientCompany">No SK Pertelaan</label>
                                <input type="text" name="no_sk_pertelaan" id="no_sk_pertelaan" value="{{$pertelaans->no_sk_pertelaan}}" class="form-control">
                            </div>


      
                          </div>
                          <div class="form-group">
                            <label>Tanggal Pertelaan</label>
                            <div class="input-group date" id="tgl_pertelaan" data-target-input="nearest">
                                <input type="text" name="tgl_pertelaan" id="input_tgl_pertelaan" class="form-control datetimepicker-input" data-target="#tgl_pertelaan"/>
                                <div class="input-group-append" data-target="#tgl_pertelaan" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                          </div>
                          <div id="edit-modal2">



                            <div class="form-group">
                              <label for="inputClientCompany">Jenis Pertelaan</label>
                              <input type="text" name="jenis_pertelaan" id="jenis_pertelaan" value="{{$pertelaans->jenis_pertelaan}}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="inputClientCompany">Nama Bangunan</label>
                            <input type="text" name="nama_bangunan" id="nama_bangunan" value="{{$pertelaans->nama_bangunan}}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="inputClientCompany">No Persetujuan Teknis</label>
                            <input type="text" name="no_persetujuan_teknis" id="no_persetujuan_teknis" value="{{$pertelaans->no_persetujuan_teknis}}" class="form-control">
                          </div>



                            
                          </div>
                          <div class="form-group">
                            <label>Tanggal Persetujuan Teknis</label>
                            <div class="input-group date" id="tgl_persetujuan_teknis" data-target-input="nearest">
                                <input type="text" name="tgl_persetujuan_teknis" id="input_tgl_persetujuan_teknis" class="form-control datetimepicker-input" data-target="#tgl_persetujuan_teknis"/>
                                <div class="input-group-append" data-target="#tgl_persetujuan_teknis" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                          </div>
                          <div id="edit-modal3">



                            <div class="form-group">
                              <label for="inputClientCompany">Nama Pemohon Pertelaan</label>
                              <input type="text" name="nama_pemohon_pertelaan" id="nama_pemohon_pertelaan" value="{{$pertelaans->nama_pemohon_pertelaan}}" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="inputClientCompany">Pemohonan Bangunan Pertelaan</label>
                              <input type="text" name="pemohonan_bangunan_pertelaan" id="pemohonan_bangunan_pertelaan" value="{{$pertelaans->permohonan_bangunan_pertelaan}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Kelurahan</label>
                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="{{$pertelaans->kelurahan}}">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Kecamatan</label>
                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{$pertelaans->kecamatan}}">
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">No IMB</label>
                                <input type="text" name="no_imb" id="no_imb" value="{{$pertelaans->no_imb}}" class="form-control">
                            </div>


                            
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
                          <div id="edit-modal4">



                            <div class="form-group">
                              <label for="inputClientCompany">Atas Nama</label>
                              <input type="text" name="atas_nama" id="atas_nama" value="{{$pertelaans->atas_nama}}" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="inputClientCompany">Nama Pemohon IMB</label>
                              <input type="text" name="nama_pemohon_imb" id="nama_pemohon_imb" value="{{$pertelaans->nama_pemohon_imb}}" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="inputDescription">Alamat Persil IMB</label>
                              <textarea name="alamat_persil_imb" id="alamat_persil_imb" class="form-control" rows="4">{{$pertelaans->alamat_persil_imb}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="inputClientCompany">Penggunaan Bangunan</label>
                              <input type="text" name="penggunaan_bangunan" id="penggunaan_bangunan" value="{{$pertelaans->penggunaan_bangunan}}" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="inputClientCompany">Luas Bangunan</label>
                              <input type="number" name="luas_bangunan" id="luas_bangunan" value="{{$pertelaans->luas_bangunan}}" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="inputClientCompany">Jumlah Lantai</label>
                              <input type="number" name="jumlah_lantai" id="jumlah_lantai" value="{{$pertelaans->jumlah_lantai}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">File SK Pertelaan</label>
                                <input type="file" name="file_sk_pertelaan" id="file_sk_pertelaan" class="form-control" value="{{$pertelaans->file_sk_pertelaan}}">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">File Perstek</label>
                                <input type="file" name="file_perstek" id="file_perstek" class="form-control" value="{{$pertelaans->file_perstek}}">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">File Gambar Pertelaan</label>
                                <input type="file" name="file_gambar_pertelaan" id="file_gambar_pertelaan" class="form-control" value="{{$pertelaans->file_gambar_pertelaan}}">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">File Gambar as Build</label>
                                <input type="file" name="file_gambar_as_build" id="file_gambar_as_build" class="form-control" value="{{$pertelaans->file_gambar_as_build}}">
                            </div>
  
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
            <button type="submit" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
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






