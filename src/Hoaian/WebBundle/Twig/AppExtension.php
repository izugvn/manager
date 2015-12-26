<?php
namespace Hoaian\WebBundle\Twig;
use Hoaian\WebBundle\Twig\AppCpanel;
use Hoaian\WebBundle\Twig\AppApi;
class AppExtension extends \Twig_Extension
{


    protected $root_dir;
    public function __construct() 
    {
		$this->root_dir=preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']).'/';
    }
	
    public function getGlobals() {
        $appCpanel = new AppCpanel();
        $appApi = new AppApi();
        return array('cpanel' => $appCpanel,'api' => $appApi);
    }

    public function getFiles($dir)
    {
        $dirs    =$this->root_dir.$dir;
        $files1 = scandir($dirs);
        return $files1;
    }
    public function getPer($dir)
    {
        $dirs    = $this->root_dir.$dir;
        $length = strlen(decoct(fileperms($dirs)))-3;
        return substr(decoct(fileperms($dirs)),$length);
    }
    public function getSize($dir)
    {
		$dirs    =$this->root_dir.$dir;
		if(is_file($dirs))
		{
        return round(filesize($dirs)/1024,1) . 'kb | ';
		}
    }
    public function getFunctions() {    
	 	return array(
            'filelist' => new \Twig_Function_Method($this, 'getFiles', array('is_safe' => array('html'))),
	 		'fileper' => new \Twig_Function_Method($this, 'getPer', array('is_safe' => array('html'))),
			'filesize' => new \Twig_Function_Method($this, 'getSize', array('is_safe' => array('html')))
        );
    }

    public function getName()
    {
        return 'app_extension';
    }
}
?>