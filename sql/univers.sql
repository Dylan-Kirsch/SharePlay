CREATE TABLE IF NOT EXISTS univers
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    photo_default VARCHAR(255) NOT NULL

);

INSERT INTO `univers` (`id`, `titre`, `photo_default`) VALUES
(1, 'Action' ,'jeux-action.jpg'),
(2, 'Aventure' ,'jeux-aventure.png'),
(3, 'Course' ,'jeux-course.jpg'),
(4, 'Combat' ,'jeux-combat.jpg'),
(5, 'Jeux indée' ,'jeux-indee.jpg'),
(6, 'Survivol Horror' ,'jeux-horror.jpg'),
(7, 'Jeux de rôle' ,'jeux-de-role.png');