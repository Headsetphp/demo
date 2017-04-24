<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>myheader.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/common.css">
	<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>js/common.js"></script>
	<body>
		<nav class="navmax">
            <div class="juone"></div>
            <div class="sy2"></div>
                <!--<?php echo "haha" ?>-->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fbdc3c388e2946c818554cd73013b674&action=category&catid=0&num=10&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'id ASC','limit'=>'10',));}?>
                	<div class="jutwo">
                		<img src="<?php echo IMG_PATH;?>img/ly/sy3.png" alt="">
                			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                				<a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                			<?php $n++;}unset($n); ?>
                		<section class="denglu">
		                    <a href="javascript:;">登陆</a>
		                    <a href="javascript:;">注册</a>
		                </section>
		                <input type="text" name="search">
                	</div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </nav>
<!--        			<?php var_dump($data)?>-->
        <nav class="navmin">
        	<div><img src="<?php echo IMG_PATH;?>img/zhc/zhc-minicon_03.png"></div>
        	<div>
        		<img src="<?php echo IMG_PATH;?>img/zhc/zhc-minicon_05.png">
        		<ul>
        			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=768de0fef5da991b99d45ef258abc541&action=category&num=10&catid=%24catid&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id ASC','limit'=>'10',));}?>
        				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        				<li>
        					<a href="<?php echo $v['url'];?>">
		        				<h1><?php echo $v['catname'];?></h1>
		        				<p><?php echo $v['catdir'];?></p>
		        				<div>
		        					<img src="<?php echo IMG_PATH;?>img/zhc/zhc-minzt_12.png" />
		        					<img src="<?php echo IMG_PATH;?>img/zhc/zhc-minzt_10.png" class="active"/>
		        				</div>
	        				</a>
        				</li>
        				<?php $n++;}unset($n); ?>
        			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        			
        		</ul>
        	</div>
        </nav>
