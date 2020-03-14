<?php

namespace Payjp\Tests;

use Phake;

/**
 * Class TransferTest
 * @package Payjp\Tests
 */
class TransferTest extends \Payjp\Tests\PayjpTestCase {

    public function testTransferAll()
    {
        $res = $this->payjp->transfers->all();
        Phake::verify($this->payjp)->request('GET', 'transfers', []);
    }

    public function testTransferRetrieve()
    {
        $res = $this->payjp->transfers->retrieve('tra_xxx');
        Phake::verify($this->payjp)->request('GET', 'transfers/tra_xxx');
    }
}
