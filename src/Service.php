<?php
namespace duan617\filesystem\cloud;

class Service extends \think\Service
{
    public function register()
    {
        $this->app->bind('filesystem', Filesystem::class);
    }
}