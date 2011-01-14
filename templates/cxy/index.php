<html>
<head>
        <title>产学研 :: 北京师范大学珠海分校</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?=import_js('js/lib.js');?>
        <?=import_css('css/base.css');?>
        <link rel="stylesheet" href="<?=get_theme_file('style.css');?>" type="text/css" /> 
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div id="main">
<table id="Table_01" width="857" height="909" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="<?=get_theme_file('images/header.jpg');?>" width="856" height="117" alt=""></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="117" alt=""></td>
	</tr>
	<tr>
		<td colspan="3"><?=kk_menu();?></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="34" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="<?=get_theme_file('images/index_edit_03.jpg');?>" width="289" height="37" alt=""></td>
		<td rowspan="2">
        	<?=kk_photos_slider();?>
        </td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="<?=get_theme_file('images/index_edit_05.jpg');?>" width="10" height="246" alt="">
         </td>
		<td rowspan="2" style="background:url('<?=get_theme_file('images/notice.jpg');?>')">
        	<ul class="articles_list">
            	<?=kk_list_articles( 6, 20 );?>
            </ul>
        </td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="235" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="<?=get_theme_file('images/news.jpg');?>" width="567" height="285" alt=""></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?=get_theme_file('images/info.jpg');?>" width="279" height="10" alt=""></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="10" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="<?=get_theme_file('images/index_edit_09.jpg');?>" width="289" height="30" alt=""></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="30" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?=get_theme_file('images/index_edit_10.jpg');?>" width="10" height="244" alt=""></td>
		<td style="background:url('<?=get_theme_file('images/info-12.jpg');?>');">
        	<ul class="articles_list">
        		<?=kk_list_articles( 1, 8 );?>
        	</ul>
        </td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="182" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?=get_theme_file('images/index_edit_12.jpg');?>" width="279" height="62" alt=""></td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="62" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
		<td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="109" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" style="background:url('<?=get_theme_file('images/index_edit_14.jpg');?>');?>">
        	<a target="_blank" href="<?=site_url('admin');?>">后台管理</a>
        </td>
		
        <td>
			<img src="<?=get_theme_file('images/spacer.gif');?>" width="1" height="92" alt=""></td>
	</tr>
</table>
</div>


</body>
</html>