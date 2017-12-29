<?php
	header("Content-type: text/html; charset=utf-8");
   $num=0;    //用来记录目录下的文件个数
   $dirname='./'; //要遍历的目录名字
   $dir_handle=opendir($dirname);

   echo '<table border="1" align="center" width="960px" cellspacing="0" cellpadding="0">';
   echo '<caption><h2>目录'.$dirname.'的内容</h2></caption>';
   echo '<tr align="left" bgcolor="#cccccc">';
   echo '<th>序号</th><th>名称</th><th>大小</th><th>类型</th><th>修改时间</th></tr>';
   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;
   	 	if($num++%2==0)    //隔行换色
   	 		$bgcolor="#ffffff";
   	 	else 
   	 		$bgcolor="#cccccc";
   	 	echo '<tr bgcolor='.$bgcolor.'>';
   	 	echo '<td>'.$num.'</td>';//序号
   	 	echo '<td><a href="'.$file.'" target="_blank">'.$file.'</a></td>'; //名称 链接
   	 	echo '<td>'.filesize($dirFile).'</td>';//大小
   	 	echo '<td>'.filetype($dirFile).'</td>';//类型
   	 	echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';//修改时间
   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);
   echo '在<b>'.$dirname.'</b>目录下的子目录和文件共有<b>'.$num.'</b>个';
?>