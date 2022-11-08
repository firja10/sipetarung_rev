@extends('layouts.sipetarung')

@section('title')

Data Detail Pengaduan
    
@endsection



@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Data Pengaduan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="modal-table1" class="table-responsive">
                <table class="table">
                  <tr>
                    <th>No SKRK</th>
                    <td>{{ $pengaduan->no_skrk }}</td>
                  </tr>
                  <tr>
                    <th>No IMB</th>
                    <td>{{ $pengaduan->no_imb }}</td>
                  </tr>
                  <tr>
                    <th>Nama Pengadu</th>
                    <td>{{ $pengaduan->nama_pengadu }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Pengadu</th>
                    <td>{{ $pengaduan->alamat_pengadu }}</td>
                  </tr>
                  <tr>
                    <th>Nama Teradu</th>
                    <td>{{ $pengaduan->nama_teradu }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Teradu</th>
                    <td>{{ $pengaduan->alamat_teradu }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>{{ $pengaduan->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>{{ $pengaduan->kecamatan }}</td>
                  </tr>
                  <tr>
                    <th>Latitude</th>
                    <td>{{ $pengaduan->latitude }}</td>
                  </tr>
                  <tr>
                    <th>Longitude</th>
                    <td>{{ $pengaduan->longitude }}</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>{{ $pengaduan->keterangan }}</td>
                  </tr>
                  <tr>
                    <th>Status Pengaduan</th>
                    <td>{{ $pengaduan->status_pengaduan }}</td>
                  </tr>
                  <tr>
                    <th><hr></th>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>File Dokumen</th>
                    <td><a href="{{asset("storage/file_dokumen/$pengaduan->file_dokumen")}}" target="_blank">{{ $pengaduan->file_dokumen }}</a></td>
                  </tr>
                  <tr>
                    <th>File Lapangan</th>
                    <td><a href="{{asset("storage/file_lapangan/$pengaduan->file_lapangan")}}" target="_blank">{{ $pengaduan->file_lapangan }}</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{url('/pengaduan')}}" type="button" class="btn btn-default">Kembali</a>
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



@section('modals')
    
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