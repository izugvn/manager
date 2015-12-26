<?php
namespace Hoaian\WebBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\Filesystem\Filesystem;
class DefaultController extends Controller
{
	public function indexAction(Request $request)
	{
		$page=(int)$_GET["f"];
		if($page==0)
		{
			$session = $request->getSession();
			$login=(int)$session->get("user_id");
			if($login==0)
			{
				$page = 1;
			}
			else
			{
				$page = 2;
			}
		}
		else
		{
			$fs = new Filesystem();
			$filepage =$fs->exists($this->get('kernel')->getBundle('HoaianWebBundle')->getPath().'/Resources/views/Default/'.(int)$_GET["f"].'.html.twig');
			if($filepage!=true)
			{
				$page=3;
			}
			else
			{
				$page = (int)$_GET["f"];
			}
		}
		return $this->render('HoaianWebBundle:Default:'.$page.'.html.twig');
	}
	
	public function pmAction(Request $request)
	{
		return $this->render('HoaianWebBundle:Pm:index.html.twig');
	}
}
