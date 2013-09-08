<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="./rss.xml" />
	<link rel="alternate" type="application/atom+xml" title="Recent Entries" href="./atom.xml" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="./rsd.xml" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" />
	<!--<script type="text/javascript" src="<?php bloginfo('template_url');?>/menufolder.js" charset="utf8"></script>-->
	
	<meta name="keywords" content="キーワード,キーワード" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
</head>
<body>

<div id="container">
	<div id="header"></div>
	<div id="contents">
		<div id="left"></div>
		<div id="right"></div>
	</div>
	<div id="footer"></div>
</div>

</body>
</html>