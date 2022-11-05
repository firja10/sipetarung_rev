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
  

                        <button type="button" onclick="create_json()" class="btn btn-success" data-toggle="modal" data-target="#modal-create">Tambah data</button>  
  
                      </center>


























                  <br><br>



                  <center>



                    <div class = "form-group" id = "total_keseluruhan">


                    <h3> <strong>Total Data Yang Ditampilkan : </strong> </h3> 

                      <h4 id = "total_sekarang"> </h4>
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


                    @foreach ($data_search as $pengaduans)
                    
                    <tr>
                        <td>{{$pengaduans->id}}</td>
                        <td>{{$pengaduans->nama_pengadu}}</td>
                        <td>{{$pengaduans->alamat_pengadu}}</td>
                        <td>{{$pengaduans->nama_teradu}}</td>
                        <td>{{$pengaduans->alamat_teradu}}</td>
                        <td>{{$pengaduans->kelurahan}}</td>
                        <td>{{$pengaduans->kecamatan}}</td>
                       
                        <td><button class = "btn btn-secondary mr-2">View</button> <button class="btn btn-primary">Update</button></td>
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






