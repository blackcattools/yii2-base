<?php
  
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


//https://support.microsoft.com/pt-br/help/305144/how-to-use-the-useraccountcontrol-flags-to-manipulate-user-account-pro
//https://jackstromberg.com/2013/01/useraccountcontrol-attributeflag-values/
