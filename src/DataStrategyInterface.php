<?php

namespace MicroPHP\Csrf;

interface DataStrategyInterface
{
    public function getData($key);
}