<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hissterkiller
 * Date: 11/7/12
 * Time: 12:16 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Spl\Interfaces;
interface DataVoInterface
{

    public function setData($data = array());

    public function getData();

    public function unsetData();

    public function getDataKey($key);

    public function setDataKey($key, $value);

    public function hasDataKey($key);

    public function unsetDataKey($key);
}
