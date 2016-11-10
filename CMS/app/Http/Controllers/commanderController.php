<?php

namespace CRUX\Http\Controllers;

use CRUX\incidentCases;//use incidentCases model
use CRUX\crisisCases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use CRUX\Http\Requests;
use CRUX\Models\UserAccountManager;
use View;
use DB;

class commanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	public function viewIncident(){
		
		$incidents = DB::table('incidentReports')->get();	
		
		return View::make('pages.viewIncident')->with(compact('incidents'));
		
	}
		public function display(){
		
			$noOfIncident = DB::table('incidentReports')->count();
			$noOfFlood = DB::table('incidentReports')->where('incidentCategory','Flood')->count();
			$noOfFire =  DB::table('incidentReports')->where('incidentCategory','Fire')->count();
			$noOfCrisis =  DB::table('crisis')->count();
		
			
			return View::make('pages.commanderReport')->with(['incident' => $noOfIncident, 'noOfFlood' => $noOfFlood,'noOfFire'=>$noOfFire,'noOfCrisis'=>$noOfCrisis]);
	
	}
	public function viewCrisis(){
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.viewCrisis')->with(compact('allCrisis'));
	}
	public function viewMap(){
		
	
		
		return View::make('pages.commanderMap');
	}
	
	
	public function viewChat(){
		
		return View::make('pages.viewChat');
	}
	
	public function home(){
		
		
		return View::make('pages.home');
	}
	public function viewAssets(){

		$assets = DB::table('assets')->get();
		
	 return View::make('pages.viewAssets')->with(compact('assets'));
}


	public function viewDeleteAccount(){
		
		return View::make('pages.deleteAccount');
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
		public function deleteUsers(){
		
	
		
		$id = Input::get('id');
		
		$true = \CRUX\Models\UserAccountManager::deleteUsers($id);//pass to MODEL for DB operations
		if($true)
		return Redirect::back()->withInput()->withErrors(array('message'=>'User deleted from system!'));
		else
		return Redirect::back()->withInput()->withErrors(array('message'=>'User not found!'));
	
		
	}
	
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
