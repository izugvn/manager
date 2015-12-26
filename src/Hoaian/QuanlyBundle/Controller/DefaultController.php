<?php
namespace Hoaian\QuanlyBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;
class DefaultController extends Controller
{
	public function mainAction(Request $request)
	{
		$pass='3ed18441b129cde3f3f375c67840eb42';
		$form = $this->createFormBuilder()
			->setAction($this->generateUrl('_cpanel'))
			->setMethod('POST')
			->add('username', 'text',array('label'=>' '))
			->add('password', 'password',array('label'=>' '))
			->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
			$data = $form->getData();
			$session = $request->getSession();
			$session->set('user', $data["username"]);
			$session->set('pass', md5(md5($data["password"])));
			return $this->redirect('/cpanel/');
		}
		$vari = array('form' => $form->createView(),'pass'=>$pass);
		return $this->render('HoaianQuanlyBundle:Main:index.html.twig',$vari);
	}
}
?>
