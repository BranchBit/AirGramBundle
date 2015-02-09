<?php

namespace BBIT\AirGramBundle\Service;

class AirGramService
{

    private $apis;

    private $usedApi;

    public function __construct($apis){
        $this->apis = $apis;

        $this->usedApi = $this->apis['default'];

    }

    public function subscribe($email)
    {

        $usedApi = $this->usedApi;

        $response = file_get_contents('https://'.$usedApi['key'].':'.$usedApi['secret'].'@api.airgramapp.com/1/subscribe?email='.$email);

        $data = json_decode($response);

        if ($data->status == "ok") {
            return true;
        } else {
            return false;
        }

    }



    public function send($email, $message)
    {

        $usedApi = $this->usedApi;

        $response = file_get_contents('https://'.$usedApi['key'].':'.$usedApi['secret'].'@api.airgramapp.com/1/send?email='.urlencode($email).'&msg='.urlencode($message));

        $data = json_decode($response);



        //if ($data->message == "OK") {
        if (!isset($data) || $data->status != "ok") {
            return false;
        } else {
            return true;
        }

    }


}
