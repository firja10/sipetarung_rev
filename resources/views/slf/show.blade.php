@extends('layouts.sipetarung')

@section('title')

Detail Data SLF


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
              <h3 class="card-title">Detail Data SLF</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="modal-table1" class="table-responsive">
                <table class="table">
                  <tr>
                    <th>No SK SLF</th>
                    <td>{{ $slf->no_sk_slf }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SLF</th>
                    <td>{{ $slf->tgl_slf }}</td>
                  </tr>
                  <tr>
                    <th>Jenis SLF</th>
                    <td>{{ $slf->jenis_slf }}</td>
                  </tr>
                  <tr>
                    <th>Nama Bangunan</th>
                    <td>{{ $slf->nama_bangunan }}</td>
                  </tr>
                  <tr>
                    <th>No Persetujuan Teknis</th>
                    <td>{{ $slf->no_persetujuan_teknis }}</td>
                  </tr>
                  {{-- <tr>
                    <th>Tgl Persetujuan Teknis</th>
                    <td>{{ $slf->alamat_teradu }}</td>
                  </tr> --}}
                  <tr>
                    <th>Nama Pemohon SLF</th>
                    <td>{{ $slf->nama_pemohon_slf }}</td>
                  </tr>
                  <tr>
                    <th>Peruntukan</th>
                    <td>{{ $slf->peruntukan }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>{{ $slf->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>{{ $slf->kecamatan }}</td>
                  </tr>
                  <tr>
                    <th>No IMB</th>
                    <td>{{ $slf->no_imb }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal IMB</th>
                    <td>{{ $slf->tgl_imb }}</td>
                  </tr>
                  <tr>
                    <th>Atas Nama</th>
                    <td>{{ $slf->atas_nama }}</td>
                  </tr>
                  <tr>
                    <th>Nama Pemohon IMB</th>
                    <td>{{ $slf->nama_pemohon_imb }}</td>
                  </tr>
                  <tr>
                    <th>Alamat Persil IMB</th>
                    <td>{{ $slf->alamat_persil_imb }}</td>
                  </tr>
                  <tr>
                    <th>Penggunaan Bangunan</th>
                    <td>{{ $slf->penggunaan_bangunan }}</td>
                  </tr>
                  <tr>
                    <th>Luas Bangunan</th>
                    <td>{{ $slf->luas_bangunan }}</td>
                  </tr>
                  <tr>
                    <th>Jumlah Lantai</th>
                    <td>{{ $slf->jumlah_lantai }}</td>
                  </tr>
                  <tr>
                    <th><hr></th>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>File SK SLF</th>
                    <td><a href="{{asset("storage/file_sk_slf/$slf->file_sk_slf")}}" target="_blank">{{ $slf->file_sk_slf }}</a></td>
                  </tr>
                  <tr>
                    <th>File Surat Pernyataan</th>
                    <td><a href="{{asset("storage/file_surat_peryataan/$slf->file_surat_peryataan")}}" target="_blank">{{ $slf->file_surat_peryataan }}</a></td>
                  </tr>
                  <tr>
                    <th>File IMB</th>
                    <td><a href="{{asset("storage/file_imb/$slf->file_imb")}}" target="_blank">{{ $slf->file_imb }}</a></td>
                  </tr>
                  <tr>
                    <th>File Gambar as Build</th>
                    <td><a href="{{asset("storage/file_gambar_as_build/$slf->file_gambar_as_build")}}" target="_blank">{{ $slf->file_gambar_as_build }}</a></td>
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