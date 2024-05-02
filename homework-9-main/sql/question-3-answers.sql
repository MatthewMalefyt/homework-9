-- select by id 1:
SELECT * FROM `posts` WHERE id=1;

-- select all posts where title = includes "title 2":
SELECT * FROM `posts`
WHERE title LIKE '%title 2%'

-- select all posts and order by the title column alphabetically:
SELECT id, title, description
  FROM `posts`
  ORDER BY title ASC;

-- insert 3 new posts
INSERT INTO `posts` VALUES (3, "test post title 3", "test post description 3");
INSERT INTO `posts` VALUES (4, "test post title 4", "test post description 4");
INSERT INTO `posts` VALUES (5, "test post title 5", "test post description 5");

-- update posts where id = 1, set the title to "new title"
ALTER TABLE `posts`
RENAME TO `Updated Post`;


-- delete post where id = 2
DELETE FROM `posts` WHERE id=2;
