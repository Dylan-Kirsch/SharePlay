CREATE TABLE IF NOT EXISTS jeux
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    photo_default VARCHAR(255) NOT NULL

);

INSERT INTO `jeux` (`id`, `titre`, `photo_default`) VALUES
(1, 'Atomic Heart' ,'atomic-heart.jpg'),
(2, 'Battlefield 2042' ,'battlefield-2042.jpeg'),
(3, 'Dead island 2' ,'dead-island-2.jpg'),
(4, 'Demon Souls' ,'demon-souls-ps5.jpg'),
(5, 'Destiny 2' ,'destiny-2-lightfall.jpeg'),
(6, 'Elden Ring' ,'elden-ring.jpg'),
(7, 'Final Fantasy 7' ,'final-fantasy-7.jpg'),
(8, 'Ghost of Tsushima' ,'ghost-of-tsushima.jpg'),
(9, 'Hogwarts Legacy' ,'hogwarts-legacy.png'),
(10, 'Star wars Battlefront 2' ,'star-wars-battlefront-2.jpg'),
(11, 'Star wars jedi survivor' ,'star-wars-jedi-survivor.jpg'),
(12, 'Sun Wukong' ,'sun-wukong.png'),
(13, 'Tchia' ,'tchia-ps5.png');