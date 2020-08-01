<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class companies extends Controller
{
    //
    function list()
    {
      $data=DB::table('company')->paginate(10);
      returnview('companies',['data'=>$data]);
        }
}
