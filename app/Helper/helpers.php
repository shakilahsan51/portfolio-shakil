<?php

use Illuminate\Support\Facades\File;


/** Handle File Upload**/
function handleUpload($inputName, $model=null){
    try {
        // Step 1: Check if file is uploaded
        if(request()->hasFile($inputName)){

            // Step 2: If old file exists, delete it
            if($model && File::exists(public_path($model->{$inputName}))){
                File::delete(public_path($model->{$inputName}));
            }

            // Step 3: Save new file
            $file = request()->file($inputName);
            $fileName = rand().$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            // Step 4: Return file path
            $filePath = "/uploads/".$fileName;
            return $filePath;
        }
    } catch(\Exception $e){
        throw $e;
    }
}



/** Delete File**/
function deleteFileIfExist($filePath){
  try{
    if(File::exists(public_path($filePath))){
            File::delete(public_path($filePath));
        }
  }catch(\Exception $e){
    throw $e;
  }
}

function getColor($index){
    $colors = ['#558bff', '#fecc90', '#ff885e', '#282828', '#190844', '#9dd3ff'];
    return $colors[$index %count($colors)];
}