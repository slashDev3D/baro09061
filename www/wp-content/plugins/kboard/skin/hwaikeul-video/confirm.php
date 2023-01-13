<div id="kboard-hwaikeul-video-editor" class="confirm">
	<form method="post" action="<?php echo esc_url($url->getConfirmExecute($content->uid))?>">
		<div class="kboard-attr-row kboard-confirm-row kboard-attr-title">
			<label class="attr-name"><?php echo __('Password', 'kboard')?></label>
			<div class="attr-value">
				<input type="password" name="password" placeholder="<?php echo __('Password', 'kboard')?>..." autofocus required>
				<?php if($board->isConfirmFailed()):?>
					<div class="description"><?php echo __('※ Your password is incorrect.', 'kboard')?></div>
				<?php endif?>
			</div>
		</div>
		<div class="kboard-control">
			<div class="left">
				<?php if($content->uid && kboard_mod() != 'document'):?>
				<a href="<?php echo esc_url($url->getDocumentURLWithUID($content->uid))?>" class="kboard-hwaikeul-video-button-small"><img class="button-icon icno-back" src="<?php echo $skin_path?>/images/back-16.png" srcset="<?php echo $skin_path?>/images/back-32.png 2x, <?php echo $skin_path?>/images/back-48.png 3x" alt="<?php echo __('Back', 'kboard')?>"> <span class="button-text text-document"><?php echo __('Document', 'kboard')?></span></a>
				<?php endif?>
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-hwaikeul-video-button-small"><img class="button-icon icon-list" src="<?php echo $skin_path?>/images/list-16.png" srcset="<?php echo $skin_path?>/images/list-32.png 2x, <?php echo $skin_path?>/images/list-48.png 3x" alt="<?php echo __('List', 'kboard')?>"> <span class="button-text text-list"><?php echo __('List', 'kboard')?></span></a>
			</div>
			<div class="right">
				<button type="submit" class="kboard-hwaikeul-video-button-small"><img class="button-icon icon-confirm" src="<?php echo $skin_path?>/images/edit-16.png" srcset="<?php echo $skin_path?>/images/edit-32.png 2x, <?php echo $skin_path?>/images/edit-48.png 3x" alt="<?php echo __('Password confirm', 'kboard')?>" alt="confirm"> <span class="button-text text-confirm"><?php echo __('Password confirm', 'kboard')?></span></button>
			</div>
		</div>
	</form>
</div>