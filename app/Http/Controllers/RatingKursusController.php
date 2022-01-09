<?php

namespace App\Http\Controllers;

use App\Models\Kluster;
use App\Models\Kursus;
use App\Models\RatingKursus;
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
            
    //  
        
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
            
    //  
        
    }  

    /** 
     * Remove the specified resource from storage. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */  
    public function destroy($id)  
    {  
            
            
    //  
        
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
