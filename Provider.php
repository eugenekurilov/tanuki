<?php
namespace Psr\SimpleCache;

/*
*  Данный класс использует очередь источников данных,
 * перебирает все источники по очереди до тех пор, пока не получит значения
 * ключа. В худшем случае доходит до непосредственного внешнего поставщика
 * валюты
*/

class Provider implements CacheInterface
{
    public function get($key, $default = null)
    {
        $value = null;
        $queuePureSource = [];
        $queueSource = $params['queueSource'];
        
        foreach ($queueSource as $nameSource) {
            if ($value = getComponent($nameSource)->get($key, $default) !== null) {
                break;
            } else {
                $queuePureSource[] = $nameSource;
            }
        }
        
        foreach ($queuePureSource as $nameSource) {
            getComponent($nameSource)->set($key, $value); 
        }
        
        return $value;
    }
    
    public function set($key, $value, $ttl = null)
    {
        
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
