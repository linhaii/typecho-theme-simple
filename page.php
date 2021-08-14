<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="title" itemprop="name headline"><?php $this->title() ?></h2>
			<div class="info"><?php _e(''); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></div>
            <div class="content" itemprop="articleBody">
    			<?php $this->content(); ?>
            </div>
</article>


    <?php $this->need('comments.php'); ?>

</section>
<!-- end #main-->


<?php $this->need('footer.php'); ?>
