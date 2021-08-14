<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="article" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
			<div class="info"><?php _e(''); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></div>
            <div class="content" itemprop="articleBody">
    			<?php $this->excerpt(80, '...'); ?>
            </div>

    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="article">
                <h2 class="title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <div class="pagebar"><?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
    </div><!-- end #main -->
</section>
	<?php $this->need('footer.php'); ?>
