<?php $this->title = 'Delete post'; ?>

<h1>Are you sure you want to delete this post?</h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" value="<?=htmlspecialchars($this->post['title'])?>" disabled/>
    <div>Content:</div>
    <textarea name="post_content" cols="30" rows="10" disabled><?=htmlspecialchars($this->post['content'])?></textarea>
    <div>Date (yyyy-mm-dd hh:mm:ss):</div>
    <input type="text" name="post_date" value="<?=htmlspecialchars($this->post['date'])?>" disabled/>
    <div>Tags:</div>
    <input type="text" name="post_tag" value="<?=htmlspecialchars($this->post['tag'])?>" disabled/>
    <div>Author ID:</div>
    <input type="text" name="user_id" value="<?=htmlspecialchars($this->post['user_id'])?>" disabled/>
    <div>
        <input type="submit" value="Delete" />
        <a href="<?=APP_ROOT?>/posts"><i>Cancel</i></a>
    </div>
</form>