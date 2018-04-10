# ArrayAccess

>PHP  数组访问接口，让对象可以像访问数组一样访问对象的接口

```php

  ArrayAccess {
    
    //检测数组的键值是否存在
    abstract public boolean offsetExists ( mixed $offset )
    
    //获取数组的偏移位置的值
    abstract public mixed offsetGet ( mixed $offset )
    
    //设置一个偏移位置的值
    abstract public void offsetSet ( mixed $offset , mixed $value )
    
    //unset一个偏移位置的值
    abstract public void offsetUnset ( mixed $offset )
  }

```
