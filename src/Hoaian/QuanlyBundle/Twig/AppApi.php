<?php
namespace Hoaian\QuanlyBundle\Twig;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\RedirectResponse;
class AppApi
{
    protected $request;
 
    public function __construct() 
    {
        $this->request = Request::createFromGlobals();
    }
    public function r()
    {
        return $this->request;
    }
    public function noidung($file)
    {
        $filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;
        return file_get_contents($filename);
    }

    public function luufile($file,$noidung)
    {
        $filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;
        $fs = new Filesystem();
        try {
                $fs->dumpFile($filename, $noidung);
        }
        catch(IOException $e) {
        }
        return '';
    }
    public function chuyen($url)
    {
        return '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    }
	
	public function chmod($file,$i)
    {
		$filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;
		
        return chmod($filename,octdec($i));
    }

	public function mkdir($file)
    {
		$filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;		
        return mkdir($filename,octdec(700));
    }
	
	public function fopen($file)
    {
		$filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;		
        return fopen($filename,'w');
    }
	
	public function unlink($file)
    {
		$filename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;
		if(is_file($filename))
		{
        	return unlink($filename);
		}
		if(is_dir($filename))
		{
        	return rmdir($filename);
		}
    }
	
	public function rename($oldfile,$newfile)
    {
		$oldfilename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $oldfile;
		$newfilename='/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $newfile;
        return rename($oldfilename,$newfilename);
    }
	
	public function redirect($url)
    {
        header("Location: " . $url);
		exit;
		return '';
    }
	
	public function uploadFile ($file_field = null, $file) {
	$check_image = true;
	$random_name = true;
  $path = '/var/lib/openshift/5614d00089f5cf66200000ed/app-root/runtime/repo/php/' . $file;
  $max_size = 1000000;
  $whitelist_ext = array('jpg','png','gif');
  $whitelist_type = array('image/jpeg', 'image/png','image/gif');

  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error'][] = "Please specify a valid form field name";           
  }

  if (!$path) {
    $out['error'][] = "Please specify a valid upload path";               
  }      
  if (count($out['error'])>0) {
    return $out;
  }
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];          
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'][] = "Invalid file Extension";
    }
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'][] = "Invalid file Type";
    }
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'][] = "File is too big";
    }
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }
    if ($random_name) {
      $tmp = str_replace(array('.',' '), array('',''), microtime());                      
      if (!$tmp || $tmp == '') {
        $out['error'][] = "File must have a name";
      }     
      $newname = $tmp.'.'.$ext;                                
    } else {
        $newname = $name.'.'.$ext;
    }
    if (file_exists($path.$newname)) {
      $out['error'][] = "A file with this name already exists";
    }

    if (count($out['error'])>0) {
      return $out;
    } 
    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      $out['filepath'] = $path;
      $out['filename'] = $newname;
      return $out;
    } else {
      $out['error'][] = "Server Error!";
    }
         
  } else {
    $out['error'][] = "No file uploaded";
    return $out;
  }      
}
	
}
?>