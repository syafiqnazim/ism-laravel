<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use App\Models\Penceramah;
use App\Models\RatingPenceramah;
use App\Models\SubmodulKursus;
use Exception;
use Illuminate\Database\Eloquent\Builder;

class PenceramahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Penceramah::all();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profilPenceramah(Request $request)
    {
        $penceramah = Penceramah::all();
        $query = '';
        if (isset($request->query()['name'])) {
            $query = $request->query()['name'];
            $penceramah = Penceramah::where('name', 'like', '%' . $query . '%')->get();
        }

        return view('pages/penceramah/profil-penceramah')->with(['penceramahs' => $penceramah, 'query' => $query]);
    }

    public function kreditPenceramah(Request $request)
    {
        $penceramah = Penceramah::all();
        $query = '';
        if (isset($request->query()['nama_penceramah'])) {
            $query = $request->query()['nama_penceramah'];
            $penceramah = Penceramah::where('name', 'like', '%' . $query . '%')->get();
        }

        return view('pages/penceramah/credit-penceramah')->with(['penceramahs' => $penceramah, 'query' => $query]);
    }

    public function ratingPenceramah(Request $request)
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
        return view('pages.penceramah.rating-penceramah', compact($compactValues));
    }

    public function storeRating(Request $request)
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Penceramah::create([
                "name" => $request->name,
                "ic_number" => $request->ic_number,
                "phone_number" => $request->phone_number,
                "email" => $request->email,
                "sector" => $request->sector,
                "title" => $request->title,
                "gender" => $request->gender,
                "bank_number" => $request->bank_number,
                "bank_name" => $request->bank_name,
                "bank_address" => $request->bank_address,
                "working_address" => $request->working_address,
                "home_address" => $request->home_address,
                "working_number" => $request->working_number,
                "home_number" => $request->home_number,
                "fax_number" => $request->fax_number,
                "service_classified" => $request->service_classified,
                "position" => $request->position,
                "grade" => $request->grade,
                "highest_academic" => $request->highest_academic,
                "specialisation" => $request->specialisation,
                "experience" => $request->experience,
                "professional_member" => $request->professional_member,
                "distribution" => $request->distribution,
                "academic_qualification" => $request->academic_qualification,
                "business_qualification" => $request->business_qualification,
            ]);

            return back();
        } catch (\Throwable $th) {
            dd($th);
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
        Penceramah::where('id', $id)
            ->update([
                "name" => $request->name,
                "ic_number" => $request->ic_number,
                "phone_number" => $request->phone_number,
                "email" => $request->email,
                "sector" => $request->sector,
                "title" => $request->title,
                "gender" => $request->gender,
                "bank_number" => $request->bank_number,
                "bank_name" => $request->bank_name,
                "bank_address" => $request->bank_address,
                "working_address" => $request->working_address,
                "home_address" => $request->home_address,
                "working_number" => $request->working_number,
                "home_number" => $request->home_number,
                "fax_number" => $request->fax_number,
                "service_classified" => $request->service_classified,
                "position" => $request->position,
                "grade" => $request->grade,
                "highest_academic" => $request->highest_academic,
                "specialisation" => $request->specialisation,
                "experience" => $request->experience,
                "professional_member" => $request->professional_member,
                "distribution" => $request->distribution,
                "academic_qualification" => $request->academic_qualification,
                "business_qualification" => $request->business_qualification,
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Penceramah::find($id)->delete();
    }

    public function creditPenceramahUpdate(Request $request)
    {
        Penceramah::where('id', $request->id)
            ->update([
                "credit" => $request->credit,
            ]);
        return back();
    }


}
