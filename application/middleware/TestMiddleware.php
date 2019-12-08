<?php
# application/middleware/TestMiddleware.php

class TestMiddleware implements Luthier\MiddlewareInterface
{
    private $CI; 
    public function __construct()
    {
        if(!function_exists("get_instance")) {
            throw new \Exception("This library works in a Code Igniter Project/Environment");
        }

        //initiate Code Igniter Instance
        $this->CI = &get_instance();
    }
    public function run($args)
    {
        // Check here for your logic and do whatever you want.
    }
}