<?php

namespace App\Http\Controllers;

//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

       // return view('greeting', ['name' => 'James']);

        //return $this->sendResponse(view('receipt', compact('user', 'purchase'))->render(), 'great !');

        return $pdf->download('itsolutionstuff.pdf');
    }
}
