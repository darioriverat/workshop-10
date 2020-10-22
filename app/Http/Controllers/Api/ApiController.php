<?php

namespace App\Http\Controllers\Api;

class ApiController
{
    public function session()
    {
        $session = [
            'status' => [
                'status' => 'OK',
                'reason' => 'PC',
                'message' => 'La petición se ha procesado correctamente',
                'date' => '2020-10-21T23:02:28-05:00'
            ],
            'requestId' => 419245,
            'processUrl' => 'https://test.placetopay.com/redirection/session/419245/503c2eb98c69c0b58109b687bb2167ac',
	];

        return response()->json($session);
    }

    public function info()
    {
      $info = [
        "requestId" => 419245,
        "status" => [
          "status" => "PENDING",
          "reason" => "PC",
          "message" => "La petición se encuentra activa",
          "date" => "2020-10-21T23 =>15 =>54-05 =>00"
        ],
        "request" => [
          "locale" => "es_CO",
          "buyer" => [
            "document" => "1040035000",
            "documentType" => "CC",
            "name" => "Abbigail",
            "surname" => "Davis",
            "email" => "dnetix@yopmail.com",
            "mobile" => "3006108300"
          ],
          "payment" => [
            "reference" => "TEST_20201021_225152",
            "description" => "Quia autem amet voluptas quas id.",
            "amount" => [
              "currency" => "COP",
              "total" => 128000
            ],
            "allowPartial" => false,
            "subscribe" => false
          ],
          "returnUrl" => "https =>//dnetix.co/p2p/client",
          "ipAddress" => "201.233.38.133",
          "userAgent" => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36",
          "expiration" => "2020-10-22T22 =>51 =>52-05 =>00",
          "captureAddress" => false,
          "skipResult" => false,
          "noBuyerFill" => false
        ]
       ];
    
      return response()->json($info);
    }
}
