<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyRequest;
use App\Survey;

class SurveyController extends Controller
{
    public function index()
    {
    	return view('pages.survey-form');
    }

    public function postSurvey(SurveyRequest $request)
    {
    	Survey::create($request->all());
    	return redirect('success');
    }

    public function success()
    {
    	return view('pages.success');
    }
}
