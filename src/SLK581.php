<?php

namespace SLK581;

class SLK581
{
    private $errorMessage = '';

    public function __construct()
    {
        $this->errorMessage = '';
    }

    public function generate($firstName, $lastName, $dob, $gender)
    {
        $response = false;

        try {
            $slk581 = Factory\SLK581::create($firstName, $lastName, $dob, $gender);
            $response = $slk581->generate();
        } catch (Exception\SLK581 $e) {
            $this->errorMessage = $e->getMessage();
        }

        return $response;
    }

    public function errorMessage()
    {
        return $this->errorMessage;
    }
}
