<?php $this->title = 'Create new post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" />
    <div>Content:</div>
    <textarea name="post_content" cols="30" rows="10"></textarea>
    <div>Tags:</div>
    <input type="text" name="post_tag" />
    <div>
        <input type="submit" value="Create" />
        <a href="<?=APP_ROOT?>/posts"><i>Cancel</i></a>
    </div>
</form>
