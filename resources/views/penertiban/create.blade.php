@extends('layouts.sipetarung_penertiban')


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