   @extends('layouts.sipetarung')

   @section('title')

   Detail Data Menara
       
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
              <h3 class="card-title">Detail Data Menara</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="modal-table1" class="table-responsive">
                <table class="table">
                  <tr>
                    <th>Provider</th>
                    <td>{{ $tower->provider }} </td>
                  </tr>
                  <tr>
                    <th>Tipe Tower</th>
                    <td>{{ $tower->tipe_tower }}</td>
                  </tr>
                  <tr>
                    <th>Tinggi Tower</th>
                    <td>{{ $tower->tinggi_tower }}</td>
                  </tr>
                  <tr>
                    <th>No UPT SKRK</th>
                    <td>{{ $tower->no_upt_skrk }}</td>
                  </tr>
                  <tr>
                    <th>No UPT IMB</th>
                    <td>{{ $tower->no_upt }}</td>
                  </tr>
                  <tr>
                    <th>SK SKRK</th>
                    <td>{{ $tower->sk_skrk }}</td>
                  </tr>
                  <tr>
                    <th>SK IMB</th>
                    <td>{{ $tower->sk_imb }}</td>
                  </tr>
                  <tr>
                    <th>Nama Pemohon</th>
                    <td>{{ $tower->nama_pemohon }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Pemohon</th>
                    <td>{{ $tower->alamat_pemohon }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Tower</th>
                    <td>{{ $tower->alamat_tower }}</td>
                  </tr>
                  <tr>
                    <th>Jenis Data</th>
                    <td>{{ $tower->jenis_data }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>{{ $tower->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>{{ $tower->kecamatan }}</td>
                  </tr>
                  <tr>
                    <th>Izin</th>
                    <td>{{ $tower->izin }}</td>
                  </tr>
                  <tr>
                    <th>Keterangan IMB</th>
                    <td>{{ $tower->ket_imb }}</td>
                  </tr>
                  <tr>
                    <th><hr></th>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>Scan SKRK</th>
                    <td><a href="{{asset("storage/scan_skrk/$tower->scan_skrk")}}" target="_blank">{{ $tower->scan_skrk }}</a></td>
                  </tr>
                  <tr>
                    <th>Scan Zoning</th>
                    <td><a href="{{asset("storage/scan_skrk/$tower->scan_zoning")}}" target="_blank">{{ $tower->scan_zoning }}</a></td>
                  </tr>
                  <tr>
                    <th>Scan IMB</th>
                    <td><a href="{{asset("storage/scan_imb/$tower->scan_imb")}}" target="_blank">{{ $tower->scan_imb }}</a></td>
                  </tr>
                  <tr>
                    <th>Scan Gambar IMB</th>
                    <td><a href="{{asset("storage/scan_imb/$tower->scan_gambar_imb")}}" target="_blank">{{ $tower->scan_gambar_imb }}</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{asset('/')}}" type="button" class="btn btn-default">Kembali</a>
            </div>
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


$(document).ready(function () {
   
    table();
    
});


function table() {
    $('#example2').DataTable({
    "bDestroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
    "processing": true,
    "serverSide": true,
      // 'order' : [[0,'desc']]
		});
  }




  </script>
      
  @endpush