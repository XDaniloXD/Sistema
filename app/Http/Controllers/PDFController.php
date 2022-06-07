<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Exibir uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
    */
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function exportToPDF(Request $request)
    {

        $schedules = Schedule::all();

        if($request->has('download'))
        {
           $pdf = PDF::loadView('exportToPDF',compact('schedules'));
           //->setPaper('A4', 'landscape');
           return $pdf->stream('pdfview.pdf');
        }

        return view('schedule',compact('schedules'));
    }

    public function exportOnePDF($id) {


        $doctors= Doctor::all();
        $patients= Patient::all();
        $schedules = Schedule::where('id', $id)->first();


        $pdf = PDF::loadView('exportOnePDF',[
            'schedules'=>$schedules,
            'doctors'=>$doctors,
            'patients'=>$patients]);
        return $pdf->stream('pdf');
    }
}
