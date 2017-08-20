<?php

namespace App\Http\Controllers;

use App\ExcelFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;

class ExcelFileController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return JSON
  */
  public function index()
  {
    $columns = ExcelFile::where('is_deleted', false)->get();

    /*
    * Will return the query as json to adress /api/excel
    */
    return $columns;
  }


  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    ExcelFile::truncate();


    // TODO: Read file that is uploaded, not local to project!
    // TODO: Logic for duplicate inputs alt. drop table each time new file is uploaded
    Excel::filter('chunk')->load(public_path() . '/file.xlsx')->chunk(250, function($results)
    {

      foreach($results->toArray() as $row)
      {

        //  0 => "Material"
        //  1 => "NOBB nummer"
        //  2 => "Material                          "
        //  3 => "Priser 01.04.2017"
        //  4 => "Enhet"
        //  5 => null

        ExcelFile::create([

          'material'=>$row[0],
          'designation'=>$row[1],
          'gross'=>$row[2],
          // not available in xlsx file, currently hard-coded
          'currency'=>'SEK',
          'price_factor'=>$row[4],
          'unit_price'=>$row[3]
        ]);

      }

    });

    return redirect()->home();

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
