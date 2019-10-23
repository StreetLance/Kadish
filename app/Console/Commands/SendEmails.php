<?php

namespace App\Console\Commands;

use App\Mail\KaddishSendMail14;
use App\Mail\KaddishSendMail1;
use App\Mail\KaddishSendMail7;
use Illuminate\Console\Command;
use App\Kadish;
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
        $Data_J1 = cal_from_jd( unixtojd( time() + 1 ), CAL_JEWISH );
        $Data_J1 = $Data_J1[ 'day' ] . '.' . $Data_J1[ 'month' ].'.'.'%';
        $Data_J7 = cal_from_jd( unixtojd( time() + 7 ), CAL_JEWISH );
        $Data_J7 = $Data_J7[ 'day' ] . '.' . $Data_J7[ 'month' ].'.'.'%';
        $Data_J14 = cal_from_jd( unixtojd( time() + 14 ), CAL_JEWISH );
        $Data_J14 = $Data_J14[ 'day' ] . '.' . $Data_J14[ 'month' ].'.'.'%';

        $kadish[ '1'] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J1 ) {
            $query->where( 'J_Date','like', $Data_J1 );
        } )->get( [ 'Email', 'Name' ] );
        $kadish[ '7' ] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J7 ) {
            $query->where( 'J_Date',  'like', $Data_J7 );
        } )->get( [ 'Email', 'Name' ] );

        $kadish[ '14' ] = Client::whereHas( 'kaddish', function ( Builder $query ) use ( $Data_J14 ) {
            $query->where( 'J_Date', 'like', $Data_J14);
        } )->get( [ 'Email', 'Name' ] );

        foreach ( $kadish[ '1' ] as $getKadish ) {
            $mail = $getKadish->Email;
            $name = $getKadish->Name;
            Mail::to( $mail )->send( new KaddishSendMail1( $name ) );
        }

        foreach ( $kadish[ '7' ] as $getKadish ) {
            $mail = $getKadish->Email;
            $name = $getKadish->Name;
            Mail::to( $mail )->send( new KaddishSendMail7( $name ) );
        }

        foreach ( $kadish[ '14' ] as $getKadish ) {
            $mail = $getKadish->Email;
            $name = $getKadish->Name;
            Mail::to( $mail )->send( new KaddishSendMail14( $name ) );
        }


    }
}