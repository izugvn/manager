<?php
namespace Hoaian\QuanlyBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;


class SomeController extends Controller
{
	
	public function someAction(Request $request)
    {	
		$session = $request->getSession();
		if($session->get('user')=='thaian2009')
		{
		$act=$request->get('act');
		if(isset($act))
		{
			if($act=='1')
			{
				$sact='cache:clear --env=prod';
			}
			
			if($act=='2')
			{
				$sact='doctrine:mapping:import --force HoaianWebBundle yml';
			}
			if($act=='3')
			{
				$sact='doctrine:mapping:convert annotation ./src';
			}
			if($act=='4')
			{
				$sact='doctrine:generate:entities HoaianWebBundle';
			}
			if($act=='5')
			{
				$sact='assets:install /home/vol10_4/ultimatefreehost.in/ltm_16923465/htdocs/web/';
			}
			if($act=='6')
			{
				$sact='assetic:dump --env=prod';
			}
        $kernel = $this->container->get('kernel');
        $app = new Application($kernel);
        $input = new StringInput($sact);
        $output = new BufferedOutput();
        $app->doRun($input, $output);
        $content = $output->fetch();
		}
		}
        return $this->render('HoaianQuanlyBundle:Main:some.html.twig',array('scontent'=>$content));
    }
}
?>