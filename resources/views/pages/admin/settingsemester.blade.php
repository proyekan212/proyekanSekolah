@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active capitalize" aria-current="page" >daftar siswa kelas</li>
  </ol>
</nav>

<!-- <div class="alert alert-primary " role="alert">
  <h4 class="alert-heading">Info!</h4>
  <p>Jurnal oleh guru mata pelajaran dibuat untuk seluruh peserta didik yang mengikuti mata pelajarannya, setiap kejadian terhadap siswa di dalam kelas mata pelajaran yang Anda ampu dapat dicatat dalam jurnal guru agar dapat dimonitor Wali Kelas dan Guru BK</p>
</div> -->

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <!--<h6 class="card-title mb-0">Daftar Siswa Tergabung Pada IPA X IPA 1_MIPA Fisika</h6>-->

          <div class="dropdown mb-2">
            <!--<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Semester</button>-->
          </div>
        </div>
        <div class="p-4"> 
          <form method="post" action="{{ url('Setting_Semester', $setting->id)}}">
          {{method_field('PATCH')}}
          @csrf
            <div class="py-2 w-full">
              
                <label class=" col-span-full md:col-span-4" for="">
                  Semester
                </label>
                <select class=""  name="semester_id" class="form-control" id="">
                  @foreach($semester as $row)
                    @if($setting->semester_id == $row->id)
                      <option selected value="{{$row->id}}">
                        {{$row->nama_semester}}
                      </option>

                    @else
                      <option value="{{$row->id}}">
                        {{$row->nama_semester}}
                      </option>
                    @endif
                  @endforeach
                </select>
              
            </div>

            <div class="py-2 w-full">
              
              <label class=" col-span-full md:col-span-4" for="">
                Tahun Akademik
              </label>
              <select class=""  name="tahun_akademik_id" class="rounded-xl border-gray-200" id="">
                @foreach($tahun_akademik as $row)
                  @if($setting->tahun_akademik_id == $row->id)
                    <option value="{{$row->id}}" selected>
                      {{$row->tahun_akademik}}
                    </option>
                  @else
                    <option value="{{$row->id}}">
                      {{$row->tahun_akademik}}
                    </option>
                  @endif
                @endforeach
              </select>
            
            </div>
            <div class="mt-4 flex justify-end">

              <button type="submit" class="px-4 py-2 rounded-xl bg-blue-400 text-white text-sm">
                Change Setting
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
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