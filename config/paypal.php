<?php
    return [
      'client_id'=>env('PAYPAL_CLIENT',''),
      'seecret'=>env('PAYPAL_SECRET',''),
      'settings'=>[
          'mode'=>env('PAYPAL_MODE',''),
          'http.ConnectTimeOut'=>30,
          'log.LogEnable'=>true,
          'log.FileName'=>storage_path().'/logs/papal.log',
          'log.LogLeaver'=>'ERROR',
      ]
    ];
