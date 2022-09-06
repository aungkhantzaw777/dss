

## About project
Back End Rest api for blog

## setup 
create a database
```
composer install
```
```
php artisan migrate
```
for linux user and mac
```
cp .env .env.example
```
for windows user
```
copy .env.example .env
```
```
php artisan key:generate
```
edit .env file
```
DB_DATABASE={databasename}
DB_USERNAME={username}
DB_PASSWORD={password}
```
now migrate database
```
php artisan migrate
```


# REST Api for this project
### Register User
```
POST http://{yourdomain}/api/register HTTP/1.1
content-type: application/json
Accept: application/json

{
    "name": "testUser1",
    "email": "testUser@gmail.com",
    "password": "password"
}
```
### Login User
```
POST http://{yourdomain}/api/login HTTP/1.1
content-type: application/json
Accept: application/json

{
    "email": "aung@gmail.com",
    "password": "password"
}
```
This request will response Token 

### Create New Post
```
POST http://{yourdomain}/api/post HTTP/1.1
content-type: application/json
Accept: application/json
Authorization: Bearer xxx


{
    "title" : "lorem",
    "body" : "lorem ipsum sit"
}
```
### update post

```
PATCH http://{yourdomain}/api/post/update/1 HTTP/1.1
content-type: application/json
Accept: application/json
Authorization: Bearer xxx

{
    "title" : "lorem 222",
    "body" : "lorem ipsum sit"
}

```

### delete a post

```
DELETE http://{yourdoamin}/api/post/delete/1 HTTP/1.1
content-type: application/json
Accept: application/json
Authorization: Bearer xxx

{
    "title" : "lorem 222",
    "body" : "lorem ipsum sit"
}
```
### get User for Auth User
```
GET http://{yourdomain}/api/getPost HTTP/1.1
content-type: application/json
Authorization: Bearer xxx
Accept: application/json

```
### Comment a post
```
POST http://{yourdomain}/api/comment HTTP/1.1
content-type: application/json
Accept: application/json
Authorization: Bearer xxx

{
    "body" : "lorem ipsum sit",
    "post_id" : {postID}
}
```
### get all post
```
GET http://{yourdomain}/api/posts HTTP/1.1
content-type: application/json
Accept: application/json
```

### show a post

```
GET http://{yourdomain}/api/post/1 HTTP/1.1
content-type: application/json
Accept: application/json
```

### reply a comment
POST http://{yourdomain}/api/reply HTTP/1.1
content-type: application/json
Accept: application/json
Authorization: Bearer xxx

{
    "body" : "this is reply for comment",
    "comment_id" : {commentId}
}




