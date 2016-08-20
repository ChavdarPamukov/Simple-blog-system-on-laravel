USE blog;

INSERT INTO users (username, role, password_hash, full_name) VALUES ('admin', 'admin', '$2y$10$QlKthcuYhn.XP/gy5A/OZeQdOzIznqxqOf/qBrSAnGpoW4labIL0W', null);
INSERT INTO users (username, password_hash, full_name) VALUES ('test', '$2y$10$I5y7X1ZilitEZYOztOI5SuA2rBeRJUj/ZhlgmSZK32LPqaqh3Gy3q', 'Test Name');

INSERT INTO posts (title, content, date, tag, user_id) VALUES ('Test title 1', '<p>Test, content 1</p>', '2015-11-22 11:57:40', 'aaa1', 1);
INSERT INTO posts (title, content, date, tag, user_id) VALUES ('Test title 1.1', '<p>Test, content 1.1</p>', '2015-09-22 11:57:40', 'aaa1', 1);
INSERT INTO posts (title, content, date, tag, user_id) VALUES ('Test title 2', '<p>Test, content 2</p>', '2016-05-22 10:13:37', 'aaa2', 2);
