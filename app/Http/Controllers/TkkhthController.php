<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use App\Bieutonghop7;
use App\Bieutonghop8;
use App\Bieutonghop9;
use App\Bieutonghop10;
use App\Bieutonghop11;
use Auth;
use DateTime;
use App\User;

class TkkhthController extends Controller
{
    public function index()
    {
        $lists = User::listYear();
        
        return view('admin.tkkhth.list', ['lists' => $lists]);
    }

    public function edit($year, $id)
    {
        $bieu = 0;
        if ($id == 7)
        {
            $bieu = Bieutonghop7::where('year', $year)->first();
            if(!$bieu) $bieu = new Bieutonghop7;
            $bieu->field_5="1=&2=&3=&4=&5=&6=";
            $bieu->field_21="1=&2=";
        }
        elseif ($id == 8)
        {
            $bieu = Bieutonghop8::where('year', $year)->first();
            if(!$bieu) $bieu = new Bieutonghop8;
        }
        elseif ($id == 9)
        {
            $bieu = Bieutonghop9::where('year', $year)->first();
            if(!$bieu) $bieu = new Bieutonghop9;
        }
        elseif ($id == 10)
        {
            $bieu = Bieutonghop10::where('year', $year)->first();
            if(!$bieu) $bieu = new Bieutonghop10;
        }
        elseif ($id == 11)
        {
            $bieu = Bieutonghop11::where('year', $year)->first();
            if(!$bieu) $bieu = new Bieutonghop11;
        }
        $bieu->year = $year;
        $bieu->save();

        return view('admin.tkkhth.edit'.$id, ['bieu' => $bieu]);
    }

    public function update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        if($id == 7){
            $bieu = Bieutonghop7::where('year', $year)->first();
            $bieu->updateBieu($params);
            $bieu->publish_day = $publish_day;
            $bieu->save();
        }
        else if($id == 8){
            $bieu = Bieutonghop8::where('year', $year)->first();
            $bieu->updateBieu($params);
            $bieu->publish_day = $publish_day;
            $bieu->save();
        }
        else if($id == 9){
            $bieu = Bieutonghop9::where('year', $year)->first();
            $bieu->updateBieu($params);
            $bieu->publish_day = $publish_day;
            $bieu->save();
        }
        else if($id == 10){
            $bieu = Bieutonghop10::where('year', $year)->first();
            $bieu->updateBieu($params);
            $bieu->publish_day = $publish_day;
            $bieu->save();
        }
        else if($id == 11){
            $bieu = Bieutonghop11::where('year', $year)->first();
            $bieu->updateBieu($params);
            $bieu->publish_day = $publish_day;
            $bieu->save();
        }
        Session::flash('message', 'Cập nhập thành công !');
        return Redirect::to('admin/tkkhth');
    }
}
