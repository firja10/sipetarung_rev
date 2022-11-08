@extends('layouts.sipetarung')

@section('title')
Detail Data Pertelaan
@endsection


@section('content')
    




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Data Pertelaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="modal-table1" class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>No SK Pertelaan</th>
                      <td>{{ $pertelaan->no_sk_pertelaan }}</td>
                    </tr>
                    <tr>
                      <th>Tanggal Pertelaan</th>
                      <td>{{ $pertelaan->tgl_pertelaan }}</td>
                    </tr>
                    <tr>
                      <th>Jenis Pertelaan</th>
                      <td>{{ $pertelaan->jenis_pertelaan }}</td>
                    </tr>
                    <tr>
                      <th>Nama Bangunan</th>
                      <td>{{ $pertelaan->nama_bangunan }}</td>
                    </tr>
                    <tr>
                      <th>No Persetujuan Teknis</th>
                      <td>{{ $pertelaan->no_persetujuan_teknis }}</td>
                    </tr>
                    <tr>
                      <th>Tgl Persetujuan Teknis</th>
                      <td>{{ $pertelaan->tgl_persetujuan_teknis }}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemohon Pertelaan</th>
                      <td>{{ $pertelaan->nama_pemohon_pertelaan }}</td>
                    </tr>
                    <tr>
                      <th>Permohonan Bangunan Pertelaan</th>
                      <td>{{ $pertelaan->permohonan_bangunan_pertelaan }}</td>
                    </tr>
                    <tr>
                      <th>Kelurahan</th>
                      <td>{{ $pertelaan->kelurahan }}</td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <td>{{ $pertelaan->kecamatan }}</td>
                    </tr>
                    <tr>
                      <th>No IMB</th>
                      <td>{{ $pertelaan->no_imb }}</td>
                    </tr>
                    <tr>
                      <th>Tanggal IMB</th>
                      <td>{{ $pertelaan->tgl_imb }}</td>
                    </tr>
                    <tr>
                      <th>Atas Nama</th>
                      <td>{{ $pertelaan->atas_nama }}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemohon IMB</th>
                      <td>{{ $pertelaan->nama_pemohon_imb }}</td>
                    </tr>
                    <tr>
                      <th>Alamat Persil IMB</th>
                      <td>{{ $pertelaan->alamat_persil_imb }}</td>
                    </tr>
                    <tr>
                      <th>Penggunaan Bangunan</th>
                      <td>{{ $pertelaan->penggunaan_bangunan }}</td>
                    </tr>
                    <tr>
                      <th>Luas Bangunan</th>
                      <td>{{ $pertelaan->luas_bangunan }}</td>
                    </tr>
                    <tr>
                      <th>Jumlah Lantai</th>
                      <td>{{ $pertelaan->jumlah_lantai }}</td>
                    </tr>
                    <tr>
                      <th><hr></th>
                      <td><hr></td>
                    </tr>
                    <tr>
                      <th>File SK Pertelaan</th>
                      <td><a href="{{asset("storage/file_sk_pertelaan/$pertelaan->file_sk_pertelaan")}}" target="_blank">{{ $pertelaan->file_sk_pertelaan }}</a></td>
                    </tr>
                    <tr>
                      <th>File Perstek</th>
                      <td><a href="{{asset("storage/file_perstek/$pertelaan->file_perstek")}}" target="_blank">{{ $pertelaan->file_perstek }}</a></td>
                    </tr>
                    <tr>
                      <th>File Gambar Pertelaan</th>
                      <td><a href="{{asset("storage/file_gambar_pertelaan/$pertelaan->file_gambar_pertelaan")}}" target="_blank">{{ $pertelaan->file_gambar_pertelaan }}</a></td>
                    </tr>
                    <tr>
                      <th>File Gambar as Build</th>
                      <td><a href="{{asset("storage/file_gambar_as_build/$pertelaan->file_gambar_as_build")}}" target="_blank">{{ $pertelaan->file_gambar_as_build }}</a></td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{url('/pertelaan')}}" type="button" class="btn btn-default">Kembali</a>
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