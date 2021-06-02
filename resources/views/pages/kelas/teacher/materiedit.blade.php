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

       
      <div class="modal-body">
         <form method="POST" action="{{ url('kelas/materi_bahan_ajar', $materi->id)}}">
        {{ method_field('PATCH')}}
        @csrf
        <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Nama Materi</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" value="{{$materi->name}}" class="form-control" name="name">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Link Url</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" value="{{$materi->link}}" class="form-control" name="link">
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
           <a href="{{url('dashboard')}}">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
        </a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bahan Ajar</h5>
        <button type="button" class="close" onclick="closeModal()" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
      </div>    
      
      <div class="modal-body flex justify-center">
        <iframe id="frame-video" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush