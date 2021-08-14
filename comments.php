<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<div id="divCommentPost">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<p class="posttop"><a name="comment"><?php _e('发表评论：'); ?></a></p>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
    		<p>
                <label for="textarea" class="required"><?php _e(''); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
<?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>。<a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<div class="comment-text-area">
    			<input type="text" name="author" id="author" class="text" placeholder="<?php _e('名称'); ?>" value="<?php $this->remember('author'); ?>" required /><label for="author" class="required"></label>
    		</div>
    		<div class="comment-text-area">
    			<input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('邮箱'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> /><label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>></label>
    		</div>
    		<div class="comment-text-area">
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('网址 http(s)://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> /> <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>></label>
    		</div>
            <?php endif; ?>
    		<p>
                <button type="submit" class="button"><?php _e('提交'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e(''); ?></h3>
    <?php endif; ?>
</div>



