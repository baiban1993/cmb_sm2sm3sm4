<?php

namespace cmb;

class Client
{

    private $core;
    public $accnbr = "1234567890123";
    public $bbknbr = 75;

    public function __construct()
    {
        $this->core = Core::getInstance();
    }


    //账户详细信息查询
    public function ntqacinf()
    {
        $body = [
            "ntqacinfx" => [
                "bbknbr" => $this->bbknbr,
                "accnbr" => $this->accnbr,
            ]
        ];
        $result = $this->core->curlpost('ntqacinf', $body);
        var_dump($result);
    }

}
