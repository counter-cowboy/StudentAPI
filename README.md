<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### *Get all students list*
GET /api/students

### *Get student information*
GET /api/students/{student}

### *Create student*
POST /api/students

Examle
{
"name":"Nicole Koch",
"email":"nicole@example.net" 
}

Email must be unique.

### *Update student (name, group)*
PATCH /api/students/{student}

Example
{
"name" : "Nicole Koch",
"group_id" : 5
}

### *Delete student*
DELETE /api/students/{student}

### *Get all groups list*
GET /api/groups

### *Get group information (name, students)*
GET /api/groups/{group}/students

### *Get lections list for group*
GET /api/groups/{group}/lections

### *Create lection list for group*
POST /api/groups/{group}/lections

Example
{
"lections" : [1, 6, 3, 8, 5]
}

### *Update lection list for group*
PATCH /api/groups/{group}/lections

Example
{
"lections" : [1, 6, 3, 9, 7]
}

### *Create group*
POST /api/groups

Example
{
"name" : "Avengers"
}


### *Update group name*
PATCH /api/groups/{group}/edit

Example 
{
"name" : "Batman group"
}

### *Delete group*
DELETE /api/groups/{group}

### *Get all lections list*
GET /api/lections

### *Get lection information (title, description, groups, students)*
GET /api/lections/{lection}

### *Create lection*
POST /api/lections

Example
{
"title" : "Biology lection",
"description" : "Lection about origin of species"
}

### *Update lection (title, description)*
PATCH /api/lections/{lection}

Example
{
"title" : "Phisics lection",
"description" : "Lection about rocket science"
}

### *Delete lection*
DELETE /api/lections/{lection}

<hr>

### *Testing tools:*
Opera browser

POSTMAN
