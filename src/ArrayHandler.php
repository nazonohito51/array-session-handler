<?php
namespace SessionHandlers;

use SessionHandlerInterface;

class ArrayHandler implements SessionHandlerInterface
{
    private $store = [];

    public function open($savePath, $sessionName)
    {
        return true;
    }

    public function close()
    {
        return true;
    }

    public function read($id)
    {
        return isset($this->store[$id]) ? $this->store[$id] : '';
    }

    public function write($id, $data)
    {
        $this->store[$id] = $data;

        return true;
    }

    public function destroy($id)
    {
        $this->store = [];

        return true;
    }

    public function gc($maxLifeTime)
    {
        return true;
    }
}
