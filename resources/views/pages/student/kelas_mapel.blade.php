@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active text-lg" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Penilaian Pengetahuan</a>
      <a class="nav-link text-lg" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Penialain Keterampilan</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="flex w-full px-4 flex row">
          <div id="accordion" class="w-full">
          @foreach($kelas_mapel->penilaian_pengetahuan as $row)
          <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn capitalize btn-link" data-toggle="collapse" data-target="#collapse{{$row->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$row->pertemuan}}
                    </button>
                </h5>
                </div>

                <div id="collapse{{$row->id}}" class="collapse show" aria-labelledby="heading{{$row->id}}" data-parent="#accordion">
                <div class="card-body">
                    <div>
                        <p>Tugas:</p> {{$row->instruksi}}
                    </div>

                    <div class="mt-4">
                       <p>Kumpulkan Tugas:</p>  <input type="file">
                    </div>
                </div>
                </div>
         </div>
  
            @endforeach
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div id="accordion">
          @foreach($kelas_mapel->penilaian_keterampilan as $index => $row)
          <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn capitalize btn-link" data-toggle="collapse" data-target="#collapse{{$row->id}}" aria-expanded="true" aria-controls="collapseOne">
                       Pertemuan {{$index + 1}}
                    </button>
                </h5>
                </div>

                <div id="collapse{{$row->id}}" class="collapse show" aria-labelledby="heading{{$row->id}}" data-parent="#accordion">
                <div class="card-body">
                    <div>
                        <p>Tugas:</p> {{$row->keterangan}}
                    </div>

                    <div class="mt-4">
                       <p>Kumpulkan Tugas:</p>  <input type="file">
                    </div>
                </div>
                </div>
         </div>
  
            @endforeach
          </div>
  </div></div>
    </div>
    
</div>
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