<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Line;
use App\Company;
use Auth;
use Response;
class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = line::latest()
                ->leftjoin('companies', 'lines.company_id','companies.id')
                ->get(array('lines.*', 'companies.name as companieName'));
        return view('line.index', compact('lines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $companies = Company::latest()->get();
       return view('line.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numline = $request['numline'];
        $details = $request['details'];
        $companyID = $request['companyID'];
        $nbarret = $request['nbarret'];
        $createby = Auth::user()->id;
        $line = new Line();
        $line->numero_line = $numline;
        $line->details = $details;
        $line->nombre_arret = $nbarret;
        $line->create_by = $createby;
        $line->company_id = $companyID; 
        if ($line->save()) {
            return Response::json(array('status'=>true,'data'=>$line));
       
        }else{
   return Response::json(array('status'=>false));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
