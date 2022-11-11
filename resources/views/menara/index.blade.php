@extends('layouts.sipetarung')



@section('title')
Data Menara / Tower
@endsection


@section('judul')

Data Menara Sipetarung

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
                    <form action="{{route("search_tower")}}" id="input-search" method="get">
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
                

                {{-- <button type="button" id="import-data-button" onclick="importData()" class="btn btn-primary mb-3">Import Data User</button> --}}


                <button type="button" id="import-data-button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleImportModalUser">Import Data User</button>

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
                        <td> <center> <br><a class = "btn btn-secondary mb-2" href = "{{route('menara_id',$towers->gid )}}">View</a> <br> <button class="btn btn-primary edit_modal" data-toggle="modal" data-target="#EditMenara{{$towers->gid}}">Update</button> </center></td>

                    </tr>

                    


                    <div class="modal fade" id="EditMenara{{$towers->gid}}">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data Menara</h4>
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
              

                                          <form action="{{route('update_menara_id', $towers->gid)}}" id="input-menara" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="emp_scan_imb" id="emp_scan_imb">
                                            <input type="hidden" name="emp_scan_gambar_imb" id="emp_scan_gambar_imb">
                                            <input type="hidden" name="emp_scan_zoning" id="emp_scan_zoning">
                                            <input type="hidden" name="gid" id="gid" class="form-control" value="{{$towers->gid}}">
                                            <div class="form-group">
                                                <label for="inputClientCompany">Provider</label>
                                                <input type="text" name="provider" id="provider" class="form-control" value="{{$towers->provider}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Tipe Tower</label>
                                                <input type="text" name="tipe_tower" id="tipe_tower" class="form-control" value="{{$towers->tipe_tower}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Tinggi Tower</label>
                                                <input type="number" name="tinggi_tower" id="tinggi_tower" class="form-control" value="{{$towers->tinggi_tower}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">SK IMB</label>
                                                <input type="text" name="sk_imb" id="sk_imb" class="form-control" value="{{$towers->sk_imb}}">
                                            </div>
                                            <div class="form-group">
                                              <label for="inputDescription">Alamat Pemohon</label>
                                              <textarea name="alamat_pemohon" id="alamat_pemohon" class="form-control" rows="4">{{$towers->alamat_pemohon}}</textarea>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputDescription">Alamat Tower</label>
                                              <textarea name="alamat_tower" id="alamat_tower" class="form-control" rows="4">{{$towers->alamat_tower}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputClientCompany">Kelurahan</label>
                                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="{{$towers->kelurahan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Kecamatan</label>
                                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{$towers->kecamatan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Scan IMB</label>
                                                <input type="file" name="scan_imb" id="scan_imb" class="form-control" value="{{$towers->scan_imb}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Scan Gambar IMB</label>
                                                <input type="file" name="scan_gambar_imb" id="scan_gambar_imb" class="form-control" value="{{$towers->scan_gambar_imb}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectLeader">Scan Zoning</label>
                                                <input type="file" name="scan_zoning" id="scan_zoning" class="form-control" value="{{$towers->scan_zoning}}">
                                            </div>
                                            <div class="form-group">
                                              <label for="inputStatus">Jenis Data</label>
                                              <select id="jenis_data" name="jenis_data" class="form-control custom-select">
                                                <option value="{{$towers->jenis_data}}" selected>{{$towers->jenis_data}}</option>
                                                <option value="REKONSILIASI">REKONSILIASI</option>
                                                <option value="NON REKONSILIASI">NON REKONSILIASI</option>
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
                                            </div>

                                          </form>



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









    @section('modals')

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Data Menara</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modal-body" class="modal-body">
            <div class="row">
              <div class="col-12">
                <div id="modal-table" class="table-responsive">
                  
                </div>
              </div>
              <!-- /.col -->
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
    </div>
    




    











    
    <div class="modal fade" id="modal-sm">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data Tower</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Yakin Menghapus Data ?</p>
          </div>
          <div class="modal-footer-alert justify-content-between">
            
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    





       <!-- Modal -->
       <div class="modal fade" id="exampleImportModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleImportModalUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleImportModalUserLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            

              <form action="import_menara" method="POST" enctype="multipart/form-data" >

                @csrf

                <div class="form-group">
                  <input type="file" name="file_menara" id="file_menara" class = "form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>



        
    @endsection





















    @push('script')


    <script>

importButton.onclick = function () {
  useCsvPlugin({
    importerKey: "your-importer-key",
    user: { userId: "12345" },
    metadata: { anotherId: "1" }
  });
};

    </script>



    <script>















// $('.edit_modal').on('click', function (event) {
//     event.preventDefault();
//     // tangkap id modal yang ingin dimunculkan
//     var id = $(this).attr('data-target');
    
//     // munculkan modal berdasarkan id
//     $('#EditMenara'+id).modal();
// });











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
		table();








  
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

























  //   $("#input-search").on("submit", function (e) {
  //   var dataString = $(this).serialize();
  //   console.log(dataString);
  //   $.ajax({
  //     type: "GET",
  //     url: baseUrl+"menara/search_data"
  //     data: dataString,
  //     success: function () {
  
  //       $('tbody').html(data);



  //     }
  //   });

 
  //       e.preventDefault();


  // }); 











    </script>

<script type="text/javascript">
  // $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>

        
    @endpush