<?php
namespace duan617\filesystem\cloud\drivers;

use Iidestiny\Flysystem\Oss\OssAdapter;
use League\Flysystem\AdapterInterface;
use OSS\Core\OssException;
use think\filesystem\Driver;

class OssDriver extends Driver
{
    /**
     *
     * @return AdapterInterface
     * @throws OssException
     * @author JaguarJack
     * @email njphper@gmail.com
     * @time 2020/1/25
     */
    protected function createAdapter(): AdapterInterface
    {
        // TODO: Implement createAdapter() method.
        $ossConfig = \config('filesystem.disks.oss');

        return new OssAdapter(
            $ossConfig['access_key'],
            $ossConfig['secret_key'],
            $ossConfig['end_point'],
            $ossConfig['bucket'],
            $ossConfig['is_cname'],
            $ossConfig['prefix']
        );
    }

}