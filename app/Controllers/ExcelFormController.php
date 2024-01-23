<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExcelFormController extends BaseController
{
    public function index()
    {
        return view('excel_import');
    }
}
