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
      <form method="POST" action="{{ url('Jadwal_Pelajaran', $datas->id)}}">
        @csrf

        {{ method_field('PATCH')}}
      
      <div class="modal-body">
       
          @csrf
          <div class="form-group">
            <label for="recipient-name">Pilih Guru:</label>
            <select name="guru" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              <option value="Hari">Hari</option>
              <option value="Apri">Apri</option>
              <option value="Iwan Sapta">Iwan Sapta</option>
              <option value="Mursalin">Mursalin</option>
              <option value="Mukayin">Mukayin</option>
            </select>
          </div>
         <!--  <div class="form-group">
            <label for="message-text">Pilih Jurusan:</label>
            <select name="jurusan" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showJurusan as $value)
              <option value="{{ $value->jurusan }}">{{ $value->jurusan }}</option>
              @endforeach
            </select>
          </div> -->
           <div class="form-group">
            <label for="message-text">Pilih Jenjang:</label>
            <select name="nama_semester" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              @foreach($showTahunAjaran as $value)
              <option value="{{ $value->nama_semester }}">{{ $value->nama_semester }}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="recipient-name">Pilih Kelas:</label>
            <select name="kelas" class="form-control form-control-sm mb-3">
              <!-- <option selected>Open this select menu</option> -->
              @foreach($showKelas as $value)
              <option value="{{ $value->kelas }}">{{ $value->kelas }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Mata Pelajaran:</label>
            <select name="mata_pelajaran" class="form-control form-control-sm mb-3">
              <option selected><!-- Open this select menu --></option>
              @foreach($showMapel as $value)
              <option value="{{ $value->id }}">{{ $value->nama_mapel }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-success">Simpan</button>
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