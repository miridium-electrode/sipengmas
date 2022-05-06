<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Periode;
use App\Models\Prodi;
use App\Models\Pengmas;
use App\Models\Jenjang;
use App\Models\Skema;
use Illuminate\Http\Request;
use \Illuminate\Support\Collection;

class TampilkanPengmasController extends Controller
{
    public function index(Request $request) {
        $prodi = Prodi::all();
        $periode = Periode::all();
        $jenjang = Jenjang::all();
        $dep = Departemen::all();
        $skema = Skema::all();
        $pengmas = empty(session()->get('pengmas')) ?
        Pengmas::with(['jenjang', 'periode', 
        'prodi', 'ketua', 'anggota', 'departemen', 'skema'])
        ->get() : session()->get('pengmas');

        $prodi = $this->checkboxHelper($prodi, $request->old("prodi"), "nama_prodi");
        $periode = $this->checkboxHelper($periode, $request->old("periode"), "tahun");
        $jenjang = $this->checkboxHelper($jenjang, $request->old("jenjang"), "nama_jenjang");
        $dep = $this->checkboxHelper($dep, $request->old("departemen"), "nama_departemen");
        $skema = $this->checkboxHelper($skema, $request->old("skema"), "nama_skema");

        return view('data', [
            'prodi' => $prodi,
            'periode' => $periode,
            'jenjang' => $jenjang,
            'departemen' => $dep,
            'skema' => $skema,
            'pengmas' => $pengmas,
        ]);
    }

    public function filter(Request $r) {
        $search = $r->input('search');
        $periode = $r->input('periode');
        $prodi = $r->input('prodi');
        $jenjang = $r->input('jenjang');
        $skema = $r->input('skema');
        $departemen = $r->input('departemen');

        if(!empty($search)) {
            $searhedPengmas = Pengmas::with(['periode', 
            'ketua', 'anggota'])->whereFullText('judul', $search)
            ->get();
    
            return redirect("/data")->with('pengmas', $searhedPengmas);
        } else {
            $filteredPengmas = Pengmas::with(['periode', 
            'ketua', 'anggota']);

            if (!empty($periode)) {
                $filteredPengmas->where('periode_id', $periode);
            }

            if(!empty($prodi)) {
                $filteredPengmas->where('prodi_id', $prodi);
            }

            if(!empty($jenjang)) {
                $filteredPengmas->where('jenjang_id', $jenjang);
            }

            if(!empty($skema)) {
                $filteredPengmas->where('skema_id', $skema);
            }

            if(!empty($departemen)) {
                $filteredPengmas->where('departemen_id', $departemen);
            }

            return redirect("/data")
            ->withInput()
            ->with("pengmas", $filteredPengmas->get());
        }

        return redirect("/data");
    }

    /**
     * dataname itu nama kolom yang mengandung deskripsi checkbox
     * @param Collection $collection
     * @param array|null $sessionData
     * @param string $dataname
     * @return Collection
     */
    private function checkboxHelper($collection, $sessionData, $dataname) {
        $c = $collection;
        if($sessionData) {
            $c = $c->map(function($item, $key) use ($sessionData, $dataname) {
                for ($i=0; $i < count($sessionData); $i++) { 
                    if($item->id == $sessionData[$i]) {
                        return [
                            'id' => $item->id,
                            $dataname => $item[$dataname],
                            'checked' => true
                        ];
                    }
                }

                return [
                    'id' => $item->id,
                    $dataname => $item[$dataname],
                    'checked' => false
                ];
            });
        }

        return $c;
    }
}
