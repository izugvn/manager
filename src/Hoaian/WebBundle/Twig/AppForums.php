<?php
namespace Hoaian\WebBundle\Twig;
use Hoaian\WebBundle\Entity\Forum;
class AppForums
{
	protected $em;
	protected $user_id;
	protected $request;
	public function __construct($user_id,$request) 
	{
		$kernel = $GLOBALS['kernel'];
		$this->em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
		$this->user_id=$user_id;
		$this->request=$request;
	}
	public function ch_key(&$forums,$new,$old)
	{
		foreach ($forums as &$arr)
		{
			$arr[$new] = $arr[$old];
			unset($arr[$old]);
		}
	}

	public function get($ids)
	{
		$forum = $this->em->createQuery('SELECT p FROM HoaianWebBundle:Forum p WHERE p.idForum=:id_forum  ORDER BY p.date DESC')->setParameter('id_forum', $ids);
		$forums = $forum->getArrayResult();
		$this->ch_key($forums,'user_id','userId');
		return $forums;
	}
	public function form_url($ids)
	{
		$url='/main.php?id=ch_topic_h&uid='.$ids.'&back_url='.urlencode($this->request->getRequestUri());
		return $url;
	}
	public function fix($value)
	{
		if(get_magic_quotes_gpc())
		{
			$value=stripcslashes($value);    
		}
		if(function_exists("mysql_real_escape_string"))
		{
			$value=mysql_real_escape_string($value);   
		}else{
			$value=addslashes($value);
		}
		return $value;    
	}
	public function post($ids,$text)
	{
			$forum=new Forum();
			$date =new \DateTime();
			$forum->setText($text);
			$forum->setIDForum($ids);
			$forum->setDate($date->getTimestamp());
			$forum->setUserId($this->user_id);
			$this->em->persist($forum);
			$this->em->flush();
		return '';
	}
}
?>