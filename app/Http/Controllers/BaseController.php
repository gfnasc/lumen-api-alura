<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class BaseController extends Controller
{
    protected $class;

    public function index() {
        try{
            $all_data = $this->class::paginate();

            $response = [
                'status' => 'success',
                'data' => $all_data,
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
            $data = $this->class::create($request->all());

            $response = [
                'status' => 'success',
                'data' => $data,
            ];
        } catch(\Exception $e){
            $response = [
                'status' => 'error',
                'msg' => 'Error creating a episode',
                'error' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function show($id)
    {
        try{
            $data = $this->class::find($id);

            if(!$data){
                throw new \Exception("invalid id");
            }

            $response = [
                'status' => 'success',
                'data' => $data,
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
            $data = $this->class::find($id);
            $data->fill($request->all());
            $data->save();

            $response = [
                'status' => 'success',
                'data' => $data,
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
            if(!$this->class::find($id))
                throw new \Exception("id not founded");

            $this->class::destroy($id);

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
