<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index() {
        try{
            $all_series = Serie::all();

            $response = [
                'status' => 'success',
                'data' => $all_series,
            ];
        }catch(\Exception $e){
            $response = [
                'status' => 'error',
                'msg' => 'Error listing series',
                'error' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function store(Request $request) 
    {
        try{
            $serie = Serie::create([
                'name' => $request->name
            ]);

            $response = [
                'status' => 'success',
                'data' => $serie,
            ];
        } catch(\Exception $e){
            $response = [
                'status' => 'error',
                'msg' => 'Error creating a serie',
                'error' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function show($id)
    {
        try{
            $serie = Serie::find($id);

            if(!$serie){
                throw new \Exception("invalid id");
            }

            $response = [
                'status' => 'success',
                'data' => $serie,
            ];
        } catch(\Exception $e){
            $response = [
                'status' => 'error',
                'msg' => 'Error finding a serie',
                'error' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function update($id, Request $request)
    {
        try{
            $serie = Serie::find($id);
            $serie->fill($request->all());
            $serie->save();

            $response = [
                'status' => 'success',
                'data' => $serie,
            ];
        } catch(\Exception $e){
            $response = [
                'status' => 'error',
                'msg' => 'Error finding a serie',
                'error' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function destroy($id)
    {
        try {
            Serie::destroy($id);

            $response = [
                'status' => 'success'
            ];
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'msg' => 'the id that was informed does not exist'
            ];
        }

        return response()->json($response);
    }
}
