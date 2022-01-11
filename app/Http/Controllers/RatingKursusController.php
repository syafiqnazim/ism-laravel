<?php

namespace App\Http\Controllers;

use App\Models\Kluster;
use App\Models\Kursus;
use App\Models\RatingKursus;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RatingKursusController extends Controller
{
    public function index(Request $request)
    {
        $compactValues = [];
        $ratings = RatingKursus::all(); 
        $search = '';
        if (isset($request->query()['nama_kursus'])) {
            $search = $request->query()['nama_kursus'];
            $ratings = RatingKursus::whereHas('kursus', function (Builder $query) use($search) {
                $query->where('nama_kursus', 'like', '%' . $search . '%');
            })->get();
        }
        $query = $search;
        $compactValues[] = 'ratings';
        $compactValues[] = 'query';
        $klusters = Kluster::all();
        $compactValues[] = 'klusters';
        return view('pages.Kursus.Rating.rating-kursus', compact($compactValues));
    }

    public function create()  
    {  
        //  
    }     
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */  
    public function store(Request $request)  
    {  
        try{
            $rating = RatingKursus::create([
                'kursus_id' =>  $request->program,
                'rate_1'    =>  $request->rate_1,
                'rate_2'    =>  $request->rate_2,
                'rate_3'    =>  $request->rate_3,
                'suggestion'    =>  $request->suggestion,
                'rate_food_1'   =>  $request->rate_food_1,
                'rate_food_2'   =>  $request->rate_food_2,
                'rate_food_3'   =>  $request->rate_food_3,
                'rate_food_4'   =>  $request->rate_food_4,
                'rate_food_5'   =>  $request->rate_food_5,
                'rate_food_6'   =>  $request->rate_food_6,
                'rate_food_7'   =>  $request->rate_food_7,
                'food_suggestion'   =>  $request->food_suggestion,
            ]);
    
            $count = 1;
            while($request->input('rate_objektif_' . $count)) {
                $rating->ratingObjektif()->create([
                    'objektif_kursus_id'    =>  $request->input('objektif_' . $count . '_id'),
                    'rate'                  =>  $request->input('rate_objektif_' . $count)
                ]);
                $count++;
            }
    
            $count = 1;
            while($request->input('rate_modul_' . $count)) {
                $rating->ratingSubmodul()->create([
                    'submodul_kursus_id'    =>  $request->input('modul_' . $count . '_id'),
                    'rate'                  =>  $request->input('rate_modul_' . $count)
                ]);
                $count++;
            }
    
            $rating->save();

            return response('OK', 201);
        } catch (Exception $e) {
            report($e);
            return response($e->getMessage(), 202);
        }
    }  
    /** 
     * Display the specified resource. 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function show($id)  
    {  
    
    //  
    }  
    /** 
     * Show the form for editing the specified resource. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */  
    public function edit($id)  
        
    {  
            
    //  
        
    }  
    
    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function update(Request $request, $id)  
    {  
        try{
            $rating = RatingKursus::find($id);
            $rating->update([
                'rate_1'    =>  $request->rate_1,
                'rate_2'    =>  $request->rate_2,
                'rate_3'    =>  $request->rate_3,
                'suggestion'    =>  $request->suggestion,
                'rate_food_1'   =>  $request->rate_food_1,
                'rate_food_2'   =>  $request->rate_food_2,
                'rate_food_3'   =>  $request->rate_food_3,
                'rate_food_4'   =>  $request->rate_food_4,
                'rate_food_5'   =>  $request->rate_food_5,
                'rate_food_6'   =>  $request->rate_food_6,
                'rate_food_7'   =>  $request->rate_food_7,
                'food_suggestion'   =>  $request->food_suggestion,
            ]);

            $objektifRatings = $rating->ratingObjektif;
            $count = 1;
            while($request->input('rate_objektif_' . $count)) {
                $objektifRatings[$count-1]->rate = $request->input('rate_objektif_' . $count);
                $objektifRatings[$count-1]->save();
                $count++;
            }

            $ratingSubmoduls = $rating->ratingSubmodul;
            $count = 1;
            while($request->input('rate_modul_' . $count)) {
                $ratingSubmoduls[$count-1]->rate = $request->input('rate_modul_' . $count);
                $ratingSubmoduls[$count-1]->save();
                $count++;
            }

            return response('OK', 201);
        } catch (Exception $e) {
            report($e);
            return response($e->getMessage(), 202);
        }
    }  

    /** 
     * Remove the specified resource from storage. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */  
    public function destroy($id)  
    {  
        try{
            $rating = RatingKursus::find($id);

            $rating->ratingObjektif()->delete();
            $rating->ratingSubmodul()->delete();
            $rating->delete();

            return response('OK', 201);
        } catch(Exception $e) {
            report($e);
            return response($e->getMessage(), 202);
        }
        
    } 

    public function listKursusSubmodul($id)
    {
        $kursus = Kursus::find($id);
        return $kursus->subModulKursus;
    }

    public function listKursusObjektif($id)
    {
        $kursus = Kursus::find($id);
        return $kursus->objektifs;
    }

}
