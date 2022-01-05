<?php

namespace App\Http\Controllers;

use App\Models\Kluster;
use App\Models\Kursus;
use Illuminate\Http\Request;
use App\Models\Penceramah;
use App\Models\RatingPenceramah;
use Exception;
use Illuminate\Database\Eloquent\Builder;

class RatingPenceramahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compactValues = [];
        $ratings = RatingPenceramah::all();
        $compactValues[] = 'ratings';
        $query = '';
        if (isset($request->query()['name'])) {
            $query = $request->query()['name'];
            $penceramah = RatingPenceramah::has('penceramah', function (Builder $query) {
                $query->where('name', 'like', '%' . $query . '%');
            })->get();
        }
        $compactValues[] = 'query';
        $programs = Kursus::all();
        $compactValues[] = 'programs';
        $klusters = Kluster::all();
        $compactValues[] = 'klusters';
        return view('pages.penceramah.rating-penceramah', compact($compactValues));
    }

    public function listProgramByKluster($kluster) {
        $programs = Kursus::where('kluster_id', $kluster)->get();
        return response()->json($programs);
    }

    public function listPenceramahByProgram(Kursus $program)
    {
        $penceramahs = $program->penceramahs();
        return response()->json($penceramahs);
    }

    public function listPenceramahSubModulsByKursus(Penceramah $penceramah, $kursusId)
    {
        return $penceramah->subModulKursus()->where('kursus_id', $kursusId)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $kursus = Kursus::find($request->program);
            $penceramah = Penceramah::find($request->penceramah);
            $rate_1 = $request->rate_teknik_1;
            $rate_2 = $request->rate_teknik_2;
            $rate_3 = $request->rate_teknik_3;

            $rating = RatingPenceramah::create([
                'kursus_id'     =>  $kursus->id,
                'penceramah_id' =>  $penceramah->id,
                'rate_1'        =>  $rate_1,
                'rate_2'        =>  $rate_2,
                'rate_3'        =>  $rate_3
            ]);

            $count = 1;
            while($request->input('rate_modul_' . $count)) {
                $rating->modulRatings()->create([
                    'rating_penceramah_id'  =>  $rating->id,
                    'submodul_kursus_id'    =>  $request->input('modul_' . $count . '_id'),
                    'rate'                  =>  $request->input('rate_modul_' . $count)
                ]);
                $count++;
            }
            

            return response('OK', 201); 
        } catch(Exception $e) {
            report($e);
            return response('error ' . $e->getMessage(), 202);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $rating = RatingPenceramah::find($id);

            $rating->rate_1 = $request->rate_teknik_1;
            $rating->rate_2 = $request->rate_teknik_2;
            $rating->rate_3 = $request->rate_teknik_3;
            $rating->save();

            $count = 1;
            $submodulRatings = $rating->modulRatings;
            while($request->input('rate_modul_' . $count)) {
                $submodulRatings[$count-1]->rate = $request->input('rate_modul_' . $count);
                $submodulRatings[$count-1]->save();
                $count++;
            }

            return response('OK', 201);
        } catch(Exception $e) {
            report($e);
            return response('Error', 202);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rating = RatingPenceramah::find($id);
        $rating->modulRatings()->delete();
        return $rating->delete();
    }
}
