<?php

namespace App\Http\Controllers;

use Auth;
use App\ExcelFile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
     * Will allso return statuscode for the request
    */
    return new JsonResponse($columns);
  }

    /**
     * @param $sum
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     * returns a specific amount of values to the user givin in the URL ex: /api/excel/10 will retunr 10 values
     */
  public function sum($sum)
  {
      $columns = ExcelFile::take($sum)->where('is_deleted', false)->get();

      return new JsonResponse($columns);
  }


  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    // make sure user is authenticated
    if(Auth::guest()){
      return redirect('/login');
    }

    // validate file
    $this->validate(request(), [
      'import_file' => 'required'
    ]);

    // request, name and move imported file
    $file = $request->file('import_file');
    $filename = 'file.xlsx';
    $file->move('../storage/uploads/', $filename);
    // set filepath
    $filepath = '../storage/uploads/' . $filename;

    // empty database file
    ExcelFile::truncate();

    Excel::filter('chunk')->load($filepath)->chunk(250, function($results)
    {

      foreach($results->toArray() as $row)
      {
        //  0 => "Material"
        //  1 => "NOBB nummer"
        //  2 => "Material                          "
        //  3 => "Priser 01.04.2017"
        //  4 => "Enhet"
        //  5 => null
        // populate array to be added to the database, based on $row
        $excelArray = [
          'material'=>$row[0],
          'designation'=>$row[1],
          'gross'=>$row[2],
          // not available in xlsx file, currently hard-coded
          'currency'=>'SEK',
          'price_factor'=>$row[4],
          'unit_price'=>$row[3],
          'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ];
        ExcelFile::create($excelArray);
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
