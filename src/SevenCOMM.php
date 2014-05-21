<?php

class COMM
{
    static public function gets($key = null, $default = null)
    {
        if($key == null)
        {
            return $_GET;
        }
        else
        {
            if(isset($_GET[$key]))
                return $_GET[$key];
            else
                return $default;
        }
    }

    static public function posts($key = null, $default = null)
    {
        if($key == null)
        {
            return $_POST;
        }
        else
        {
            if(isset($_POST[$key]))
                return $_POST[$key];
            else
                return $default;
        }
    }

    static public function setSs($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    static public function getSs($key = null, $default = null)
    {
        if($key == null)
        {
            return $_SESSION;
        }
        else
        {
            if(isset($_SESSION[$key]))
                return $_SESSION[$key];
            else
                return $default;
        }
    }
    
    static public function delSs($key)
    {
        unset($_SESSION[$key]);
    }
    
    static public function clrSs()
    {
        session_unset();
    }
    
    /**
     * 获取 Cookie
     * @param string $key Cookie name
     * @param string $default 默认值
     * @return string Cookie value || default value
     */
    static public function getCk($key = null, $default = null)
    {
        if($key == null)
        {
            return $_COOKIE;
        }
        else
        {
            if(isset($_COOKIE[$key]))
                return $_COOKIE[$key];
            else
                return $default;
        }
    }
    
    /**
     * 设置 Cookie
     * @param string $key cookie name
     * @param string $value cookie value
     * @param int    $expire 过期时间 （在当前时间基础上加上 expire 值）
     */
    static public function setCk($key, $value, $expire = 0)
    {
        if($expire > 0)
            $expire += time();
            
        setcookie($key, $value, $expire);
    }
    
    /**
     * 删除 Cookie
     */
    static public function delCk($key)
    {
        setcookie($key, null);
    }
    
    /**
     * 格式化文件大小数据及单位
     * @return string 文件大小
     */
    static public function fileSizeFormat($size)
    {
        if($size < 1024)
        {
            return $size . ' bytes';
        }
        elseif($size < 1024 * 1024)
        {
            return round($size / 1024 * 100) / 100 . ' KB';
        }
        else
        {
            return round($size / 1024 / 1024 * 100) / 100 . ' MB';
        }
    }
    
    /**
     * 删除文件夹下所有文件
     * @param string $dir 删除路径
     * @param boolean deleteRootToo 是否删除根文件夹
     */
    static function unlinkRecursive($dir, $deleteRootToo = false) 
    { 
        if(!$dh = @opendir($dir)) 
        { 
            return;
        } 
        while (false !== ($obj = readdir($dh))) 
        { 
            if($obj == '.' || $obj == '..') 
            { 
                continue; 
            }
            
            if (!@unlink($dir . '/' . $obj)) 
            { 
                self::unlinkRecursive($dir.'/'.$obj, true); 
            } 
        }
        
        closedir($dh); 
        
        if ($deleteRootToo) 
        { 
            @rmdir($dir); 
        } 
        
        return; 
    } 

}

?>