<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\TestingType;
class PDFtestingcontroller extends Controller
{
    public function PDFtesting($id)
    {
        $TestingTypes = TestingType::find($id);

        $data = [
            'title' => 'Testing Records',
            'date' => date('m/d/Y'),
            'users' => [$TestingTypes]
        ];

        $pdf = PDF::loadView('Admin.testingrecord', $data);

        return $pdf->download('TestingRecords.pdf');
    }
}
