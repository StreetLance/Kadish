<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    public function getJewishDate($D,$M,$Y){
        $jd = unixtojd(mktime(0, 0, 0, $M, $D, $Y));
        return cal_from_jd($jd,CAL_JEWISH);
    }

    public function getGregorianDate($D,$M,$Y){
        $jd = jewishtojd($M, $D, $Y);
        return cal_from_jd($jd,CAL_GREGORIAN);
    }
}
