<?php
namespace Hoaian\WebBundle\Twig;
use Hoaian\WebBundle\Entity\UserInfo;
class AppUsers
{
	protected $em;
	protected $user_id;
	public function __construct($user_id) 
	{
		$kernel = $GLOBALS['kernel'];
		$this->em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
		$this->user_id=$user_id;
	}
	public function get($uid)
	{
		$user = $this->em->createQuery('SELECT p FROM HoaianWebBundle:UserInfo p WHERE p.uid=:uid')->setParameter('uid', $uid);
		$users = $user->getArrayResult();
		return $users[0];
	}
	public function set($par,$val,$uid)
	{
		if($uid==NULL)
		{
			$uid=$this->user_id;
		}
		$user = $this->em->createQuery('UPDATE HoaianWebBundle:UserInfo p SET p.step=:par WHERE p.uid=:uid')->setParameter('uid', $uid)->setParameter('par', $val);
		$users = $user->execute();
		return '';
	}
	public function checkUser($nick)
	{
		$nick=substr($nick,0,30);
		$user = $this->em->createQuery('SELECT p FROM HoaianWebBundle:UserInfo p WHERE p.nick=:nick')->setParameter('nick', $nick);
		$users = $user->getArrayResult();
		return $users[0]["nick"]==NULL?'false':'true';
	}
	public function checkLogin($nick,$pass)
	{
		$nick=substr($nick,0,30);
		$user = $this->em->createQuery('SELECT p FROM HoaianWebBundle:UserInfo p WHERE p.nick=:nick AND p.pass=:pass')->setParameter('nick', $nick)->setParameter('pass', $pass);
		$users = $user->getArrayResult();
		return $users[0];
	}
	
	public function newUser($nick,$pass,$email,$sex,$reg_time,$browser,$ip,$birthday)
	{
		$user = new UserInfo();
		$user->setNick($nick);
		$user->setPass($pass);
		$user->setEmail($email);
		$user->setSex($sex);
		$user->setRegTime($reg_time);
		$user->setBrowser($browser);
		$user->setIp($ip);
		$user->setBirthday($birthday);
		$this->em->persist($user);
		$this->em->flush();
		return '';
	}
}
?>
