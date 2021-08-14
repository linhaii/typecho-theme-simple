<?php
/**
 * Simple Blog & Diary Theme for Typecho
 * 
 * @package Simple 
 * @author Lin Hai
 * @version 1.0
 * @link https://lhcy.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


	<?php while($this->next()): ?>
<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
			<div class="info"><?php _e(''); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></div>
            <div class="content" itemprop="articleBody">
    			<?php $this->excerpt(80, '...'); ?>
            </div>
</article> 
	<?php endwhile; ?>


    <div class="pagebar"><?php $this->pageNav('&laquo;', '&raquo;'); ?></div>  
</section><!-- end #main-->


<?php $this->need('footer.php'); ?>
