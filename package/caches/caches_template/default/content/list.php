<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h3>list</h3>
		<!--<?php echo $catid ?>-->
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d032bfc43b270e9482fe74e51fbfe8&action=lists&catid=%24catid&num=5&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','limit'=>'5',));}?>
		<!--<?php echo $data ?>-->
		<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>	
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php var_dump($data) ?>
	</body>
</html>
