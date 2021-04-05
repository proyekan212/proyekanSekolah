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
                <div class="card-header flex justify-between items-center" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn capitalize btn-link" data-toggle="collapse" data-target="#collapse{{$row->id}}" aria-expanded="true" aria-controls="collapse{{$row->id}}">
                        {{$row->pertemuan}}
                       
                    </button>
                </h5>
                @if($row->tugas_pengetahuan->count() > 0) 
                    <span class="text-green-400">
                      sudah mengumpulkan
                      <i  class="pl-2 fas fa-check">
                        
                      </i>
                    </span>
                  @else
                     <span class="text-red-400">
                      belum mengumpulkan
                      <i class="pl-2 fas fa-times">
                        
                      </i>
                    </span>
                  @endif
                </div>

                <div id="collapse{{$row->id}}" class="collapse show" aria-labelledby="heading{{$row->id}}" data-parent="#accordion">
                <div class="card-body">
                    <div>
                        <p>Tugas:</p> {{$row->instruksi}}
                    </div>

                    <div class="mt-4">
                         @if($row->tugas_pengetahuan->count() > 0) 
                         <a href="">

                            {{$row->tugas_pengetahuan[0]->filename_path}}
                           <i class="fas fa-download"></i>
                         </a>
                         @else
                          <div class="flex flex-col"> 
                            belum mengumpulkan tugas
                            <input type="file">
                          </div>
                      @endif
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

          <div class="card ">
                <div class="card-header flex justify-between items-center" id="headingOne">
                  <h5 class="mb-0">
                      <button class="btn capitalize btn-link" data-toggle="collapse" data-target="#collapse{{$row->id}}" aria-expanded="true" aria-controls="collapse{{$row->id}}">
                         Pertemuan {{$index + 1}}
                      </button>
                  </h5>

                  @if($row->tugas_keterampilan->count() > 0) 
                    <span class="text-green-400">
                      sudah mengumpulkan
                      <i  class="pl-2 fas fa-check">
                        
                      </i>
                    </span>
                  @else
                     <span class="text-red-400">
                      belum mengumpulkan
                      <i class="pl-2 fas fa-times">
                        
                      </i>
                    </span>
                  @endif
                </div>

                <div id="collapse{{$row->id}}" class="collapse show" aria-labelledby="heading{{$row->id}}" data-parent="#accordion">
                <div class="card-body">
                    <div>
                        <p>Tugas:</p> {{$row->keterangan}}


                    </div>  
                    <div class="mt-4">
                       @if($row->tugas_keterampilan->count() > 0) 
                        <div class="flex ">
                           <a href="{{url('/tugas/keterampilan/', $row->tugas_keterampilan[0]->filename_path)}}">
                            check
                           <i class="fas fa-eye"></i>
                         </a>
  


                          <form method="post" onclick="deleteData('{{$row->id}}', this)" class="pl-16" action="{{url('tugas_siswa_keterampilan', $row->tugas_keterampilan[0]->id)}}" >
                            @csrf
                        {{ method_field('DELETE') }}

                            <button type="button" style="font-size: 20px;" class="text-red-400" >
                              <i class="fas fa-trash ">
                                
                              </i>
                            </button>
                            
                          </form>
                        </div>
                         @else

                         <form enctype="multipart/form-data" action="{{ URL ('tugas_siswa_keterampilan')}}" method="post" >
                          @csrf
                          <input type="hidden" name=" penilaian_keterampilan" value="{{$row->id}}">
                            <div class="flex flex-col"> 
                              belum mengumpulkan tugas
                              <input type="file" name="file">
                           </div>

                           <button type="submit" class="px-4 py-2 rounded-lg bg-blue-400 text-white ">
                             Kirim
                           </button>
                         </form>
                        
                      @endif
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

<script type="text/javascript">
function deleteData(id, event) {

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

</script>

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