<?php// wap phpmyadmin// ionutvmi@gmail.com// master-land.net?><center><b><?php echo strtoupper($lang->Import);?></b></center><br/><?php if(isset($_GET['db'])){@$_SESSION['data']=$_GET['db'];echo "<div class='left'>".$_var->home.($_GET['db'] ? "<a href='tables.php?db=".urlencode($db_name)."'>".pma_img('database.png').htmlentities($db_name)."</a> &#187;" : "")."  ".pma_img('b_tblimport.png').$lang->Import."</div><hr size='1px'>";if($_POST && $_POST['th']=='1' || $_GET['file'] && $_GET['th']=='1') {		if($_err) {	foreach($_err as $_err)	echo "<div class='notice'> ".pma_img('s_error.png')." $lang->Lỗi : $_err </div>";	echo "<div class='notice'> ".pma_img('s_error.png')." $lang->sql_stop </div>";	} else {	echo "<div class='success'> ".pma_img('s_success.png')." $lang->sql_ok ($_sql_nr $lang->Query)</div>";	} }elseif($_POST && $_POST['th']!=='1' && $_POST['sv']=='1'){	echo "<div class='success'> ".pma_img('s_success.png')." Upload thành công!</div>";}elseif($_POST && $_POST['sv']!=='1'){	echo "<div class='notice'> ".pma_img('s_error.png')."Chú ý! Bạn chưa chọn lưu lại file</div>";}?><b>Upload tệp từ xa</b><br/><form action='import.php?db=<? echo $_GET['db'];?>' method='post'><input type='text' name='url' value='http://'><br/><input type='checkbox' name='sv' value='1' checked="checked"> <?php echo $lang->Save_after_execute; ?><br/><input type='checkbox' name='th' value='1'> Thực hiện import ngay<br/><input type='submit' value='<?php echo $lang->Go;?>'></form><hr size='1px'/><b>UPload tệp từ ĐT/PC</b><br/><form action='import.php?db=<? echo $_GET['db'];?>' method='post' enctype='multipart/form-data'>- <b><?php echo $lang->Max.": ".get_max_upl();?>M</b><br/><input type='file' name='file'> <br/><input type='checkbox' name='sv' value='1' checked="checked"> <?php echo $lang->Save_after_execute; ?><br/><input type='checkbox' name='th' value='1'> Thực hiện import ngay<br/><input type='submit' name='vmi' value='<?php echo $lang->Upload;?>'></form><hr size='1px'/><b>Quản lí các Tệp đã UPLoad</b><br/><div align="left"><a href="files.php?db=<?php echo $_GET['db'];?>"> + Quản lí các tệp và import chúng</a></div><?}else{echo '<b>Mời chọn db<br/><form action="import.php" method="get">Tên db: <input type="text" name="db" value="'.$_SESSION['data'].'"/><br/><input type="submit" value="Bắt đầu"/></form>';}