@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penilaian Pengetahuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form method="POST" action="{{ url('kelas/penilaian_pengetahuan', $datas->id)}}">
        {{ method_field('PATCH')}}

        @csrf
      <div class="modal-body">
        
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Mulai Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date" required value="{{$datas->mulai_pengerjaan}}" name="mulai_pengerjaan" class="form-control"  />
            </div>
            <div class="col-lg-2">
              <label class="col-form-label">Finish Pengerjaan</label>
            </div>
            <div class="col-lg-3">
              <input type="date"  required value="{{$datas->finish_pengerjaan}}" name="finish_pengerjaan" class="form-control"   />
              
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
                  @foreach($skema as $ske)
                    <option value="{{$ske->id}}">
                      {{$ske->name}}
                    </option>
                  @endforeach
                  
                  
                </select>
            </div>
          </div>
          <div class="form-group mb-0 row">
            <div class="col-lg-3">
              <label class="col-form-label">Penilaian Harian</label>
            </div>
            <div class="col-lg-8">
              <input class="form-control" type="number" maxlength="10" value="{{$datas->penilaian_harian}}" name="penilaian_harian" id="defaultconfig-3" placeholder="Type Something..">
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
              <textarea class="form-control" value="{{$datas->instruksi}}" name="instruksi" id="simpleMdeExample" rows="10"></textarea>
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