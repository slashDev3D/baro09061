<div id="kboard-hwaikeul-video-editor">
	<form id="kboard-hwaikeul-video-form" class="kboard-form" method="post" action="<?php echo esc_url($url->getContentEditorExecute())?>" enctype="multipart/form-data" onsubmit="return kboard_editor_execute(this);">
		<?php $skin->editorHeader($content, $board)?>
		
		<?php foreach($board->fields()->getSkinFields() as $key=>$field):?>
			<?php echo $board->fields()->getTemplate($field, $content, $boardBuilder)?>
		<?php endforeach?>
		
		<div class="kboard-control">
			<div class="left">
				<?php if($content->uid):?>
				<a href="<?php echo esc_url($url->getDocumentURLWithUID($content->uid))?>" class="kboard-hwaikeul-video-button-small"><img class="button-icon icno-back" src="<?php echo $skin_path?>/images/back-16.png" srcset="<?php echo $skin_path?>/images/back-32.png 2x, <?php echo $skin_path?>/images/back-48.png 3x" alt="<?php echo __('Back', 'kboard')?>"> <span class="button-text text-back"><?php echo __('Back', 'kboard')?></span></a>
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-hwaikeul-video-button-small"><img class="button-icon icon-list" src="<?php echo $skin_path?>/images/list-16.png" srcset="<?php echo $skin_path?>/images/list-32.png 2x, <?php echo $skin_path?>/images/list-48.png 3x" alt="<?php echo __('List', 'kboard')?>"> <span class="button-text text-list"><?php echo __('List', 'kboard')?></span></a>
				<?php else:?>
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-hwaikeul-video-button-small"><img class="button-icon icon-back" src="<?php echo $skin_path?>/images/back-16.png" srcset="<?php echo $skin_path?>/images/back-32.png 2x, <?php echo $skin_path?>/images/back-48.png 3x" alt="<?php echo __('Back', 'kboard')?>"> <span class="button-text text-back"><?php echo __('Back', 'kboard')?></span></a>
				<?php endif?>
			</div>
			<div class="right">
				<?php if($board->isWriter()):?>
				<button type="submit" class="kboard-hwaikeul-video-button-small"><img class="button-icon icon-save" src="<?php echo $skin_path?>/images/edit-16.png" srcset="<?php echo $skin_path?>/images/edit-32.png 2x, <?php echo $skin_path?>/images/edit-48.png 3x" alt="<?php echo __('New', 'kboard')?>"> <span class="button-text text-save"><?php echo __('Save', 'kboard')?></span></button>
				<?php endif?>
			</div>
		</div>
	</form>
</div>

<?php wp_enqueue_script('kboard-hwaikeul-video-editor', "{$skin_path}/editor.js", array(), KBOARD_VERSION, true)?>