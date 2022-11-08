@extends('layouts.sipetarung')


@section('title')

Data Detail Penertiban 
    
@endsection





@section('link_lain')
    
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
                    <th>No UPT IMB</th>
                    <td>{{ $penertiban->no_upt_imb }} </td>
                  </tr>
                  <tr>
                    <th>No SK Peringatan 1</th>
                    <td>{{ $penertiban->no_sk_peringatan1 }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Peringatan 1</th>
                    <td>{{ $penertiban->tgl_sk_peringatan1 }}</td>
                  </tr>
                  <tr>
                    <th>No SK Peringatan 2</th>
                    <td>{{ $penertiban->no_sk_peringatan2 }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Peringatan 2</th>
                    <td>{{ $penertiban->tgl_sk_peringatan2 }}</td>
                  </tr>
                  <tr>
                    <th>No SK Peringatan 3</th>
                    <td>{{ $penertiban->no_sk_peringatan3 }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Peringatan 3</th>
                    <td>{{ $penertiban->tgl_sk_peringatan3 }}</td>
                  </tr>
                  <tr>
                    <th>No SK Penyegelan</th>
                    <td>{{ $penertiban->no_sk_penyegelan }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Penyegelan</th>
                    <td>{{ $penertiban->tgl_sk_penyegelan }}</td>
                  </tr>
                  <tr>
                    <th>No SK Bantib Penyegelan</th>
                    <td>{{ $penertiban->no_sk_bantib_penyegelan }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Pembongkaran</th>
                    <td>{{ $penertiban->tgl_sk_pembongkaran }}</td>
                  </tr>
                  <tr>
                    <th>No SK Bantib Pembongkaran</th>
                    <td>{{ $penertiban->tgl_sk_bantib_pembongkaran }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal SK Bantib Pembongkaran</th>
                    <td>{{ $penertiban->tgl_sk_bantib_pembongkaran }}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>{{ $penertiban->alamat }}</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>{{ $penertiban->kelurahan }}</td>
                  </tr>
                  <tr>
                    <th>Kecamatan</th>
                    <td>{{ $penertiban->kecamatan }}</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>{{ $penertiban->keterangan }}</td>
                  </tr>
                  <tr>
                    <th>Jenis</th>
                    <td>{{ $penertiban->jenis }}</td>
                  </tr>
                  <tr>
                    <th>Tahapan</th>
                    <td>{{ $penertiban->tahapan }}</td>
                  </tr>
                  <tr>
                    <th><hr></th>
                    <td><hr></td>
                  </tr>
                  <tr>
                    <th>File Dokumen</th>
                    <td><a href="{{asset("storage/file_dokumen/$penertiban->file_dokumen")}}" target="_blank">{{ $penertiban->file_dokumen }}</a></td>
                  </tr>
                  <tr>
                    <th>File Lapangan</th>
                    <td><a href="{{asset("storage/file_lapangan/$penertiban->file_lapangan")}}" target="_blank">{{ $penertiban->file_lapangan }}</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{url('/penertiban')}}" type="button" class="btn btn-default">Kembali</a>
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


$(document).ready(function() {
    
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