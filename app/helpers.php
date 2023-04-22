<?php


if (!function_exists('api_response')) {
    function api_response($data, $success,  $status )
    {
        try {
            return response()->json([
                'success'=> $success,
                'data'=> $data,
            ],$status);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage()
            ]);
        }
    }
}

if (!function_exists('delete_response')) {
    function delete_response()
    {
        return ['success' => true];
    }
}
