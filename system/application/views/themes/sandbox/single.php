<?php $this->lang->load('lifepress'); ?>

<div id="main_container">

<div id="single_container">
	<p class="site_info" style="background: transparent url(<?php echo $item->get_feed_icon()?>) 0 center no-repeat"><?php echo $this->lang->line('i_posted_to'); ?> <?php echo $item->get_feed_domain()?></p>
	<h2><?php echo $item->get_title()?></h2>
	<p><a href="<?php echo $item->get_original_permalink()?>"><?php echo $item->get_original_permalink()?></a></p>
	<?php if ($item->has_content()): ?>
	<div class="content"><?php echo $item->get_content()?></div>
	<?php endif; ?>
	<?php if ($item->has_image() && !$item->has_video()): ?>
	<?php if (isset($item->item_data[$item->get_feed_class()]['image']['m']) && !empty($item->item_data[$item->get_feed_class()]['image']['m'])): ?>
	<p><img src="<?php echo $item->item_data[$item->get_feed_class()]['image']['m']?>" alt="" /></p>
	<?php else: ?>
	<p><img src="<?php echo $item->get_image()?>" alt="" /></p>
	<?php endif; ?>
	<?php endif; ?>
	<?php if ($item->has_video()): ?>
	<div>
	        <?php //inline php hackery FTW!
	        $video = str_replace('width="212"', 'width="500"', $item->get_video());
            $video = str_replace('height="159"', 'height="375"', $video);
            $video = str_replace('height="178"', 'height="415"', $video);
            echo $video?>
	</div>
	<?php endif; ?>
	<?php if ($item->has_tags()): ?>
	<ul class="item_tag_list">
		<li>Tags:</li>
		<?php foreach ($item->get_tags() as $tag): ?>
		<li><a href="<?php echo $this->config->item('base_url')?>items/tag/<?php echo $tag->slug?>"><?php echo $tag->name?></a></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>

            <div id="comments_container">
            <?php echo $this->lang->line('comment_recommendation'); ?>
            </div>

</div>
<?php $this->load->view('themes/'.$this->config->item('theme').'/_sidebar')?>
