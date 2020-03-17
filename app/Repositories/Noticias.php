<?php

namespace App\Repositories;


class Noticas extends GuzzleHttpRequest
{
   
    public function all()
    {
        return $this->get('noticias');
    }

    public function find($idNoticia)
    {
        return $this->get('noticias/{idNoticia}');
    }
}