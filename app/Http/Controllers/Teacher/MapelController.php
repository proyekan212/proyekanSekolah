<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Models\MasterKelas;
use App\Models\MasterJurusan;
use App\Models\MasterMapel;
use App\Models\MasterSemester;
use App\Models\MasterJadwalPelajaran;
use App\Models\UserDetail;
use DB;
class MapelController extends BaseController
{
    public function mapelGet(){
        $params = [
            'showKelas'     => MasterKelas::get(),
            'showJurusan'   => MasterJurusan::get(),
            'showMapel'     => MasterMapel::get(),
            'showTahunAjaran'     => MasterSemester::get(),
        ];
        return view('pages.teacher.mapel')->with($params);
    }

    public function getDataMapel(Request $request)
	{
		$draw   = $request->get('draw');
		$start  = $request->get('start');
		$length = $request->get('length');
		$search = $request->input('search.value');

		$count  = MasterJadwalPelajaran::count();
		$data   = MasterJadwalPelajaran::get();

		$data = array(
			'draw'              => $draw,
			'recordsTotal'      => $count,
			'recordsFiltered'   => $count,
			'data'              => $data
		);
        echo json_encode($data);
    }

    public function addEMapel(Request $request)
    {
        $user = $request->user();
        $user_email         = $user->username;
        $detailUser         = UserDetail::where('email', $user_email)->first();

        MasterJadwalPelajaran::create([
            'nama_kelas'        => $request->jurusan.' '.$request->kelas.'-'.$request->jurusan.'_'.$request->mata_pelajaran,
            'guru'              => $detailUser->name,
            'jenjang'           => "Kelas ".$request->kelas,
            'kelas'             => $request->jurusan.' '.$request->kelas.'-'.$request->jurusan,
            'mata_pelajaran'    => $request->mata_pelajaran,
            'kkm'               => '75',
        ]);
        return json_encode([
            'success' => true,
            'message' => 'Created Mata Pelajaran Successfully'
        ]);
    }

    public function deleteMapel(Request $request)
    {
        $user = $request->user();
		foreach ($request->data as $key => $id) {
            $expenses = MasterJadwalPelajaran::where('id', $id)->first();
            if ($expenses != null) {
                $expenses->delete();
            }
        }
        return json_encode([
            'success' => true,
            'message' => 'Deleted success'
        ]);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
