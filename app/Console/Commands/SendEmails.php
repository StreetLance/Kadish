<?php

namespace App\Console\Commands;

use App\Mail\KaddishSendMail14;
use App\Mail\KaddishSendMail1;
use App\Mail\KaddishSendMail7;
use Illuminate\Console\Command;
use App\Kadish;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder e-mails to a users ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $Data_J1 = cal_from_jd( unixtojd( time() )+1, CAL_JEWISH );
        if (date('L') == 1)
            $Data_J1 = $Data_J1['day'] . '.' . $Data_J1['month'] . '.' . '%';
        else {
            if ($Data_J1['month'] === '7')
                $Data_J1 = '0';
            else
                $Data_J1 = $Data_J1['day'] . '.' . $Data_J1['month'] . '.' . '%';
        }
        $Data_J7 = cal_from_jd( unixtojd( time() )+7, CAL_JEWISH );
         if (date('L') == 1)
             $Data_J7 = $Data_J7[ 'day' ] . '.' . $Data_J7[ 'month' ].'.'.'%';
         else {
            if ($Data_J7['month'] === '7')
                $Data_J7 = '0';
            else
                $Data_J7 = $Data_J7[ 'day' ] . '.' . $Data_J7[ 'month' ].'.'.'%';
        }
        $Data_J14 = cal_from_jd( unixtojd( time() )+14, CAL_JEWISH );
        if (date('L') == 1)
            $Data_J14 = $Data_J14[ 'day' ] . '.' . $Data_J14[ 'month' ].'.'.'%';
        else {
            if ($Data_J14['month'] === '7')
                $Data_J14 = '0';
            else
                $Data_J14 = $Data_J14[ 'day' ] . '.' . $Data_J14[ 'month' ].'.'.'%';
        }

        $kadish['1'] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J1 ) {
            $query->where( 'J_Date','like', $Data_J1 );
        } )->get();
        $kadish['1']= collect($kadish['1']);

        $kadish[ '7' ] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J7 ) {
            $query->where( 'J_Date',  'like', $Data_J7 );
        } )->get();
        $kadish['7']= collect($kadish['7']);

        $kadish[ '14' ] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J14 ) {
            $query->where( 'J_Date', 'like', $Data_J14);
        } )->get();
        $kadish['14']= collect($kadish['14']);

//        info($kadish['14']);
        foreach ( $kadish['1'] as $getKadish ) {
            $when = now()->addSecond(1);
            $mail = $getKadish->Email;
            $name = $getKadish->kaddish->Name_of_Deceased;
            $Fname = $getKadish->kaddish->Fathers_Name;
            $Data = cal_from_jd( unixtojd( time() ), CAL_GREGORIAN );
            $data =  $Data['day'] . ' ' . $Data['monthname'] . ' ' . $Data['year'];
            $lang = $getKadish->Lang;
            Mail::to( $mail )->locale($lang)->later($when, new KaddishSendMail1( $name,$Fname,$data ) );
        }

        foreach ( $kadish['7'] as $getKadish ) {
            $when = now()->addSecond(11);
            $mail = $getKadish->Email;
            $name = $getKadish->kaddish->Name_of_Deceased;
            $Fname = $getKadish->kaddish->Fathers_Name;
            $Data = cal_from_jd( unixtojd( time()+6 ), CAL_GREGORIAN );
            $data =  $Data['day'] . ' ' . $Data['monthname'] . ' ' . $Data['year'];
            $lang = $getKadish->Lang;
            Mail::to( $mail )->locale($lang)->later($when, new KaddishSendMail1( $name,$Fname,$data ) );
        }

        foreach ( $kadish['14'] as $getKadish ) {
            $when = now()->addSecond(20);
            $mail = $getKadish->Email;
            $name = $getKadish->kaddish->Name_of_Deceased;
            $Fname = $getKadish->kaddish->Fathers_Name;
            $Data = cal_from_jd( unixtojd( time()+13 ), CAL_GREGORIAN );
            $data =  $Data['day'] . ' ' . $Data['monthname'] . ' ' . $Data['year'];
            $lang = $getKadish->Lang;
            Mail::to( $mail )->locale($lang)->later($when, new KaddishSendMail1( $name,$Fname,$data ) );
        }


    }
}
