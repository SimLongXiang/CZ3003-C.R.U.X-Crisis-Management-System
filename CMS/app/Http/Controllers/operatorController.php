<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use Illuminate\Http\Request;

use CRUX\Http\Requests;
use DB;
use View;

class operatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	
	public function operatorView(){
		
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.operatorView')->with(compact('incidents'));
		
		
	}
	
	
	public function operatorChat(){
		
			
		
		return View::make('pages.operatorChat');
		
		
	}
	
	public function viewMap(){
		
		
		
		
		return View::make('pages.viewMap');
		
		
	}
		public function logIncident(){

		
		return View::make('pages.logIncident');
		

		
	}
	
	
	
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
