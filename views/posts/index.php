<main>
    <table>
        <tr>
            <th>Post ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Tag</th>
            <th>Author full name</th>
            <th>Author ID</th>
            <th>Date</th>
            <th>Actions</th>
        </tr

    <?php foreach ($this->posts as $post) : ?>
        <tr>
            <td><?= htmlspecialchars($post['id'])?></td>
            <td><?= htmlspecialchars($post['title'])?></td>
            <td><?= cutLongText($post['content'])?></td>
            <td><?= htmlentities($post['tag']) ?></td>
            <td><?= htmlspecialchars($post['full_name'])?></td>
            <td><?= $post['user_id'] ?></td>
            <td><?= htmlspecialchars($post['date'])?></td>
            <td>
                <a href="<?=APP_ROOT?>/posts/edit/<?= $post['id'] ?>"><i>Edit</i></a>
                <a href="<?=APP_ROOT?>/posts/delete/<?= $post['id'] ?>"><i>Delete</i></a>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</main>

