@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Kejadian Jurnal Siswa</h5>
    
      </div>
      <form method="POST" action="{{ url('kelas/kejadian_jurnal/update', $kejadians)}}">
      <div class="modal-body">
       
          @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Waktu</label>
            </div>
            <div class="col-lg-8">
            @foreach ( $kejadians as $data )
            <div class="col-lg-8">
                <input type="date" value="{{$data->waktu}}"  placeholder="{{$data->waktu}}" name="waktu" class="form-control">  
              </div>
              @endforeach
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Siswa</label>
            </div>
            <div class="col-lg-8">
              <select name="user_id" class="form-control form-control-sm mb-3">
                <!-- <option selected>- Nama Siswa -</option> -->
                @foreach ( $users as $user )
                  @if($user->role->name_role == 'siswa' )
                   <option selected value="{{$user->id}}">{{ $user->name}}</option>
                  @endif
                @endforeach
                @foreach ( $usersCurrent as $user )
                  @if($user->role->name_role == 'siswa' )
                   <option value="{{$user->id}}">{{ $user->name}}</option>
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
            @foreach ( $kejadians as $data )

              <input class="form-control" value="kejadian" name="kejadian" maxlength="10" id="defaultconfig-3" type="text" placeholder="Type Something..">
            @endforeach
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
            @foreach ( $kejadians as $data )
            @if($data->tindakan=="Positif (+)")
            <option selected value="{{$data->tindakan}}">{{ $data->tindakan}}</option>
            <option value="Negatif (-)">Negatif (-)</option>
@else
<option selected value="{{$data->tindakan}}">{{ $data->tindakan}}</option>
<option value="Positif (+)">Positif (+)</option>
@endif
@endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Tindak Lanjut</label>
            </div>
            <div class="col-lg-8">
            @foreach ( $kejadians as $data )
              <input class="form-control" value="{{$data->tindak_lanjut}}" name="tindak_lanjut" id="defaultconfig-3" rows="3" type="text" placeholder="Type Something.."> 
              </input>
            @endforeach

            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
        <button type="submit" class="btn btn-success">Simpan Kejadian</button>
      </div>
      </form>
    </div>

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