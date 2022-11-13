@extends('layouts.sipetarung')

@section('title')

Data Pengaduan

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
                    <form action="{{route("search_pengaduan")}}" id="input-search" method="get">

                    <div class="row">







                      <div class = "d-flex justify-content-between">
                        <div class = "d-flex justify-content-start mr-4">
  
                        {{-- <div class="col-3"> --}}
                          <div class="form-group mr-1" id = "forms1">
                            <label>Pilih Kolom 1:</label>
                            <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                              <option value="id">ID</option>
                              <option value="nama_pengadu">/Nama Pengadu</option>
                              <option value="alamat_pengadu">Alamat Pengadu</option>
                              <option value="nama_teradu">Nama Teradu</option>
                              <option value="alamat_teradu">Alamat Teradu</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_skrk">No SKRK</option>
                              <option value="no_imb">No IMB</option>
                              <option value="status_pengaduan">Status Pengaduan</option>
                              <option value="latitude">Latitude</option>
                              <option value="longitude">Longitude</option>
                              <option value="keterangan">Keterangan</option>
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
                              <option value="id">ID</option>
                              <option value="nama_pengadu">/Nama Pengadu</option>
                              <option value="alamat_pengadu">Alamat Pengadu</option>
                              <option value="nama_teradu">Nama Teradu</option>
                              <option value="alamat_teradu">Alamat Teradu</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_skrk">No SKRK</option>
                              <option value="no_imb">No IMB</option>
                              <option value="status_pengaduan">Status Pengaduan</option>
                              <option value="latitude">Latitude</option>
                              <option value="longitude">Longitude</option>
                              <option value="keterangan">Keterangan</option>
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
                              <option value="id">ID</option>
                              <option value="nama_pengadu">/Nama Pengadu</option>
                              <option value="alamat_pengadu">Alamat Pengadu</option>
                              <option value="nama_teradu">Nama Teradu</option>
                              <option value="alamat_teradu">Alamat Teradu</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="no_skrk">No SKRK</option>
                              <option value="no_imb">No IMB</option>
                              <option value="status_pengaduan">Status Pengaduan</option>
                              <option value="latitude">Latitude</option>
                              <option value="longitude">Longitude</option>
                              <option value="keterangan">Keterangan</option>
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
  

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create">Tambah data</button>  
  
                      </center>


























                  <br><br>



                  <center>



                    <div class = "form-group" id = "total_keseluruhan">


                    <h3> <strong>Total Data Yang Ditampilkan : </strong><span id = "total_sekarang"> </span></h3> 

           
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




                <button type="button" id="import-data-button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleImportModalPengaduan">Import Data Pengaduan</button>





                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    {{-- <th>No SKRK</th> --}}
                    <th>Nama Pengadu</th>
                    <th>Alamat Pengadu</th>
                    <th>Nama Teradu</th>
                    <th>Alamat Teradu</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>


                    @foreach ($pengaduan as $pengaduans)
                    
                    <tr>
                        <td>{{$pengaduans->id}}</td>
                        <td>{{$pengaduans->nama_pengadu}}</td>
                        <td>{{$pengaduans->alamat_pengadu}}</td>
                        <td>{{$pengaduans->nama_teradu}}</td>
                        <td>{{$pengaduans->alamat_teradu}}</td>
                        <td>{{$pengaduans->kelurahan}}</td>
                        <td>{{$pengaduans->kecamatan}}</td>
                       
                        <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('pengaduan_id',$pengaduans->id )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditPengaduan">Update</button> </center></td>
                    </tr>



                    <form action="{{route('update_pengaduan_id', $pengaduans->id)}}" id="input-pengaduan" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')


                      <input type="hidden" name="id" id="id" class="form-control" value="`+res.id+`">
                      <input type="hidden" name="emp_file_lapangan" id="emp_file_lapangan">
                      <input type="hidden" name="emp_file_dokumen" id="emp_file_dokumen">
                      <div class="form-group">
                          <label for="inputClientCompany">No SKRK</label>
                          <input type="text" name="no_skrk" id="no_skrk" value="`+res.no_skrk+`" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="inputClientCompany">No IMB</label>
                          <input type="text" name="no_imb" id="no_imb" value="`+res.no_imb+`" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputClientCompany">Nama Pengadu</label>
                        <input type="text" name="nama_pengadu" id="nama_pengadu" value="`+res.nama_pengadu+`" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputDescription">Alamat Pengadu</label>
                        <textarea name="alamat_pengadu" id="alamat_pengadu" class="form-control" rows="4">`+res.alamat_pengadu+`</textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputClientCompany">Nama Teradu</label>
                        <input type="text" name="nama_teradu" id="nama_teradu" value="`+res.nama_teradu+`" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputDescription">Alamat Teradu</label>
                        <textarea name="alamat_teradu" id="alamat_teradu" class="form-control" rows="4">`+res.alamat_teradu+`</textarea>
                      </div>
                      <div class="form-group">
                          <label for="inputClientCompany">Kelurahan</label>
                          <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="`+res.kelurahan+`">
                      </div>
                      <div class="form-group">
                          <label for="inputProjectLeader">Kecamatan</label>
                          <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="`+res.kecamatan+`">
                      </div>
                      <div class="form-group">
                          <label for="inputClientCompany">Latitude</label>
                          <input type="text" name="latitude" id="latitude" value="`+res.latitude+`" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="inputClientCompany">Longitude</label>
                          <input type="text" name="longitude" id="longitude" value="`+res.longitude+`" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputDescription">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" rows="4">`+res.keterangan+`</textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Status Pengaduan</label>
                        <select id="status_pengaduan" name="status_pengaduan" class="form-control custom-select">
                          <option value="`+res.status_pengaduan+`" selected>`+res.status_pengaduan+`</option>
                          <option value="Proses">Proses</option>
                          <option value="Selesai">Selesai</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="inputProjectLeader">File Dokumen</label>
                          <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" value="`+res.file_dokumen+`">
                      </div>
                      <div class="form-group">
                          <label for="inputProjectLeader">Foto Lapangan</label>
                          <input type="file" name="file_lapangan" id="file_lapangan" class="form-control" value="`+res.file_lapangan+`">
                      </div>

                      <div class="form-group">
                        <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
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






  
<div class="modal fade" id="modal-create">

  {{-- <form action="{{route('store_pengaduan')}}" id="input-pengaduan" method="POST" enctype="multipart/form-data"> --}}
    <form action="{{route('store_pengaduan')}}" id="input-pengaduan" method="POST">
    @csrf
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Pengaduan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="create-modal">
            
                    <div class="form-group">
                      <label for="inputClientCompany">No SKRK</label>
                      <input type="text" name="no_skrk" id="no_skrk_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">No IMB</label>
                        <input type="text" name="no_imb" id="no_imb_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Nama Pengadu</label>
                        <input type="text" name="nama_pengadu" id="nama_pengadu_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Alamat Pengadu</label>
                      <textarea name="alamat_pengadu" id="alamat_pengadu_create" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Nama Pengadu</label>
                        <input type="text" name="nama_teradu" id="nama_teradu_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Alamat Pengadu</label>
                      <textarea name="alamat_teradu" id="alamat_teradu_create" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Kelurahan</label>
                        <input type="text" name="kelurahan" id="kelurahan_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Kecamatan</label>
                        <input type="text" name="kecamatan" id="kecamatan_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Latitude</label>
                        <input type="text" name="latitude" id="latitude_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Longitude</label>
                        <input type="text" name="longitude" id="longitude_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Keterangan</label>
                      <textarea name="keterangan" id="keterangan_create" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Status Pengaduan</label>
                      <select id="status_pengaduan_create" name="status_pengaduan" class="form-control custom-select">
                        <option value="" selected></option>
                        <option value="Sudah Diproses">Sudah Diproses</option>
                        <option value="Belum Diproses">Belum Diproses</option>
                      </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="inputProjectLeader">File Dokumen</label>
                        <input type="file" name="file_dokumen" id="file_dokumen_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">File Lapangan</label>
                        <input type="file" name="file_lapangan" id="file_lapangan_create" class="form-control">
                    </div> --}}

                    {{-- <div class = "form-group">

                      <button type="button" type="submit" class="btn btn-success float-right mb-3 mr-3">Save changes</button>

                    </div> --}}



                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-create justify-content-between">
        <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success float-right mb-3 mr-3">Save changes</button>
      
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

 </form>



</div>



















<form action="import_pengaduan" method="POST" enctype="multipart/form-data" >

  @csrf

   <!-- Modal -->
   <div class="modal fade" id="exampleImportModalPengaduan" tabindex="-1" role="dialog" aria-labelledby="exampleImportModalPengaduanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleImportModalPengaduanLabel">Import Data Menara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        



            <div class="form-group">
              <input type="file" name="file_pengaduan" id="file_pengaduan" class = "form-control">
            </div>
{{-- 
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div> --}}



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


</form>







    
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






