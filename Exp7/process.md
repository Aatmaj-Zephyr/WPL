Steps to connect mysql and php
1) XAMPP start sql  ![image](https://user-images.githubusercontent.com/83284294/231665013-a2c9cb86-7630-408b-9e99-1d8040ce46e4.png)
2) Make DB connection
```php 
$db = new mysqli("localhost","root","") or die("What is a server?");
```
3) Make DB
```php

$query = "Create Database emailTest";
$db->query($query);
```
![image](https://user-images.githubusercontent.com/83284294/231666170-f737cd23-efca-46d2-9808-edb023e2ea43.png)

4) Make Tables, and insert values
Dont forgt ' colons
![image](https://user-images.githubusercontent.com/83284294/231667384-1efb5a9e-93fc-4918-868d-348eff7e34b0.png)
![image](https://user-images.githubusercontent.com/83284294/231667421-997e4198-9baf-4cae-a6d7-0791aa9ede5f.png)
![image](https://user-images.githubusercontent.com/83284294/231667510-32255dd3-c503-497d-b15a-456eec2a1fd3.png)

5) Retieve data using while loop

![image](https://user-images.githubusercontent.com/83284294/231668365-f1a2e5af-9df7-42a0-a2be-cc73a8a2d623.png)

6) CLose the database connection

```php
$db->close();

```
