<?php

namespace Dogs;

$loader = require '../../vendor/autoload.php';
$loader->add('Dogs\\', __DIR__ . '/../../src/');

class IndexTest extends \PHPUnit\Framework\TestCase
{
    public function testMopsSound()
    {
        $result = Index::go("mops sound");
        $this->assertEquals("woof from Mops\n", $result);

    }
     public function testTaksaSound()
    {
        $result = Index::go("taksa sound");
        $this->assertEquals("woof woof from alive Taksa\n", $result);

    }
     public function testTaksaHunt()
    {
        $result = Index::go("taksa hunt");
        $this->assertEquals("taksa hunts!\n", $result);

    }
     public function testSibaInuSound()
    {
        $result = Index::go("sibaInu sound");
        $this->assertEquals("woof from Siba-Inu\n", $result);

    }
     public function testSibaInuHunt()
    {
        $result = Index::go("sibaInu hunt");
        $this->assertEquals("Siba Hunts\n", $result);

    }
     public function testRubberTaksaSound()
    {
        $result = Index::go("rubberTaksa sound");
        $this->assertEquals("pi pi from rubber Taksa\n", $result);

    }
     public function testExit()
    {
        $result = Index::go("exit");
        $this->assertEquals("exited\n", $result);

    }
 public function testTooManyArgs()
    {
        $result = Index::go("aasd asd asd");
        $this->assertEquals("enter 2 arguments\n", $result);

    }
public function testTooFewArgs()
    {
        $result = Index::go("aasd");
        $this->assertEquals("enter 2 arguments\n", $result);

    }

}