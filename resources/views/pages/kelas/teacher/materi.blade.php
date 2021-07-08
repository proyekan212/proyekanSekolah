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
   <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".TambahData">Buat Materi Pembelajaran</button>
  </div>
 
  <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-6">
      @if(count($materi) < 1)
          <h1 class="font-semibold lg:text-lg md:text-base text-sm">
            Masih belum memiliki materi bahan ajar
          </h1>
      @else
     
        @foreach($materi as $row)
            <div
              id="card"
              class="w-full p-4 shadow-xl md:p-3 lg:p-8 bg-gray-100 rounded-lg "
              >
              <h1 class="text-lg capitalize mb-2 md:mb-4 font-semibold text-black">
                {{$row->name}}
              </h1>
              <div id="thumbnail" class="mb-2 w-full md:mb-4">
              </div>
              <p class="text-xs mb-2 md:mb-4 text-gray-500">
                {{$row->created_at}}
              </p>
              <p
                class=" mb-2 md:mb-4 md:text-xs text-sm"
              >
                {{$row->descriptions}}
              </p>
              <div class="flex justify-between">
                <a
                  href="{{ url ('kelas/materi_bahan_ajar', $row->id) }}"
                  style="font-size: 24px;"
                  class="text-blue-600 transition-all duration-300 hover:text-blue-400"
                >
                  <i class="fas fa-edit"> </i>
                </a>
                @if($row->type == "file")
                <a
                  href="{{ url('/materi_bahan_ajar/'.$kelas_mapel.'/'.$row->link)}}"
                  class="px-6 flex rounded-xl items-center md:px-8 bg-gray-200 "
                >
                <span
                    class="text-xs md:text-sm  font-semibold text-black capitalize"
                  >
                    open file
                  </span>
                </a>
                @else
                <a
                  href="#"
                  onclick="showVideo('{{$row->link}}')"
                  data-toggle="modal"
                  data-target="#video"
                  class="px-6 flex rounded-xl items-center md:px-8 bg-gray-200 hover:text-white hover:bg-green-400"
                >
                <span
                    class="text-xs md:text-sm  font-semibold  capitalize"
                  >
                    open link
                  </span>
                </a>
                @endif

                
                <form style="cursor: pointer;" action="{{ url ('kelas/materi_bahan_ajar', $row->id) }}"  class="text-red-600 transition-all duration-300 hover:text-red-400" onclick="deleteMateri('{{$row->id}}', this)" method="post">
                  @csrf
                  {{ method_field('DELETE') }}
                    <a
                      
                      style="font-size: 24px;"
                    
                    >
                    <span class="material-icons" style="font-size: 30px;margin-top: 0.5em;"> 
                            delete_forever  
                          </span>
                    </a>
                </form>
                
                
              </div>
            </div>
        @endforeach

      @endif
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
        <form id="create" method="post" enctype="multipart/form-data" action="{{ url('kelas/materi_bahan_ajar')}}">
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
              <label class="col-form-label">Deskripsi Materi</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <textarea name="descriptions"  class="form-control" rows="4"> </textarea>
              </div>
            </div>
          </div>

          
          <div class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Type Materi</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <select class="form-control" onchange="typeMateri(this)" name="type" id="">
                  <option value="video">
                    video
                  </option>
                  <option value="file">
                    file
                  </option>
                </select>
              </div>
            </div>
          </div>


          <div id="input-video" class="form-group row">
            <div class="col-lg-3">
              <label class="col-form-label">Link Url</label>
            </div>
            <div class="col-lg-8">
              <div class="form-group" id="">
                <input type="text" class="form-control transition-all duration-500" name="link">
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

<script>
  function showVideo(url) {
    const frameVideo = document.getElementById('frame-video');
    frameVideo.src="https://www.youtube.com/embed/"+url;
  } 

  function typeMateri(obj) {
    const selectedValue = obj.options[obj.selectedIndex].value;
    console.log(selectedValue);
    const link = document.getElementsByName('link')[0];
    const form = document.getElementById('create');
    if(selectedValue == 'file' ){
      link.type="file"
      form.enctype="multipart/form-data"
      
    }
    else {
      link.type="text"
      form.enctype=""
  
    }
  }

  function deleteMateri(id, event) {
    console.log(event);
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

  function closeModal() {
    const frameVideo = document.getElementById('frame-video');
    frameVideo.src = "";
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