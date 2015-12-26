<?php
namespace Hoaian\QuanlyBundle\Twig;
use Hoaian\QuanlyBundle\Twig\AppApi;
class AppExtension extends \Twig_Extension
{



    public function getGlobals() {
        $appApi = new AppApi();
        return array('cpanel' => $appApi);
    }

    public function getFiles($dir)
    {
        $dirs    = '/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/'.$dir;
        $files1 = scandir($dirs);
        return $files1;
    }
    public function getPer($dir)
    {
        $dirs    = '/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/'.$dir;
        $length = strlen(decoct(fileperms($dirs)))-3;
        return substr(decoct(fileperms($dirs)),$length);
    }
    public function getSize($dir)
    {
		$dirs    = '/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/'.$dir;
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