@extends('layouts.sipetarung')

@section('title')
Data Penertiban
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
                    <form action="{{route("search_penertiban")}}" id="input-search" method="get">
                    <div class="row">






                    
                      <div class = "d-flex justify-content-between">
                      <div class = "d-flex justify-content-start mr-4">

                      {{-- <div class="col-3"> --}}
                        <div class="form-group mr-1" id = "forms1">
                          <label>Pilih Kolom 1:</label>
                          <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                            <option value="id">ID</option>
                            <option value="alamat">Alamat</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="keterangan">Keterangan</option>
                            <option value="jenis">Jenis</option>
                            <option value="tahapan">Tahapan</option>
                            <option value="latitude">Latitude</option>
                            <option value="longitude">Longitude</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="sk_peringatan1">SK Peringatan 1</option>
                            <option value="tgl_sk_peringatan1">Tanggal SK Peringatan 1</option>
                            <option value="sk_peringatan2">SK Peringatan 2</option>
                            <option value="tgl_sk_peringatan2">Tanggal SK Peringatan 2</option>
                            <option value="sk_peringatan3">SK Peringatan 3</option>
                            <option value="tgl_sk_peringatan3">Tanggal SK Peringatan 3</option>
                            <option value="sk_penyegelan">SK Penyegelan</option>
                            <option value="tgl_sk_penyegelan">Tanggal SK Penyegelan</option>
                            <option value="sk_bantib_penyegelan">SK Bantib Penyegelan</option>
                            <option value="tgl_sk_bantib_pnyegelan">Tanggal SK Bantib Penyegelan</option>
                            <option value="sk_pembongkaran">SK Pembongkaran</option>
                            <option value="tgl_sk_pembongkaran">Tanggal SK Pembongkaran</option>
                            <option value="sk_bantib_pembongkaran">SK Bantib Pembongkaran</option>
                            <option value="tgl_sk_bantib_pembongkaran">Tanggal SK Bantib Pembongkaran</option>
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
                            <option value="alamat">Alamat</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="keterangan">Keterangan</option>
                            <option value="jenis">Jenis</option>
                            <option value="tahapan">Tahapan</option>
                            <option value="latitude">Latitude</option>
                            <option value="longitude">Longitude</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="sk_peringatan1">SK Peringatan 1</option>
                            <option value="tgl_sk_peringatan1">Tanggal SK Peringatan 1</option>
                            <option value="sk_peringatan2">SK Peringatan 2</option>
                            <option value="tgl_sk_peringatan2">Tanggal SK Peringatan 2</option>
                            <option value="sk_peringatan3">SK Peringatan 3</option>
                            <option value="tgl_sk_peringatan3">Tanggal SK Peringatan 3</option>
                            <option value="sk_penyegelan">SK Penyegelan</option>
                            <option value="tgl_sk_penyegelan">Tanggal SK Penyegelan</option>
                            <option value="sk_bantib_penyegelan">SK Bantib Penyegelan</option>
                            <option value="tgl_sk_bantib_pnyegelan">Tanggal SK Bantib Penyegelan</option>
                            <option value="sk_pembongkaran">SK Pembongkaran</option>
                            <option value="tgl_sk_pembongkaran">Tanggal SK Pembongkaran</option>
                            <option value="sk_bantib_pembongkaran">SK Bantib Pembongkaran</option>
                            <option value="tgl_sk_bantib_pembongkaran">Tanggal SK Bantib Pembongkaran</option>
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
                            <option value="alamat">Alamat</option>
                            <option value="kelurahan">Kelurahan</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="keterangan">Keterangan</option>
                            <option value="jenis">Jenis</option>
                            <option value="tahapan">Tahapan</option>
                            <option value="latitude">Latitude</option>
                            <option value="longitude">Longitude</option>
                            <option value="no_upt_imb">No UPT IMB</option>
                            <option value="sk_peringatan1">SK Peringatan 1</option>
                            <option value="tgl_sk_peringatan1">Tanggal SK Peringatan 1</option>
                            <option value="sk_peringatan2">SK Peringatan 2</option>
                            <option value="tgl_sk_peringatan2">Tanggal SK Peringatan 2</option>
                            <option value="sk_peringatan3">SK Peringatan 3</option>
                            <option value="tgl_sk_peringatan3">Tanggal SK Peringatan 3</option>
                            <option value="sk_penyegelan">SK Penyegelan</option>
                            <option value="tgl_sk_penyegelan">Tanggal SK Penyegelan</option>
                            <option value="sk_bantib_penyegelan">SK Bantib Penyegelan</option>
                            <option value="tgl_sk_bantib_pnyegelan">Tanggal SK Bantib Penyegelan</option>
                            <option value="sk_pembongkaran">SK Pembongkaran</option>
                            <option value="tgl_sk_pembongkaran">Tanggal SK Pembongkaran</option>
                            <option value="sk_bantib_pembongkaran">SK Bantib Pembongkaran</option>
                            <option value="tgl_sk_bantib_pembongkaran">Tanggal SK Bantib Pembongkaran</option>
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


                      <a type="button" href="{{url('/penertiban/tambah_data')}}" class="btn btn-success">Tambah data</a>

                    </center>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
              
                  
                  
                    <br>
                    <br>


                    <center>



                      <div class = "form-group" id = "total_keseluruhan">


                      <h3> <strong>Total Data Yang Ditampilkan : </strong>  <span id = "total_sekarang"> </span> </h3> 
  
     
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
                    <th>No UPT IMB</th>
                    <th>Alamat</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($penertiban as $penertibans)
                    
                        <tr>
                            <td>{{$penertibans->id}}</td>
                            <td>{{$penertibans->no_upt_imb}}</td>
                            <td>{{$penertibans->alamat}}</td>
                            <td>{{$penertibans->kelurahan}}</td>
                            <td>{{$penertibans->kecamatan}}</td>
                    
                            <td><center> <br><a class = "btn btn-secondary mb-2" href = "{{route('penertiban_id',$penertibans->id )}}">View</a> <br> <button class="btn btn-primary" data-toggle="modal" data-target="#EditPenertiban{{$penertibans->id}}">Update</button> </center></td>
                        </tr>







                        <div class="modal fade" id="EditPenertiban{{$penertibans->id}}">
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
                  
    


                                          <form action="{{route('store_penertiban', $penertibans->id)}}" id="input-penertiban" method="POST" enctype="multipart/form-data">

                                            @csrf
                                            @method('PATCH')


                                            <div id="edit-modal1">

                                              <input type="hidden" name="emp_foto_lapangan" id="emp_foto_lapangan">
                                              <input type="hidden" name="emp_foto_dokumen" id="emp_foto_dokumen">
                                              <input type="hidden" name="id" id="id" class="form-control" value="{{$penertibans->id}}">
                                              <div class="form-group">
                                                <label for="inputDescription">No UPT IMB</label>
                                                <input name="no_upt_imb" id="no_upt_imb" class="form-control" value="{{$penertibans->no_upt_imb}}">
                                              </div>
                                              <div class="form-group">
                                                <label for="inputDescription">No SK Peringatan 1</label>
                                                <input name="sk_peringatan1" id="sk_peringatan1" class="form-control" value="{{$penertibans->sk_peringatan1}}">
                                              </div>



                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Peringatan 1</label>
                                                <div class="input-group date" id="tgl_sk_peringatan1" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_peringatan1" id="input_tgl_sk_peringatan1" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan1"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_peringatan1" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal2">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Peringatan 2</label>
                                                <input name="sk_peringatan2" id="sk_peringatan2" class="form-control" value="{{$penertibans->sk_peringatan2}}">
                                              </div>

                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Peringatan 2</label>
                                                <div class="input-group date" id="tgl_sk_peringatan2" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_peringatan2" id="input_tgl_sk_peringatan2" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan2"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_peringatan2" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal3">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Peringatan 3</label>
                                                <input name="sk_peringatan3" id="sk_peringatan3" class="form-control" value="{{$penertibans->sk_peringatan3}}">
                                              </div>
                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Peringatan 3</label>
                                                <div class="input-group date" id="tgl_sk_peringatan3" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_peringatan3" id="input_tgl_sk_peringatan3" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan3"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_peringatan3" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal4">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Penyegelan</label>
                                                <input name="sk_penyegelan" id="sk_penyegelan" class="form-control" value="{{$penertibans->sk_penyegelan}}">
                                              </div>
                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Penyegelan</label>
                                                <div class="input-group date" id="tgl_sk_penyegelan" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_penyegelan" id="input_tgl_sk_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_penyegelan"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_penyegelan" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="edit-modal5">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Bantib Penyegelan</label>
                                                <input name="sk_bantib_penyegelan" id="sk_bantib_penyegelan" class="form-control" value="{{$penertibans->sk_bantib_penyegelan}}">
                                              </div>
                                              
                                            </div>

                                            <div class="form-group">
                                              <label>Tanggal SK Bantib Penyegelan</label>
                                                <div class="input-group date" id="tgl_sk_bantib_penyegelan" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_bantib_penyegelan" id="input_tgl_sk_bantib_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_penyegelan"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_bantib_penyegelan" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal6">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Pembongkaran</label>
                                                <input name="sk_pembongkaran" id="sk_pembongkaran" class="form-control" value="{{$penertibans->sk_pembongkaran}}">
                                              </div>
                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Pembongkaran</label>
                                                <div class="input-group date" id="tgl_sk_pembongkaran" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_pembongkaran" id="input_tgl_sk_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_pembongkaran"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_pembongkaran" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal7">

                                              <div class="form-group">
                                                <label for="inputDescription">No SK Bantib Pembongkaran</label>
                                                <input name="sk_bantib_pembongkaran" id="sk_bantib_pembongkaran" class="form-control" value="{{$penertibans->sk_bantib_pembongkaran}}">
                                              </div>
                                              
                                            </div>
                                            <div class="form-group">
                                              <label>Tanggal SK Pembongkaran</label>
                                                <div class="input-group date" id="tgl_sk_bantib_pembongkaran" data-target-input="nearest">
                                                    <input type="text" name="tgl_sk_bantib_pembongkaran" id="input_tgl_sk_bantib_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_pembongkaran"/>
                                                    <div class="input-group-append" data-target="#tgl_sk_bantib_pembongkaran" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="edit-modal8">


                                              <div class="form-group">
                                                <label for="inputDescription">Alamat</label>
                                                <textarea name="alamat" id="alamat" class="form-control" rows="4">{{$penertibans->alamat}}</textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputClientCompany">Kelurahan</label>
                                                  <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="{{$penertibans->kelurahan}}">
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">Kecamatan</label>
                                                  <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{$penertibans->kecamatan}}">
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">File Dokumen</label>
                                                  <input type="file" name="foto_dokumen" id="foto_dokumen" class="form-control" value="{{$penertibans->foto_dokumen}}">
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">File Lapangan</label>
                                                  <input type="file" name="foto_lapangan" id="foto_lapangan" class="form-control" value="{{$penertibans->foto_lapangan}}">
                                              </div>
                                              <div class="form-group">
                                                <label for="inputDescription">Keterangan</label>
                                                <textarea name="keterangan" id="keterangan" class="form-control" rows="4">{{$penertibans->keterangan}}</textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputStatus">Jenis</label>
                                                <select class="js-select2 form-control" id="jenis" name="jenis" data-placeholder="Pilih Jenis">
                                                  <option value="{{$penertibans->jenis}}" selected>{{$penertibans->jenis}}</option>
                                                  <option value="SKRD Tidak Sesuai IMB">SKRD Tidak Sesuai IMB</option>
                                                  <option value="SKRD Tidak memiliki IMB">SKRD Tidak memiliki IMB</option>
                                                  <option value="IMB - Berkas Dikembalikan">IMB - Berkas Dikembalikan</option>
                                                  <option value="SKRK Belum ber IMB">SKRK Belum ber IMB</option>
                                                  <option value="SLF">SLF</option>
                                                  <option value="Bangunan Tidak ber IMB (Tanah Aset)">Bangunan Tidak ber IMB (Tanah Aset)</option>
                                                  <option value="Bangunan Tidak ber IMB (Persil)">Bangunan Tidak ber IMB (Persil)</option>
                                                  <option value="Bangunan Tidak Sesuai dengan IMB (Persil)">Bangunan Tidak Sesuai dengan IMB (Persil)</option>
                                                  <option value="Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)">Bangunan ber IMB (Sewa Tanah Habis Masa Berlaku)</option>
                                                  <option value="Lainya">Lainya</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan1">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan1" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan 1">Peringatan 1</option>
                                                  <option value="Peringatan 2">Peringatan 2</option>
                                                  <option value="Peringatan 3">Peringatan 3</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                  <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan2">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan2" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                  <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan3">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan3" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                  <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan4">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan4" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                  <option value="Bantuan Penertiban (Pembokaran)">Bantuan Penertiban (Pembokaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan5">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan5" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan 1">Peringatan 1</option>
                                                  <option value="Peringatan 2">Peringatan 2</option>
                                                  <option value="Peringatan 3">Peringatan 3</option>
                                                  <option value="Penghentian Sementara dan atau pembekuan SLF">Penghentian Sementara dan atau pembekuan SLF</option>
                                                  <option value="Penghentian tetap dan atau pencabutan SLF">Penghentian tetap dan atau pencabutan SLF</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan6">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan6" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan7">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan7" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                  <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan8">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan8" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Peringatan 1">Peringatan 1</option>
                                                  <option value="Peringatan 2">Peringatan 2</option>
                                                  <option value="Peringatan 3">Peringatan 3</option>
                                                  <option value="Pembekuan IMB">Pembekuan IMB</option>
                                                  <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                                                </select>
                                              </div>
                                              <div class="form-group" id="tahapan9">
                                                <label for="inputStatus">Tahapan</label>
                                                <select class="js-select2 form-control" id="tahapan9" name="tahapan" data-placeholder="Pilih Tahapan">
                                                  <option value="{{$penertibans->tahapan}}" selected>{{$penertibans->tahapan}}</option>
                                                  <option value="Pemberitahuan">Pemberitahuan</option>
                                                  <option value="Panggilan">Panggilan</option>
                                                  <option value="Pencabutan IMB">Pencabutan IMB</option>
                                                  <option value="Peringatan">Peringatan</option>
                                                  <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">Latitude</label>
                                                  <input type="text" name="latitude" id="latitude" class="form-control" value="{{$penertibans->latitude}}">
                                              </div>
                                              <div class="form-group">
                                                  <label for="inputProjectLeader">Longitude</label>
                                                  <input type="text" name="longitude" id="longitude" class="form-control" value="{{$penertibans->longitude}}">
                                              </div>

                                              <div class="form-group">
                                                <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
                                              </div>
                                              

                                              
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






