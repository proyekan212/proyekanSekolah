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
                {{$row->created_at_FullDate()}}
              </p>
              <p
                class="bg-green-500 py-1 mb-2 md:mb-4 flex justify-center text-white rounded-xl"
              >
                <span class="text-xs capitalize">
                  
                </span>
              </p>
              <div class="flex justify-between">
              
                <a
                  href="#"
                  onclick="showVideo('{{$row->link}}')"
                  data-toggle="modal"
                  data-target="#video"
                  class="px-6 py-2 flex rounded-xl items-center md:px-8 bg-gray-200 "
                >
                  <span
                    class="text-xs md:text-sm  font-semibold text-black capitalize"
                  >
                    open link
                  </span>
                </a>
              
                
                
              </div>
            </div>
        @endforeach

      @endif
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