@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Teacher</a></li>
    <li class="breadcrumb-item active" aria-current="page">Mata Pelajarn</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Mata Pelajaran</h6>
          <div class="dropdown mb-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#TambahData">Tambah Data</button>
            <button type="button" class="btn btn-outline-danger" onclick="deleteMapel()">Hapus</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="dataMapel" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Kelas</th>
                <th>Guru</th>
                <th>Jenjang</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>KKM</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Belajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="inser_data" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name">Pilih Kelas:</label>
            <select name="kelas" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showKelas as $value)
              <option value="{{ $value->kode }}">{{ $value->kelas }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Jurusan:</label>
            <select name="jurusan" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showJurusan as $value)
              <option value="{{ $value->jurusan }}">{{ $value->jurusan }}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="message-text">Pilih Tahun Ajaran:</label>
            <select name="jurusan" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showTahunAjaran as $value)
              <option value="{{ $value->jurusan }}">{{ $value->tahun_ajaran }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text">Pilih Mata Pelajaran:</label>
            <select name="mata_pelajaran" class="form-control form-control-sm mb-3">
              <option selected>Open this select menu</option>
              @foreach($showMapel as $value)
              <option value="{{ $value->nama_mapel }}">{{ $value->nama_mapel }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>

  <script>
    $(function() {
    var table = $('#dataMapel').DataTable({
        paging: true,
        processing: false,
        serverSide: false,
        select: true,
        ajax: function(data, callback){
            $.ajax({
                url: '{{ url('/')}}/matapelajaran/ajax',
                'data': {
                    ...data,
                },
                dataType: 'json',
                beforeSend: function(){
                // Here, manually add the loading message.
                $('#ContactList > tbody').html(
                    '<tr class="odd">' +
                    '<td valign="top" colspan="7" class="dataTables_empty"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i></td>' +
                    '</tr>'
                );
                },
                success: function(res){
                callback(res);
                }
            })
        },
        columns: [
            { data: null, mRender: function(data, type, full) {
                return `<input type="checkbox" class="checkbox" id="" value="${data.id}">`
            }},
            { data: 'nama_kelas', name: 'Nama Kelas' },
            { data: 'guru', name: 'Guru' },
            { data: 'jenjang', name: 'Jenjang'},
            { data: 'kelas', name: 'Kelas'},
            { data: 'mata_pelajaran', name: 'Mata Pelajaran'},
            { data: 'kkm', name: 'KKM'},               
        ],
        language: {
                loadingRecords: "&nbsp;",
                processing: 'Loading...'},
        })        
    });

    function deleteMapel(id) {
        var data_id = []
        if (id != null) {
            data_id.push(id)
        } else {
          $("input:checkbox[class=checkbox]:checked").each(function () {
            data_id.push($(this).val());
          });
        }
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.dismiss == "cancel") {
                return false 
            }
            if (result) {
              $.ajax({
                url: '{{ url('') }}/matapelajaran/delete',
                  type: "post",
                  data: {
                    "_token": "{{ csrf_token() }}",
                    data: data_id
                  },
                  dataType: 'json',
                  success: function(res){
                    if (res.success) {
                      swal.fire('Deleted!', '', 'success');
                      $('#dataMapel').DataTable().ajax.reload();
                    }
                  }
              })
            }
        })
    }

    $('#inser_data').on('submit',function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{url('')}}/matapelajaran/add',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            enctype: 'multipart/form-data',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.success){
                    $('#kelas').val('');
                    $('#jurusan').val('');
                    $('#mata_pelajaran').val('');
                    swal.fire(response.message, '', 'success');
                }else{
                    $('#kelas').val('');
                    $('#jurusan').val('');
                    $('#mata_pelajaran').val('');
                    swal.fire(response.message, '', 'error');
                }
                $('#TambahData').modal('hide');
                $('#dataMapel').DataTable().ajax.reload();
            },
            error: function (response) {
                swal.fire(response.message, '', 'error');
                $('#kelas').val('');
                $('#jurusan').val('');
                $('#mata_pelajaran').val('');
            }
        });
    })
</script>
@endpush