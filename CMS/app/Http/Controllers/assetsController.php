<?php

namespace CRUX\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use CRUX\Http\Requests;
use View;
use DB;

class assetsController extends Controller
{
    //
		public function addAssets(){
		
		$newAssetID = Input::get('assetID');
		$newAssetName = Input::get('assetName');
		$newAssetType = Input::get('assetType');
		$newAssetDescription = Input::get('assetDescription');
		$newAssetLocation = Input::get('assetLocation');
		$newAssetDepartment = Input::get('assetDepartment');
		$newAssetRemarks = Input::get('assetRemarks');
		$newAssetStatus = Input::get('assetStatus');
	
		$newAssetLat = Input::get('lat');
		$newAssetLong = Input::get('lng');
		
		\CRUX\Models\IncidentManager::createMarker($newAssetID,$newAssetName,$newAssetLocation,'Asset',$newAssetLat,$newAssetLong);
		
		
		\CRUX\Models\AssetsManager::addAssets($newAssetID,$newAssetName,$newAssetType,$newAssetDescription,$newAssetLocation,$newAssetDepartment,$newAssetRemarks,$newAssetStatus);//pass to MODEL for DB operations	
			
		
		if($newAssetDepartment =='NEA'){
			
		return Redirect::to('neaViewAssets');
		}
		if($newAssetDepartment =='SCDF'){
			return Redirect::to('scdfViewAssets');
		}
		if($newAssetDepartment =='SAF'){
			return Redirect::to('safViewAssets');
		}
		if($newAssetDepartment =='SPF'){
			return Redirect::to('spfViewAssets');
		}
		
	}
	
	public function deleteAssets(){
		
		$assetID = Input::get('assetID');
		
		\CRUX\Models\AssetsManager::deleteAssets($assetID);
		
		\CRUX\Models\AssetsManager::deleteAssetsMarker($assetID);
			
		return Redirect::to('neaViewAssets');
		
	
	}
}
