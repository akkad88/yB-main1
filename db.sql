create table posts
(
    id         int auto_increment
        primary key,
    title      varchar(255)                       not null,
    content    text                               not null,
    created_at datetime default CURRENT_TIMESTAMP not null
)
    collate = utf8_unicode_ci;

create table comments
(
    id      int auto_increment
        primary key,
    post_id int          not null,
    content varchar(255) not null,
    constraint comments_posts_null_fk
        foreign key (post_id) references posts (id)
)
    collate = utf8_unicode_ci;

create table users
(
    id       int auto_increment
        primary key,
    username varchar(255) not null,
    password varchar(255) not null
)
    collate = utf8_unicode_ci;


