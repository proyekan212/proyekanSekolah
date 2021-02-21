@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kejadian / Jurnal</li>
  </ol>
</nav>

<div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap siswa di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Kejadian Jurnal Siswa Pada MIPA X-MIPA-1_MIPA Biologi</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Kejadian</button>
            <button type="button" class="btn btn-outline-danger" onclick="showSwal('passing-parameter-execute-cancel')">Cetak Excel</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Nama Siswa</th>
                <th>Kejadian/Perilaku</th>
                <th>Butir Sikap</th>
                <th>Pos/Neg</th>
                <th>Tindak Lanjut</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datas as $key => $data) 
                @if(!$data->hapus == 1)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->waktu}}</td>
                    <td>{{$data->siswa->name}}</td>
                    <td>{{$data->kejadian}}</td>
                    <td>{{$data->butir_sikap}}</td>
                    <td>{{$data->tindakan}}</td>
                    <td>{{$data->tindak_lanjut}}</td>
                    <td class="flex ">
                        <button data-toggle="modal" data-target="#UpdateData" class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 ">
                          <span class="material-icons">
                            edit
                          </span>
                        </button>
                
                      <form method="post" action="{{ url('kelas/kejadian_jurnal', $data->id)}}" onclick="deleteData('{{$data->id}}', this)" >
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
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Jurnal Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ url('kelas/kejadian_jurnal') }}">
      <div class="modal-body">
       
          @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Waktu</label>
            </div>
            <div class="col-lg-8">
              
                <input type="date" name="waktu" class="form-control">
              
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Siswa</label>
            </div>
            <div class="col-lg-8">
              <select name="user_id" class="form-control form-control-sm mb-3">
                <option selected>- Nama Siswa -</option>
                @foreach ( $users as $user )
                 <option value="{{$user->id}}">
                  {{$user->name}}
                 </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Kejadian Atau Prilaku</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" name="kejadian" maxlength="10" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Butir Sikap</label>
            </div>
            <div class="col-lg-8">
              <select name="butir_sikap" class="form-control form-control-sm mb-3">
                <option selected value="">- Butir Sikap -</option>
                <option value="Tanggung Jawab">Tanggung Jawab</option>
                <option value="Jujur">Jujur</option>
                <option value="Gotong Royong">Gotong Royong</option>
                <option value="Percaya Diri">Percaya Diri</option>
                <option value="Disiplin">Disiplin</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Positif/Negatif</label>
            </div>
            <div class="col-lg-8">
              <select name="tindakan" class="form-control form-control-sm mb-3">
                <option selected value="">- Pilih Jenis Kejadian -</option>
                <option value="Positif (+)">Positif (+)</option>
                <option value="Negatif (-)">Negatif (-)</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Tindak Lanjut</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tindak_lanjut" id="defaultconfig-3" rows="3" type="text" placeholder="Type Something.."> 
              </textarea>
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan Kejadian</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="UpdateData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Kejadian Jurnal Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ url('kelas/kejadian_jurnal') }}">
      <div class="modal-body">
       
          @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Waktu</label>
            </div>
            <div class="col-lg-8">
              <div class="input-group date datepicker" id="datePickerExample">
                <input type="date" name="waktu" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Siswa</label>
            </div>
            <div class="col-lg-8">
              <select name="user_id" class="form-control form-control-sm mb-3">
                <option selected>- Nama Siswa -</option>
                @foreach ( $users as $user )
                  @if($user->role->name_role == 'siswa' )
                   <option value="{{$user->id}}">{{ $user->username}}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Kejadian Atau Prilaku</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" name="kejadian" maxlength="10" id="defaultconfig-3" type="text" placeholder="Type Something..">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Butir Sikap</label>
            </div>
            <div class="col-lg-8">
              <select name="butir_sikap" class="form-control form-control-sm mb-3">
                <option selected value="">- Butir Sikap -</option>
                <option value="Tanggung Jawab">Tanggung Jawab</option>
                <option value="Jujur">Jujur</option>
                <option value="Gotong Royong">Gotong Royong</option>
                <option value="Percaya Diri">Percaya Diri</option>
                <option value="Disiplin">Disiplin</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Positif/Negatif</label>
            </div>
            <div class="col-lg-8">
              <select name="tindakan" class="form-control form-control-sm mb-3">
                <option selected value="">- Pilih Jenis Kejadian -</option>
                <option value="Positif (+)">Positif (+)</option>
                <option value="Negatif (-)">Negatif (-)</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Tindak Lanjut</label>
            </div>
            <div class="col-lg-8">
              <textarea class="form-control" name="tindak_lanjut" id="defaultconfig-3" rows="3" type="text" placeholder="Type Something.."> 
              </textarea>
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan Kejadian</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
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
      
        event.submit();
    })
  }
</script>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush