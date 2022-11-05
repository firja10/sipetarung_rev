@extends('layouts.sipetarung')

@section('content')
    
@endsection



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





                <form action="" id="input-penertiban" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputDescription">No UPT IMB</label>
                      <input name="no_upt_imb" id="no_upt_imb_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Peringatan 1</label>
                      <input name="sk_peringatan1" id="sk_peringatan1_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 1</label>
                        <div class="input-group date" id="tgl_sk_peringatan1_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan1" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan1_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan1_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Peringatan 2</label>
                      <input name="sk_peringatan2" id="sk_peringatan2_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 2</label>
                        <div class="input-group date" id="tgl_sk_peringatan2_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan2" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan2_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan2_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Peringatan 3</label>
                      <input name="sk_peringatan3" id="sk_peringatan3_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Peringatan 3</label>
                        <div class="input-group date" id="tgl_sk_peringatan3_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_peringatan3" class="form-control datetimepicker-input" data-target="#tgl_sk_peringatan3_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_peringatan3_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Penyegelan</label>
                      <input name="sk_penyegelan" id="sk_penyegelan_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Penyegelan</label>
                        <div class="input-group date" id="tgl_sk_penyegelan_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_penyegelan_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_penyegelan_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Bantib Penyegelan</label>
                      <input name="sk_bantib_penyegelan" id="sk_bantib_penyegelan_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Bantib Penyegelan</label>
                        <div class="input-group date" id="tgl_sk_bantib_penyegelan_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_bantib_penyegelan" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_penyegelan_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_bantib_penyegelan_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Pembongkaran</label>
                      <input name="sk_pembongkaran" id="sk_pembongkaran_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Pembongkaran</label>
                        <div class="input-group date" id="tgl_sk_pembongkaran_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_pembongkaran_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_pembongkaran_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">No SK Bantib Pembongkaran</label>
                      <input name="sk_bantib_pembongkaran" id="sk_bantib_pembongkaran_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tanggal SK Pembongkaran</label>
                        <div class="input-group date" id="tgl_sk_bantib_pembongkaran_create" data-target-input="nearest">
                            <input type="text" name="tgl_sk_bantib_pembongkaran" class="form-control datetimepicker-input" data-target="#tgl_sk_bantib_pembongkaran_create"/>
                            <div class="input-group-append" data-target="#tgl_sk_bantib_pembongkaran_create" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Alamat</label>
                      <textarea name="alamat" id="alamat_create" class="form-control" rows="4"></textarea>
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
                        <label for="inputProjectLeader">File Dokumen</label>
                        <input type="file" name="file_dokumen" id="file_dokumen_create" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">File Lapangan</label>
                        <input type="file" name="file_lapangan" id="file_lapangan_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Keterangan</label>
                      <textarea name="keterangan" id="keterangan_create" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Jenis</label>
                      <select class="js-select2 form-control" id="jenis_create" name="jenis" data-placeholder="Pilih Jenis">
                        <option></option>
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
                      <select class="js-select2 form-control" id="tahapan1_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan 1">Peringatan 1</option>
                        <option value="Peringatan 2">Peringatan 2</option>
                        <option value="Peringatan 3">Peringatan 3</option>
                        <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan2">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan2_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan3">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan3_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan4">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan4_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan5">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan5_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
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
                      <select class="js-select2 form-control" id="tahapan6_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan7">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan7_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Penyegelan)">Bantuan Penertiban (Penyegelan)</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group" id="tahapan8">
                      <label for="inputStatus">Tahapan</label>
                      <select class="js-select2 form-control" id="tahapan8_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
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
                      <select class="js-select2 form-control" id="tahapan9_create" name="tahapan" data-placeholder="Pilih Tahapan">
                        <option></option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                        <option value="Panggilan">Panggilan</option>
                        <option value="Pencabutan IMB">Pencabutan IMB</option>
                        <option value="Peringatan">Peringatan</option>
                        <option value="Bantuan Penertiban (Pembongkaran)">Bantuan Penertiban (Pembongkaran)</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Latitude</label>
                      <input type="text" name="latitude" id="latitude_create" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Longitude</label>
                      <input type="text" name="longitude" id="longitude_create" class="form-control">
                    </div>

                  




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
