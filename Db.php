<?php
namespace Psr\SimpleCache;

/*
 * Класс, который возврашает данные из базы данных, но при этом
 * использует интерфейс стандарта CacheInterface для того, 
 * чтобы использовать в цепочке источников данных
 */


class Db implements CacheInterface
{
    public function get($key, $default = null)
    {
        // обертка на вызов функции select
    }
    
    public function set($key, $value, $ttl = null)
    {
        // обертка на вызов функции update/insert
    }
    
    public function delete($key)
    {
        
    }
    
    public function clear() 
    {
        
    }
    
    public function getMultiple($keys, $default = null)
    {
        
    }
    
    public function setMultiple($values, $ttl = null)
    {
        
    }
    
    public function deleteMultiple($keys)
    {
        
    }
    
    public function has($key)
    {
        
    }
    
}
