<?php

namespace Payjp\Tests;

use Phake;

class EventTest extends \Payjp\Tests\PayjpTestCase {

    public function testEventAll()
    {
        $res = $this->payjp->events->all();
        Phake::verify($this->payjp)->request('GET', 'events', []);
    }

    public function testEventRetrieve()
    {
        $res = $this->payjp->events->retrieve('evn_xxx');
        Phake::verify($this->payjp)->request('GET', 'events/evn_xxx');
    }
}
