<?php
namespace Psr\SimpleCache;

/*
 * Класс, который возврашает данные из внешнего источника данных но при этом
 * использует интерфейс стандарта CacheInterface, для того, чтобы использовать
 * его в последствии в цепочки источников данных
 */


class External implements CacheInterface
{
    public function get($key, $default = null)
    {
        // здесь идет вызов на получение валюты из внешенго поставщика данных
    }
    
    public function set($key, $value, $ttl = null)
    {
        // заглушка
    }
    
    public function delete($key)
    {
        // заглушка
    }
    
    public function clear() 
    {
        // заглушка
    }
    
    public function getMultiple($keys, $default = null)
    {
        // заглушка
    }
    
    public function setMultiple($values, $ttl = null)
    {
        // заглушка
    }
    
    public function deleteMultiple($keys)
    {
        // заглушка
    }
    
    public function has($key)
    {
        // заглушка
    }
    
}
