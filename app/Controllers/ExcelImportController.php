<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelImportController extends Controller
{
    public function import()
    {
        // Lokasi file Excel yang diunggah
        $excelFile = $this->request->getFile('excel_file');

        // Load Excel file
        $spreadsheet = IOFactory::load($excelFile->getTempName());

        // Mendapatkan data dari sheet pertama (indeks 0)
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        // Proses data (contoh: menampilkan data)
        foreach ($sheetData as $row) {
            print_r($row);
        }

        // Lakukan operasi lain sesuai kebutuhan, seperti menyimpan data ke database
    }
}
