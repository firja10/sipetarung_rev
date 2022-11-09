{{-- @extends('layouts.sipetarung_penertiban') --}}

@extends('layouts.sipetarung_penertiban')


@section('title')

Membuat Data Pengaduan
    
@endsection





@section('content')
    


 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-6 mt-2">
                    <h3 class="card-title">Tambah Data Penertiban</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="create">











<form action="{{route('store_pengaduan')}}" id="input-pengaduan" method="POST">
    @csrf
 
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


                    <div class="form-group">
                        <a type="button" href="{{asset("/")}}" class="btn btn-default ml-3">Back</a>
                      <button type = "submit" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
                      </div>

                    </form>


                
            </div>
            <!-- /.card-body -->
            <div class="card-footer" id="footer-create">
              
            </div>
          </div>
          <!-- /.card -->
        </div>
        <div class="col-6">
          <div id="mapid"></div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  @endsection