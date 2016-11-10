<?php

namespace CRUX\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class AssetsManager extends Model
{
    //
	public static function addAssets($newAssetID,$newAssetName,$newAssetType,$newAssetDescription,$newAssetLocation,$newAssetDepartment,$newAssetRemarks,$newAssetStatus){
		
		
		
		DB::table('assets')->insert([
			'assetID' => $newAssetID, 
			'assetName' => $newAssetName,
			'assetType' => $newAssetType,
			'assetDescription'=> $newAssetDescription,
			'assetLocation' => $newAssetLocation,
			'assetDepartment' => $newAssetDepartment,
			'assetRemarks' => $newAssetRemarks,
			'assetStatus' => $newAssetStatus
			]);
			
			return;
	}
	
	public static function deleteAssets(String $assetID){
		
		
		DB::table('assets')->where('assetID',$assetID)->delete();
			
		return;
		
	
	}
	
	public static function deleteAssetsMarker(String $assetID){
		
		
		DB::table('markers')->where('id',$assetID)->delete();
			
		return;
		
	
	}
}
