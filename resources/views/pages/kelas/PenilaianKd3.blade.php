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
    <li class="breadcrumb-item active" aria-current="page">Penilaian Pengetahuan </li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Penilaian Pengetahuan Kelas di MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Pertemuan</th>
                <th>Kompetensi Dasar</th>
                <th>Skema</th>
                <th>Keterangan</th>
                <th>Waktu</th>
                <th>Hasil</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
<?php $no = 1;?>
<tr>
@foreach($data as $data)     
          <td><?php echo $no;?></td>
            <td>{{$data->pertemuan}}</td>
            <td><b>{{$data->kompetensi_dasar->kompetensi_inti->kode}}.{{$data->kompetensi_dasar->id}}</b> {{$data->kompetensi_dasar->nama_kompetensi_dasar}}</td>
            <td>{{$data->skema_penilaian}}</td>
            <td>{{$data->instruksi}}</td>
            <td>{{$data->mulai_pengerjaan}} - {{$data->finish_pengerjaan}}</td>
            <td>{{$data->penilaian_harian}}</td>
            <?php $no++;?>
           
                  <td class="flex ">
                       <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            <a href="{{ url('kelas/penilaian_pengetahuan/edit', $data->id)}}">
                            edit
                            </a>
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('kelas/penilaian_pengetahuan', $data->id)}}" onclick="deleteData('{{$data->id}}', this)" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="button"  class="text-red-500 hover:text-red-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300">
                          <span class="material-icons"> 
                            delete_forever  
                          </span>
                        </button>
                      </form>
                    </td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tugas Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('kelas/penilaian_pengetahuan')}}">
        @csrf
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Mulai Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date" name="mulai_pengerjaan" class="form-control"  />
            </div>
            <div class="col-lg-2">
              <label class="col-form-label">Finish Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date"  name="finish_pengerjaan" class="form-control"   />
              
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Pertemuan Ke (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="pertemuan" class="form-control form-control-sm mb-3">
                  <option selected>- Pilih Pertemuan -</option>
                  <?php
                    for ($x = 1; $x <= 4; $x++) { 
                      echo "<option value='pertermuan $x'> pertemuan $x</option> ";
                    }
                  ?>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Skema</label>
            </div>
            <div class="col-lg-8">
              <select name="skema_penilaian" class="form-control form-control-sm mb-3">
                  <option selected value="">- Pilih Skema</option>
                  <option selected value="tes tulis">Tes Tulis</option>
                  <option selected value="tes lisan">Tes Lisan</option>
                  <option selected value="penugasan">Penugasan</option>
                  
                  
                </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Penilaian Harian</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" type="number" maxlength="10" name="penilaian_harian" id="defaultconfig-3" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kompetensi Dasar (KD) (*)</label>
            </div>
            <div class="col-lg-8">
              <select name="kompetensi_dasar_id" class="form-control form-control-sm mb-3">
                <option selected>- Pilih Kompetensi Inti (KI) -</option>
                    @foreach($kompetensi_dasars as $index => $row) 

                      @if($row->kompetensi_inti->name == 'pengetahuan')
                      <option value="{{$row->id}}">
                        {{$row->kompetensi_inti->kode}}.{{$index+1}} {{$row->nama_kompetensi_dasar}}
                      </option>
                      @endif
                    @endforeach
              </select>
            </div>
          </div>
          <!--  -->
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Keterangan</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="instruksi" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div>
          <!-- <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Metode (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Media/Sumber Belajar (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Kegiatan Pembelajaran (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Penilaian (Opsional)</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tinymce" id="simpleMdeExample" rows="10"></textarea>
            </div>
          </div> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
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