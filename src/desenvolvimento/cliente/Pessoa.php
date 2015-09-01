<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 27/08/15
 * Time: 09:54
 */

namespace Desenvolvimento\Cliente;


class Pessoa
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    function __construct($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
}