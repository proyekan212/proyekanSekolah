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
    <li class="breadcrumb-item active" aria-current="page">Materi Bahan Ajar</li>
  </ol>
</nav>

<div class="bg-white rounded-lg shadow-sm p-4 md:p-6 lg:p-8 w-full">
  <div class="flex justify-end mb-4 md:mb-6 lg:mb-8">
   <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Rencana Pembelajaran</button>
  </div>
 
  <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-6">
      <div
        id="card"
        class="w-full p-4 shadow-xl md:p-3 lg:p-8 bg-gray-100 rounded-lg "
      >
        <h1 class="text-lg mb-2 md:mb-4 font-semibold text-black">
          Sholawat
        </h1>
        <div id="thumbnail" class="mb-2 w-full md:mb-4">
          <img
            class="rounded-lg w-full"
            src="data:image/png;base64,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"
            alt=""
          />
        </div>
        <p class="text-xs mb-2 md:mb-4 text-gray-500">
          15 Februari 2021 Pukul 21:26:22
        </p>
        <p
          class="bg-green-500 py-1 mb-2 md:mb-4 flex justify-center text-white rounded-xl"
        >
          <span class="text-xs">
            Suryadi, S.pd
          </span>
        </p>
        <div class="flex justify-between">
          <a
            href=""
            style="font-size: 24px;"
            class="text-blue-600 transition-all duration-300 hover:text-blue-400"
          >
            <i class="fas fa-edit"> </i>
          </a>
          <a
            href=""
            class="px-6 flex rounded-xl items-center md:px-8 bg-gray-200 "
          >
            <span
              class="text-xs md:text-sm  font-semibold text-black capitalize"
            >
              open link
            </span>
          </a>
          <a
            href=""
            style="font-size: 24px;"
            class="text-red-600 transition-all duration-300 hover:text-red-400"
          >
            <i class="fas fa-trash"> </i>
          </a>
        </div>
      </div>
    </div>
  
</div>

<div class="modal fade TambahData" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bahan Ajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('kelas/materi_bahan_ajar')}}">
        @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Materi</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" class="form-control" name="name">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Link Url</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" class="form-control" name="link">
              </div>
            </div>
          </div>
          <!-- <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">File</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="file" class="form-control" name="file">
              </div>
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