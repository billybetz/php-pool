<?php
$bdd = mysqli_connect("localhost", "s", "s", "");

mysqli_query($bdd, "CREATE DATABASE rush00;");

$bdd = mysqli_connect("localhost", "s", "s", "rush00");

mysqli_query($bdd, "CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `description` text NOT NULL,
  `categorie` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

mysqli_query($bdd, "INSERT INTO `articles` (`id`, `name`, `img`, `description`, `categorie`, `prix`) VALUES
(1, 't-shirt', 'http://www.laboutiqueofficielle.com/media/produit/img/3-2059_LGREYMEL_01_427x427.jpg', 'T-shirt homme gris', 't-shirt', 546),
(3, 't-shirt', 'http://t0.gstatic.com/images?q=tbn:ANd9GcR4EF5aYGO-q-yZhguJmPYarFMdNUGuuHZcKFEwBCFJ1Tn0CepQEQxYaEU', 't-shirt homme vert', 't-shirt', 450),
(4, 't-shirt', 'http://media.topman.com/wcsstore/TopMan/images/catalog/TM71T01MBLK_3col_F_1.jpg', 't-shirt homme noir', 't-shirt', 12),
(5, 't-shirt', 'http://illinoisarborist.org/wp-content/uploads/2014/02/t-shirt.jpg', 't-shirt homme blanc', 't-shirt', 32),
(6, 't-shirt', 'https://www.lamnia.com/images/sg-150-Shirts_and_T-Shirts.jpg', 't-shirt homme gris', 't-shirt', 41),
(7, 'pull', 'http://www.devred.com/media/catalog/product/cache/1/image/600x/9df78eab33525d08d6e5fb8d27136e95/2/1/2182494_09.jpg', 'pull homme bleu', 'pull', 111),
(8, 'pull', 'http://static.galerieslafayette.com/media/231/23151506/G_23151506_125_VFP_1.jpg', 'pull homme noir', 'pull', 540),
(9, 'pull', 'https://cdn.fashiola.fr/L213996946/Pulls-Gilets-homme-Nike-KO-block-pull-a-capuche-pour-homme-jaune-noir-xL717109-702.jpg', 'pull homme vert', 'pull', 213),
(11, 'pull', 'http://www.size-factory.com/img/p/2/2/1/5/0/22150.jpg', 'pull homme noir', 'pull', 333),
(12, 'chaussures', 'http://www.gqmagazine.fr/uploads/images/thumbs/201322/adidas___superstar_429_north_600x_white.jpg', 'adidas', 'chaussures', 452),
(13, 'chaussures', 'http://dam-static.rueducommerce.fr/medias/1bf979eea33a359da9a931c44bbf979d/p_500x500/10621-thickbox.jpg', 'nike ', 'chaussures', 233),
(14, 'chaussures', 'http://i2.cdscdn.com/pdt2/8/0/4/1/700x700/mp00696804/rw/nike-rosherun.jpg', 'nike', 'chaussures', 254),
(15, 'chaussures', 'http://www.eram.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/W/W/basket-adidas-blanche-homme-WWWERAM_10871390027_2.jpg', 'adidas', 'chaussures', 432),
(16, 'chaussures', 'http://www.ataporte.fr/pic/nike-cortez-cuir-homme-pas-cher-achat-nike-cortez-femme-basket-nike-cortez-homme-21544.jpg', 'nike', 'chaussures', 324),
(17, 'cravates', 'http://www.cotondoux.com/14253-thickbox/cravate-homme-orange.jpg', 'cravate orange', 'cravates', 21),
(21, 'cravates', 'http://www.devred.com/media/catalog/product/cache/1/image/1050x/040ec09b1e35df139433887a97daa66f/4/2/4233018_01.jpg', 'cravate motifs', 'cravates', 21),
(22, 'chapeaux', 'http://www.headict.com/img/products2/product/STE2618001-66,stetson,chapeau-homme-stetson.jpg', 'chapeau noir', 'chapeaux', 33),
(23, 'chapeaux', 'http://media.laredoute.com/products2/250by250/8/c/3/501030454_0_PR_1_500.jpg', 'chapeau beige', 'chapeaux', 124),
(24, 'chapeaux', 'http://chapeau.bon-clic-bon-genre.fr/photo/chapeau-homme-4709.jpg', 'chapeau motifs', 'chapeaux', 32),
(25, 'chapeaux', 'https://media.cdnws.com/_i/13282/4649/124/50/chapeau-chasse.jpeg', 'chapeau sombre', 'chapeaux', 23),
(26, 'chapeaux', 'http://www.chapellerie-traclet.com/36007-large/chapeau-panama-homero-ortega.jpg', 'chapeau blanc', 'chapeaux', 12),
(0, '', '', '', '', 0);");

mysqli_query($bdd, "CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'simple'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

mysqli_query($bdd, "INSERT INTO `users` (`id`, `login`, `passwd`, `email`, `level`) VALUES
(1, 'billy', 'billy', 'bbetz@student.42.fr', 'admin');");

mysqli_query($bdd, "ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);");

mysqli_query($bdd, "ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;");

?>
