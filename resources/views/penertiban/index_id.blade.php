@extends('layouts.sipetarung_penertiban_id')





@section('title')

Edit Data Penertiban
    
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
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-6 mt-2">
                    <h3 class="card-title">Edit Data Penertiban</h3>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="create">




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