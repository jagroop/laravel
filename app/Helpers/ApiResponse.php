<?php
namespace App\Helpers;

class ApiResponse
{
  public static function success($message, $data) {
  	return response()->json([
		'status' => true,
		'message' => $message,
		'data' => $data,
  	]);
  }

  public static function error($message, $data, $code = 400) {
  	return response()->json([
		'status' => false,
		'message' => $message,
		'data' => $data,
  	]);
  }
}