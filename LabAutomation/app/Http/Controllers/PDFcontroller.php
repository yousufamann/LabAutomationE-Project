<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Product;
class PDFcontroller extends Controller
{
    public function generatePDF($id)
    {
        $Product = Product::find($id);

        $data = [
            'title' => 'ProductRecords',
            'date' => date('m/d/Y'),
            'users' => [$Product]
        ];

        $pdf = PDF::loadView('Admin.productrecord', $data);

        return $pdf->download('productRecords.pdf');
    }
}

