@extends('layouts.sipetarung')


@section('title')

Detail Data TABG
    
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
              <h3 class="card-title">Detail Data TABG</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="modal-table1" class="table-responsive">
                <table class="table">
                  <tr>
                    <th>Tanggal TABG</th>
                    <td>{{ $tabg->tgl_tabg }}</td>
                  </tr>
                  <tr>
                    <th>Nama Pemohon TABG</th>
                    <td>{{ $tabg->nama_pemohon }}</td>
                  </tr>
                  <tr>
                    <th>No Telp Pemohon</th>
                    <td>{{ $tabg->no_telp_pemohon }}</td>
                  </tr>
                  <tr>
                    <th>Nama Kuasa</th>
                    <td>{{ $tabg->nama_kuasa }}</td>
                  </tr>
                  <tr>
                    <th>No Telp Kuasa</th>
                    <td>{{ $tabg->no_telp_kuasa }}</td>
                  </tr>
                  <tr>
                    <th>Kode Verifikasi</th>
                    <td>{{ $tabg->kode_verifikasi }}</td>
                  </tr>
                  <tr>
                    <th>Nama Proyek</th>
                    <td>{{ $tabg->nama_proyek }}</td>
                  </tr>
                  <tr>
                    <th>Penggunaan Bangunan</th>
                    <td>{{ $tabg->penggunaan_bangunan }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Persil</th>
                    <td>{{ $tabg->alamat_persil }}</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>{{ $tabg->kecamatan }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>{{ $tabg->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>No IMB</th>
                    <td>{{ $tabg->no_imb }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal dan Jam Sidang</th>
                    <td>{{ $tabg->tgl_jam_sidang }}</td>
                  </tr>
                  <tr>
                    <th>Tempat Sidang</th>
                    <td>{{ $tabg->tempat_sidang }}</td>
                  </tr>
                  <tr>
                    <th><hr></th>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>File Gambar ARS</th>
                    <td><a href="{{asset("storage/file_gambar_ars/$tabg->file_gambar_ars")}}" target="_blank">{{ $tabg->file_gambar_ars }}</a></td>
                  </tr>
                  <tr>
                    <th>File Gambar STR</th>
                    <td><a href="{{asset("storage/file_gambar_str/$tabg->file_gambar_str")}}" target="_blank">{{ $tabg->file_gambar_str }}</a></td>
                  </tr>
                  <tr>
                    <th>File Gambar MEP</th>
                    <td><a href="{{asset("storage/file_gambar_mep/$tabg->file_gambar_mep")}}" target="_blank">{{ $tabg->file_gambar_mep }}</a></td>
                  </tr>
                  <tr>
                    <th>File Laporan Struktur</th>
                    <td><a href="{{asset("storage/file_laporan_struktur/$tabg->file_laporan_struktur")}}" target="_blank">{{ $tabg->file_laporan_struktur }}</a></td>
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