<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 27/08/15
 * Time: 09:59
 */
use Desenvolvimento\Cliente\Pessoa;

class Pessoas extends PHPUnit_Framework_TestCase
{
    protected $cliente;
    private $id = 3;

    public function setUp(){
        $this->cliente = new Pessoa($this->id);
    }

    /**
     *
     */
    public function testeConstrutor(){

        $pessoa = new Pessoa($this->id);

        $this->assertAttributeEquals($this->id, 'id', $pessoa);
    }
}
