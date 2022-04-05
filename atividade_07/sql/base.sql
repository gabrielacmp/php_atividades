/*
icons       |  showcases    |  testimonials  |  medias  |
image       |  image        |  image         |  icon    | 
title       |  title        |  name          |          |
description |  description  |  message       |          |
---------------------------------------------------------
*/
create database if not exists proLP;

use proLP;

create table icons(
id int primary key auto_increment,
image varchar(255) not null,
title varchar(255) not null,
descript text not null);

create table showcases(
id int primary key auto_increment,
image varchar(255) not null,
title varchar(255) not null,
descript text not null);

create table testimonials(
id int primary key auto_increment,
image varchar(255) not null,
nome varchar(150) not null,
message text not null);

create table medias(
id int primary key auto_increment,
icon varchar(255) not null);

insert into icons (image,title,descript) values 
('window','Fully Responsive','This theme will look great on any device, no matter the size!'),
('layers','Bootstrap 5 Ready','Featuring the latest build of the new Bootstrap 5 framework!'),
('terminal','Easy to Use','Ready to use with your own content, or customize the source files!');

insert into showcases (image,title,descript) values 
('1','Fully Responsive Design','When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it is a phone, tablet, or desktop the page will behave responsively!'),
('2','Updated For Bootstrap 5','Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!'),
('3','Easy to Use & Customize','Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!');

insert into testimonials (image,nome,message) values 
('1','Margaret E.','"This is fantastic! Thanks so much guys!"'),
('2','Fred S.','"Bootstrap is amazing. I have been using it to create lots of super nice landing pages."'),
('3','Sarah W.','"Thanks so much for making these free resources available to us!"');

insert into medias (icon) values 
('facebook'),
('twitter'),
('instagram');