CREATE DATABASE IF NOT EXISTS blog;
CREATE USER IF NOT EXISTS 'backend'@'localhost' IDENTIFIED  BY 'password';


CREATE TABLE IF NOT EXISTS blog_posts(
  id INT AUTO_INCREMENT PRIMARY KEY,
  date DATETIME NOT NULL,
  title TEXT NOT NULL,
  blog_text TEXT NOT NULL
);

GRANT SELECT ON blog.blog_posts to backend;


INSERT INTO blog_posts (date, title, blog_text) VALUES
  (NOW(), 'Title 1', 'This is my first blog post.'),
  (NOW(), 'Title 2', 'This is my second blog post.'),
  (NOW(), 'Title 3', 'This is my third blog post.');