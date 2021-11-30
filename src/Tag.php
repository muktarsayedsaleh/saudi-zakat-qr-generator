<?php

namespace MuktarSayedSaleh\ZakatTlv;

class Tag
{
    protected $tag;
    protected $value;

    public function __construct($tag, $value)
    {
        $this->tag = $tag;
        $this->value = $value;
    }

    public function valueLength()
    {
        return strlen($this->value);
    }

    protected function toHex($value)
    {
        return pack("H*", sprintf("%02X", $value));
    }

    public function __toString()
    {
        $tag = $this->toHex($this->tag);
        $length = $this->toHex($this->valueLength());
        $value = strval($this->value);
        
        return $tag.$length.$value;          
    }
}