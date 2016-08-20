<?php $this->title = 'Posts'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Tag</th>
        <th>Author ID</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->posts as $post) : ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= htmlentities($post['title']) ?></td>
            <td><?= cutLongText($post['content']) ?></td>
            <td><?= htmlentities($post['date']) ?></td>
            <td><?= htmlentities($post['tag']) ?></td>
            <td><?= $post['user_id'] ?></td>
            <td>
                <a href="<?=APP_ROOT?>/posts/edit/<?= $post['id'] ?>"><i>Edit</i></a>
                <a href="<?=APP_ROOT?>/posts/delete/<?= $post['id'] ?>"><i>Delete</i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<a href="<?=APP_ROOT?>/posts/create/"><i>Create new post</i></a>