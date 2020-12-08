<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JenisSurat;
use App\Surat;
use Illuminate\Http\Request;
class SearchController extends \BaseController {


    public function getSearch()
    {
        //get keywords input for search
        $keyword=  Input::get('search');

        //search that student in Database
         $surat= Surat::find($keyword);

        //return display search result to user by using a view
        return View::make('surat.index')->with('Surat', $surat);
    }

}