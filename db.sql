-- DROP database conference_site;
CREATE DATABASE IF NOT exists conference_site;
use conference_site;

CREATE TABLE IF NOT EXISTS `conferences` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `date` varchar(255) NOT NULL,
	`address_latitude` float NULL,
	`address_longitude` float NULL,
	`country` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

insert conferences values(NULL, 'World Conference on Psychology', '5.08.2022', NULL, NULL, 'Portugal');
insert conferences values(NULL, 'National Conference on Internet Of Things', '6.08.2022', 15.2380594, 74.0197559, 'India');
insert conferences values(NULL, 'International Conference on Global Sciences', '6.08.2022', NULL, NULL, 'Ethiopia');
insert conferences values(NULL, 'World Conference on Pollution Control', '8.08.2022', NULL, NULL, 'Cuba');