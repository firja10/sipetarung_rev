@extends('layouts.sipetarung')

@section('title')

Detail Data SKRK - IMB
    
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
                <h3 class="card-title">Detail Data SKRK - IMB</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="modal-table1" class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>No UPT SKRK</th>
                      <td>{{ $skrk_imb->no_upt }} </td>
                    </tr>
                    <tr>
                      <th>No SK SKRK</th>
                      <td>{{ $skrk_imb->no_skrk }}</td>
                    </tr>
                    <tr>
                      <th>Tanggal SKRK</th>
                      <td>{{ $skrk_imb->tgl_skrk }}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemohon SKRK</th>
                      <td>{{ $skrk_imb->pemohon }}</td>
                    </tr>
                    <tr>
                      <th>Alamat Persil SKRK</th>
                      <td>{{ $skrk_imb->alamat_persil }}</td>
                    </tr>
                    <tr>
                      <th>Permohonan Penggunaan</th>
                      <td>{{ $skrk_imb->permohonan }}</td>
                    </tr>
                    <tr>
                      <th>Peruntukan</th>
                      <td>{{ $skrk_imb->peruntukan_ruang }}</td>
                    </tr>
                    <tr>
                      <th>Kelurahan</th>
                      <td>{{ $skrk_imb->kelurahan }}</td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <td>{{ $skrk_imb->kecamatan }}</td>
                    </tr>
                    <tr>
                      <th>No UPT IMB</th>
                      <td>{{ $skrk_imb->no_upt_imb }}</td>
                    </tr>
                    <tr>
                      <th>No SK IMB</th>
                      <td>{{ $skrk_imb->no_imb }}</td>
                    </tr>
                    <tr>
                      <th>Tanggal IMB</th>
                      <td>{{ $skrk_imb->tgl_imb }}</td>
                    </tr>
                    <tr>
                      <th>Atas Nama</th>
                      <td>{{ $skrk_imb->atas_nama }}</td>
                    </tr>
                    <tr>
                      <th>Nama Pemohon IMB</th>
                      <td>{{ $skrk_imb->nama_pemohon_imb }}</td>
                    </tr>
                    <tr>
                      <th>Alamat Persil IMB</th>
                      <td>{{ $skrk_imb->persil_imb }}</td>
                    </tr>
                    <tr>
                      <th>Penggunaan</th>
                      <td>{{ $skrk_imb->penggunaan }}</td>
                    </tr>
                    <tr>
                      <th>Luas Bangunan</th>
                      <td>{{ $skrk_imb->luas_bangunan }}</td>
                    </tr>
                    <tr>
                      <th>Tinggi Bangunan</th>
                      <td>{{ $skrk_imb->tinggi_bangunan }}</td>
                    </tr>
                    <tr>
                      <th>Jumlah Lantai</th>
                      <td>{{ $skrk_imb->jumlah_lantai }}</td>
                    </tr>
                    <tr>
                      <th><hr></th>
                      <td><hr></td>
                    </tr>
                    <tr>
                      <th>File SKRK</th>
                      <td><a href="{{asset("storage/scan_skrk/$skrk_imb->scan_skrk")}}" target="_blank">{{ $skrk_imb->scan_skrk }}</a></td>
                    </tr>
                    <tr>
                      <th>File Zoning</th>
                      <td><a href="{{asset("storage/scan_zoning/$skrk_imb->scan_zoning")}}" target="_blank">{{ $skrk_imb->scan_zoning }}</a></td>
                    </tr>
                    <tr>
                      <th>File IMB</th>
                      <td><a href="{{asset("storage/scan_imb/$skrk_imb->scan_imb")}}" target="_blank">{{ $skrk_imb->scan_imb }}</a></td>
                    </tr>
                    <tr>
                      <th>File Gambar IMB</th>
                      <td><a href="{{asset("storage/scan_gambar_imb/$skrk_imb->scan_gambar")}}" target="_blank">{{ $skrk_imb->scan_gambar }}</a></td>
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
