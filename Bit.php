<?php
/**
 * @link https://github.com/blackcattools/yii2-base
 * @copyright Copyright (c) 2018 BlackCatTools
 */
  
namespace blackcattools\base;

class Bit {
    public static function test($bit,$value)
    {
        return (2 ** $bit) & $value;
    }
    public static function listActiveBits($value,$limit=30){
            $res=[];

            for($bit=0;$bit<=$limit;$bit++){
                    if (self::test($bit,$value)){
                            $res[]=$bit;
                    }
            }

            return implode(',',$res);
    }
}

