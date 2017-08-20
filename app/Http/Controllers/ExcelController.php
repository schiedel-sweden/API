<?php

namespace App\Http\Controllers;

use App\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ExcelController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return JSON
    */
    public function index()
    {
        $columns = Excel::where('is_deleted', false)->get();

        /*
        * Will return the query as json to adress /api/excel
        */
        return $columns;
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
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        if (($handle = fopen ( public_path () . '/prislista.csv', 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {

                //saving to db logic goes here

                $csv_data = new Excel ();
                $csv_data->material = $data [0];
                $csv_data->designation = $data [1];
                $csv_data->gross = $data [2];
                $csv_data->currency = $data [3];
                $csv_data->price_factor = $data [4];
                $csv_data->unit_price = $data [5];
                $csv_data->save ();

            }
            fclose ( $handle );
        }
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
