@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">RPP</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Rekap Raport Pada MIPA X-MIPA-1_MIPA Biologi</h6>
          <!-- <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
          </div> -->
        </div>
        <div class="nav flex py-4 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active text-sm" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Penilaian Pengetahuan</a>
            <a class="nav-link text-sm" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Penialain Keterampilan</a>
       </div>
        <div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="table-responsive">
                <table id="table-raport" class="table table-bordered">
                  <thead>
                    <tr>
                      <td rowspan="2">No</td>
                      <td rowspan="2">nama siswa</td>
                      <td rowspan="2">kd</td>
                      <td colspan="3" class="text-center">penilaian keterampilan</td>
                      <td rowspan="2">
                        Nilai Akhir
                      </td>
                    </tr>
                    <tr>
                      <td>tes tulis</td>
                      <td>tes lisan</td>
                      <td>penugasan</td>
                    </tr>
                  </thead>

                  <tbody>
                
                   @foreach($siswa as $index => $siswa)
                    <tr>
                      <td>{{$index+1}}</td>
                      <td>
                        {{$siswa->user_detail->name}}
                      </td>
                      <td>
                        kd
                      </td>
                      <?php
                        $nilai_akhir = 0;
                     ?>
                     @foreach($skema_keterampilan as $ske)
                        <?php 
                          $nilai_akhir =  $nilai_akhir + (int) $ske->by_siswa($siswa->user_detail->id);
                          
                        ?>
                        <td>
                          {{$ske->by_siswa($siswa->user_detail->id)}}
                        </td>
                     @endforeach

                     <td>
                      <?php
                          echo $nilai_akhir/3;
                      ?>
                     </td>
                    
                   @endforeach

                   
                  </tbody>
                  
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div id="accordion">
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
            
            </table>
        </div>
            </div>
            </div>
       </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Kelas RPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="{{ url('kelas/rpp')}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" class="form-control" name="name">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">File</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="file" class="form-control" name="file">
              </div>
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">

$(document).ready(function() {

  $('#table-raport').DataTable();
})
  function editData(id){
    console.log(id);
  }
  function deleteData(id, event) {
    Swal.fire({
      title: 'Apakah yakin menghapus data ini ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      
        if(result.value) {
          event.submit();
        }
    })
  }
</script>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
  <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/tinymce.js') }}"></script>
  <script src="{{ asset('assets/js/simplemde.js') }}"></script>
  <script src="{{ asset('assets/js/ace.js') }}"></script>
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush