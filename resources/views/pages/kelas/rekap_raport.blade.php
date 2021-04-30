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
            <a class="nav-link active text-sm" id="v-pills-keterampilan-tab" data-toggle="pill" href="#v-pills-keterampilan" role="tab" aria-controls="v-pills-keterampilan" aria-selected="true">Penilaian Keterampilan</a>
            <a class="nav-link text-sm" id="v-pills-pengetahuan-tab" data-toggle="pill" href="#v-pills-pengetahuan" role="tab" aria-controls="v-pills-pengetahuan" aria-selected="false">Penilaian Pengetahuan</a>
       </div>
        <div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-keterampilan" role="tabpanel" aria-labelledby="v-pills-keterampilan-tab">
              <div class="table-responsive">
                <table id="table-raport-keterampilan" class="table table-bordered ">
                  <thead class="thead-dark">
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
                      @foreach($skema_keterampilan as $ske)
                        <td>
                          {{$ske->name}}
                        </td>
                      @endforeach
                    </tr>
                  </thead>

                  <tbody>
                
                  @foreach($siswa as $index => $row)
                    <tr>
                      <td rowspan="{{$kompetensi_dasar_keterampilan->count()+2}}">{{$index+1}}</td>
                      <td rowspan="{{$kompetensi_dasar_keterampilan->count()+2}} ">
                        {{$row->user_detail->name}}
                      </td>
                    </tr>
                    @if($kompetensi_dasar_keterampilan->count()>1)
                    <?php
                      $total_nilai = 0;
                    ?>
                    @foreach($kompetensi_dasar_keterampilan as $kd_keterampilan)
                      <tr>
                          <td>
                            {{$kd_keterampilan->kompetensi_inti->kode}}.{{$kd_keterampilan->id}}
                          </td>
                          <?php
                            $nilai_akhir = 0;
                        ?>
                        @foreach($skema_keterampilan as $ske)
                            <?php 
                              $nilai_akhir =  $nilai_akhir + (int) $ske->by_siswa($row->user_detail->id, $kd_keterampilan->id);
                              
                            ?>
                            <td>
                              {{$ske->by_siswa($row->user_detail->id, $kd_keterampilan->id)}}
                            </td>
                        @endforeach

                        <td>
                          <?php
                              echo $nilai_akhir/$skema_keterampilan->count();
                              $total_nilai += (int) $nilai_akhir/$skema_keterampilan->count();
                          ?>
                        </td>
                      </tr>
                    
                    @endforeach
                    <tr>
                      <td colspan="{{$skema_keterampilan->count()+1}}">
                        <span class="text-sm font-bold">
                          Total Nilai
                        </span>
                      </td>

                      <td>
                        <?php
                          echo $total_nilai;
                        ?>
                      </td>
                    </tr>
                    @else
                    <tr>
                          <td>
                            {{$kompetensi_dasar_keterampilan->first()->kompetensi_inti->kode}}.{{$kompetensi_dasar_keterampilan->first()->id}}
                          </td>
                          <?php
                          
                            $nilai_akhir = 0;
                        ?>
                        @foreach($skema_keterampilan as $ske)
                            <?php 
                              $nilai_akhir =  $nilai_akhir + (int) $ske->by_siswa($row->user_detail->id);
                              
                            ?>
                            <td>
                              {{$ske->by_siswa($row->user_detail->id)}}
                            </td>
                        @endforeach

                        <td>
                          <?php
                              echo $nilai_akhir/3;
                          ?>
                        </td>
                        <tr>
                          <td colspan="{{$skema_keterampilan->count() +1}}">
                            Total Nilai
                          </td>
                          <td>
                            <?php 
                              echo (int)  $nilai_akhir/3;
                            ?>
                          </td>
                        </tr>
                    @endif
                      
                   @endforeach

                   
                  </tbody>
                  
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-pengetahuan" role="tabpanel" aria-labelledby="v-pills-pengetahuan-tab"><div id="accordion">
            <div class="table-responsive table-bordered">
              <table id="dataTableExample" class="table">
                <thead>
                <thead class="text-black font-bold capitalize">
                    <tr>
                      <td rowspan="2">No</td>
                      <td rowspan="2">nama siswa</td>
                      <td rowspan="2">kd</td>
                      <td colspan="{{$skema_pengetahuan->count() }}" class="text-center">penilaian pengetahuan</td>
                      <td rowspan="2">
                        Nilai Akhir
                      </td>
                    </tr>
                    <tr>
                     @foreach($skema_pengetahuan  as $ske)
                        <td>
                          {{$ske->name}}
                        </td>
                     @endforeach
                    </tr>
                  </thead>

                </thead>
            
              <tbody>
              @foreach($siswa as $index => $row) 
                @if($kompetensi_dasar_pengetahuan->count() > 1)
                  <tr>
                    <td rowspan="{{$kompetensi_dasar_pengetahuan->count()+2}}">
                      {{$index + 1}}
                    </td>

                    <td rowspan="{{$kompetensi_dasar_pengetahuan->count()+2}}">
                     <span class="text-lg capitalize font-bold">
                     {{$row->user_detail->name}}
                     </span>
                    </td>
                    <?php $total_nilai_k = 0; ?>
                  </tr>
                  @foreach($kompetensi_dasar_pengetahuan as $kd)

                    <?php 
                    
                      $nilai_akhir_k = 0;
                    ?>
                      <tr>
                        <td>
                          {{$kd->kompetensi_inti->kode}}.{{$kd->id}}
                        </td>

                        @foreach($skema_pengetahuan as $ske)
                        <?php
                        
                          $nilai_akhir_k += (int) $ske->by_siswa($row->user_detail->id, $kd->id);
                          
                        ?>
                          <td>
                            {{$ske->by_siswa($row->user_detail->id, $kd->id)}}
                          </td>
                        @endforeach
                        <td>
                          <?php 
                          
                            echo $nilai_akhir_k/$skema_pengetahuan->count();
                            $total_nilai_k += (int) ($nilai_akhir_k/$skema_pengetahuan->count());
                           
                          ?>
                          
                        </td>
                      </tr>
                  @endforeach
                  <tr>
                    <td colspan="{{$skema_pengetahuan->count()+1}}">
                     <span class="font-bold text-sm">
                      Total Nilai
                     </span>
                    </td>
                    <td>
                      <?php 
                      
                        echo $total_nilai_k;
                        ?>
                    </td>
                  </tr>
                @else
                  <tr>
                    <td colspan="3">
                      {{$index+1}}
                    </td>
                    <td colspan="3">
                      {{$row->user_detail->name}}
                    </td>

                    <td>
                      {{$kompetensi_dasar_pengetahuan->first()->kompetensi_inti_id}}.{{$kompetensi_dasar_pengetahuan->first()->id}}
                    </td>
                      <?php 
                        $nilai_akhir_k = 0;
                      ?>
                    @foreach($skema_pengetahuan as $ske)
                      <?php 
                        $nilai_akhir_k += (int)  $ske->by_siswa($row->user_detail->id, $kompetensi_dasar_pengetahuan->first()->id);
                      ?>
                      <td>
                        $ske->by_siswa($row->user_detail->id, $kompetensi_dasar_pengetahuan->first()->id)
                      </td>
                    @endforeach
                    <td>
                      <?php 
                      
                        echo (int) $nilai_akhir_k/$skema_pengetahuan->count();
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="{{$skema_pengetahuan->count() +1}}">
                          <span class="text-sm font-bold">

                            Total Nilai
                          </span>
                      </td>
                      <td>
                        <?php 
                          echo $nilai_akhir_k;
                        ?>
                      </td>
                  </tr>
                @endif  
              @endforeach
              </tbody>
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

  $('#table-raport-keterampilan').DataTable();
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