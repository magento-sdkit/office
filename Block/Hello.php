<?php
namespace Sdkit\Office\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function helloPublic()
    {
        return 'Hello #1';
    }

    protected function helloProtected()
    {
        return 'Hello #2';
    }

    private function helloPrivate()
    {
        return 'Hello #3';
    }
}
