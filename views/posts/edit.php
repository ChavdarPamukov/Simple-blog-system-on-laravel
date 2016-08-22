<?php $this->title = 'Edit existed post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" value="<?=htmlspecialchars($this->post['title'])?>"/>
    <div>Content:</div>
    <textarea name="post_content" cols="30" rows="10"><?=htmlspecialchars($this->post['content'])?></textarea>
    <div>Date (yyyy-mm-dd hh:mm:ss):</div>
    <input type="text" name="post_date" value="<?=htmlspecialchars($this->post['date'])?>"/>
    <div>Tag:</div>
    <input type="text" name="post_tag" value="<?=htmlspecialchars($this->post['tag'])?>">
    <div>Author username:</div>
    <input type="text" name="user_id" value="<?=htmlspecialchars($this->post['user_id'])?>"/>
    <div>
        <input type="submit" value="Edit" />
        <a href="<?=APP_ROOT?>/posts"><i>Cancel</i></a>
    </div>
</form>