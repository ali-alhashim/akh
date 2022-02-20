<?php
// create table hold navbar data like size , style , taps title
$sql = "
create table if not exists `navbar` (

    `id` int(11) not null auto_increment,
    `title' varchar(45) default null,
    `page_url` varchar(1000) default null,
    `order` int(11) default null,
    `status` TINYINT(1) default null,
     primary key (`id)

    ) engine=InnoDB default charset=utf8mb4;
";
?>