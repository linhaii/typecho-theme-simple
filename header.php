<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php 
$this->options->charset();
?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" /> 
    
    <title><?php 
if ($this->is('index')) {
    ?>
	<?php 
    $this->options->title();
    ?> - <?php 
    $this->options->description();
    ?>
      <?php 
} else {
    ?>
      <?php 
    $this->archiveTitle(array('category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章')), '', ' - ');
    $this->options->title();
    ?>
        <?php 
}
?>
        </title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php 
$this->options->themeUrl('normalize.css');
?>">
    <link rel="stylesheet" href="<?php 
$this->options->themeUrl('style.css');
?>">

    <script src="<?php 
$this->options->themeUrl('jquery-2.2.4.min.js');
?>"></script>
    <script>
$(function(){
	$(".toggle-search").click(function(){
		// $(".mnav i").toggleClass("fa-remove");
		// $(".mnav i").toggleClass("fa-bars");
		$(".Up-search").slideToggle(0);
		// $(".search").slideUp(100);
	});
	$(".toggle-menu").click(function(){
		// $(".mnav i").toggleClass("fa-remove");
		// $(".mnav i").toggleClass("fa-bars");
		$(".nav ul").slideToggle(0);
		// $(".search").slideUp(100);
	});
});
</script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php 
$this->header('generator=&template=&pingback=&xmlrpc=&wlw=');
?>
</head>
<body>

<header>

<div class="header container clearfix">
<div class="logo">
			<a  href="<?php 
$this->options->siteUrl();
?>"><?php 
$this->options->title();
?></a>
		</div>	        
				<div class="toggle-search"><i class="iconfont icon-search"></i></div>
				<div class="toggle-menu"><i class="iconfont icon-navicon"></i></div>	
		<div class="nav">
			<ul>
				<li id="nvabar-item-index"><a href="<?php 
$this->options->siteUrl();
?>">首页</a></li>
            			<?php 
$this->widget('Widget_Contents_Page_List')->to($pages);
?>
            			<?php 
while ($pages->next()) {
    ?>
				<li id="navbar-page-2"><a<?php 
    if ($this->is('page', $pages->slug)) {
        ?> class="current"<?php 
    }
    ?> href="<?php 
    $pages->permalink();
    ?>" title="<?php 
    $pages->title();
    ?>"><?php 
    $pages->title();
    ?></a> </li> <?php 
}
?>
			</ul>
		</div>
</div>
</header>
           <div class="Up-search clearfix">
            <div class="search container">
                <form name="search" method="get" action="<?php 
$this->options->siteUrl();
?>" role="search">
                    <input type="text" name="s" placeholder="<?php 
_e('输入关键词');
?>" />
                    <button type="submit" class="submit" value="<?php 
_e('搜索');
?>"><i class="iconfont icon-search"></i></button>
                </form>
            </div>
           </div>
    
    <section>
<div class="container clearfix">
		<div class="main-body">