<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
		
		
		
		
		
		
		<pre>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</pre>
		
		
		
		
		
		
		
		
		<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c5efefd2f9987ba2e709be991a15d79&action=category&catid=0&num=5&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'id ASC','limit'=>'5',));}?>
		<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        		<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
        	<?php $n++;}unset($n); ?>
		</ul>
        	
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<?php include template("content","footer"); ?>
