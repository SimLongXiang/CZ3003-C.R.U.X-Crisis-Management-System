<?php

namespace CRUX\Http\Controllers;

use Illuminate\Http\Request;

use CRUX\Http\Requests;
use DB;
use View;

class PMOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responsed
     */
	 
	public function pmoView(){
		return View::make('pages.pmoView');
	}
	
	public function pmoCrisis(){
		
		$allCrisis = DB::table('crisis')->get();
		
		return View::make('pages.pmoCrisis')->with(compact('allCrisis'));
	}
	
	public function pmoMap(){
		return View::make('pages.pmoMap');
	}
	
	public function pmoEmail(){
		return View::make('pages.pmoEmail');
	}
	public function pmoChat(){
		return View::make('pages.pmoChat');
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
