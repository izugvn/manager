<?php
//////////////////////////////////////////////////////
//			Gmanager mod by Tmc
//			File này lưu trử thông tin đăng nhập
//			Sửa cận thận
//			Mật khẩu phải mã hoá md5 2 lần trước khi viết vào
//////////////////////////////////////////////////////
//Tên đăng nhập
$setadmin = "thaian2009";
//Mật khẩu được mã hoá
$setpass = "cd28bcac1f1c35934df3bf4e6590441d";
//số dòng chỉnh sửa
$setdong = "50";
//Công cụ sửa văn bản
$setedit = "d";
//Thời gian thực thi sửa văn bản
setcookie("edit",$setedit,time()+24*365*3600);
//Tmc - fb.com/xtmc9x
