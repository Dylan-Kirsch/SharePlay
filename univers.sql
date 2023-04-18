CREATE TABLE IF NOT EXISTS univers
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    photo_default VARCHAR(255) NOT NULL

);

INSERT INTO `jeux` (`id`, `titre`, `photo_default`) VALUES
(1, 'Action' ,'atomic-heart.jpg'),
(2, 'Action / Avebture' ,'battlefield-2042.jpeg'),
(3, 'Course' ,'dead-island-2.jpg'),
(4, 'Combat' ,'demon-souls-ps5.jpg'),
(5, 'Jeux indée' ,'destiny-2-lightfall.jpeg'),
(6, 'Survivol Horror' ,'elden-ring.jpg'),
(7, 'Jeux de rôle' ,'final-fantasy-7.jpg'),