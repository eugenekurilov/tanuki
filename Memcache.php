<?php
namespace Psr\SimpleCache;

/*
 * Класс который возврашает данные  из оперативки (memcache),
 * но при этом использует интерфейс стандарта CacheInterface для того, 
 * чтобы использовать работать в цепочке источников данных
 */

class Memcache implements CacheInterface
{
    public function get($key, $default = null)
    {
        // обертка на вызов функции memcache
    }
    
    public function set($key, $value, $ttl = null)
    {
        // обертка на вызов функции memcache
    }
    
    public function delete($key)
    {
        // обертка на вызов функции memcache
    }
    
    public function clear() 
    {
        // обертка на вызов функции memcache
    }
    
    public function getMultiple($keys, $default = null)
    {
        // обертка на вызов функции memcache
    }
    
    public function setMultiple($values, $ttl = null)
    {
        // обертка на вызов функции memcache
    }
    
    public function deleteMultiple($keys)
    {
        // обертка на вызов функции memcache
    }
    
    public function has($key)
    {
        // обертка на вызов функции memcache
    }
    
}  
