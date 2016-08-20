<?php

class PostsModel extends BaseModel
{
    public function getAll() : array
    {
        $statement = self::$db->query("SELECT * FROM posts ORDER BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare("SELECT * FROM posts WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function create(string $title, string $content, string $tag, int $user_id) : bool
    {
        $statement = self::$db->prepare(
            "INSERT INTO posts(title, content, tags, user_id) VALUES(?, ?, ?, ?)");
        $statement->bind_param("sssi", $title, $content, $tag, $user_id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function edit(string $id, string $title, string $content,
                         string $date, string $tag, int $user_id) : bool
    {
        $statement = self::$db->prepare(
            "UPDATE posts SET title = ?, content = ?, date = ?, tag = ?, user_id = ? WHERE id = ?");
        $statement->bind_param("ssssii", $title, $content, $date, $tag, $user_id, $id);
        $statement->execute();
        return $statement->affected_rows >= 0;
    }

    public function delete(int $id) : bool
    {
        $statement = self::$db->prepare(
            "DELETE FROM posts WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}