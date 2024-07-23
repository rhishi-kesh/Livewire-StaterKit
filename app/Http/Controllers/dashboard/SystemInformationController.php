<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemInformationController extends Controller
{
    public function systemInformation() {
        return view('backend.pages.system-information.index');
    }
}
