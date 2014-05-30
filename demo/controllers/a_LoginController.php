<?php
/**
 * Author:  Seven Yu
 * E-Mail:  dofyyu@gmail.com
 * Version: 2.0.1
 * Update:  2014/05/30 
 */

class LoginController extends SevenController
{
    public function __construct()
    {
        $this->models = array('users');
        parent::__construct();
    }

    public function indexAction()
    {
        $this->assign('title', 'Login');
    }
    
    public function loginAction()
    {
        $name = COMM::posts('name');
        $pass = COMM::posts('pass');
        $back = COMM::posts('back');
        $user = $this->Users->checkUser($name, $pass);
        if($user)
        {
            $this->Users->updateIp($user['id'], $_SERVER['REMOTE_ADDR']);
            
            $_SESSION['islogin']  = true;
            $_SESSION['ip']       = $user['ip'];
            $_SESSION['id']       = $user['id'];
            $_SESSION['name']     = $user['name'];
            
            $this->assign('json', array('rc'=>0, 'backurl'=>$back));
        }
        else
        {
            $_SESSION['islogin'] = false;
            $this->assign('json', array('rc'=>1, 'msg'=>'登录失败.'));
        }
        $this->tpl = 'json.tpl';
    }
    
    public function logoutAction()
    {
        COMM::clrSs();
        header('location: ?c=login');
    }

}
?>