<?php

class User implements ArrayAccess{

    public $attributes = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }


    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->attributes);
    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->setAttribute($offset, $value);
    }

    public function offsetUnset($offset)
    {
        unset($this->attributes[$offset]);
    }

    protected function getAttribute($name)
    {
        return isset($this->attributes[$name])?$this->attributes[$name]:null;
    }

    protected function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

}

$attr = [
    'name' => 'eric',
    'gender' => 'male',
    'height' => 175,
];

$user = new User($attr);

/*获取到对象 的 attributes 里面的 name属性*/
var_dump($user['name']);