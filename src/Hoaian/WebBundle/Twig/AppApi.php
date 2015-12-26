<?php
namespace Hoaian\WebBundle\Twig;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Hoaian\WebBundle\Twig\AppUsers;
use Hoaian\WebBundle\Twig\AppForums;
require_once 'Mobile_Detect.php';
class AppApi
{
	protected $request;
	protected $em;
	protected $users;
	protected $forums;
	protected $user_id;
	public function __construct() 
	{
		$this->request = Request::createFromGlobals();
		$kernel = $GLOBALS['kernel'];
		$this->em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
		$this->user_id=$this->s()->get('user_id');
		$this->users=new AppUsers($this->user_id);
		$this->forums=new AppForums($this->user_id,$this->request);
	}
	public function md5($key)
	{
		return md5('msS'.md5($key));
	}
	public function r()
	{
		$this->request->setSession($this->s());
		return $this->request;
	}
	public function u()
	{
		return $this->users;
	}
	public function f()
	{
		return $this->forums;
	}
	public function ses()
	{
		return $this->cookies->get('PHPSESSID');
	}
	public function s()
	{
		return new Session(new PhpBridgeSessionStorage());
	}
	public function user_id()
	{
		return $this->user_id;
	}
	public function device()
	{
		if($this->request->get('device')=='computer' || $this->request->get('device')=='phone')
		{
			return $this->request->get('device')=='computer'?'computer':'phone';
		}
		else
		{
			$session=$this->s();
			if($session->get('device')=='computer' || $session->get('device')=='phone')
			{
				return $session->get('device');
			}
			else
			{
				$detects = new Mobile_Detect();
				$deviceType = ($detects->isMobile() ? 'phone' : 'computer');
				$session->set('device',$deviceType);
				return $deviceType;
			}
			
		}
	}
	public function times()
	{
		return microtime(true);
	}
	public function redirect($url)
	{
		header("Location: " . $url);
		exit;
		return '';
	}
}
?>
