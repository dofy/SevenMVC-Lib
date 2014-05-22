<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/22 
 */
class SevenLog
{
    static public function Log($msg, $file = 'default', $folder = 'logs')
    {
        if(empty($folder))
            $folder = 'logs';
        
        if(empty($file))
            $file = 'default';
        
        $file .= '.log';
        
        if(!file_exists($folder))
            mkdir($folder);
        
        $fp = fopen($folder . '/' . $file, 'a+');
        $msg = sprintf("[%s]\t%s", date('Y-m-d H:i:s'), $msg);
        fwrite($fp, $msg);
        fclose($fp);
    }
}
?>