#  ArkaDB

A simple `CRUD` Database made with ❤️ and PHP.

ArkaDB is a simple CRUD like database implemented in PHP without any third-party dependencies that store data in JSON files.

It's not comparable with databases like **SQL** but you can compare it with databases like **MongoDB**.



---

## Motivation

I'm Arkaneel Roy I'm 15 (2023) and I created it as a hobby project but with the help contribution of you all I wanna expand this project.

---

## Features

- Extremely Lightweight {3kb} 
- Supports Basics Like `Create` `Read` `Update` and `Delete`.
- Embedable DB.
- Stores Data as Object.
- Generates a unique id for each object named as `Static Key`.
- Extensible with PHP. 
- Highly Suitable for CMS and LMS etc.

--- 

## Installation 

- Download the latest from the releases and add it to your project.

- [Download](https://github.com/Arkaneel/ArkaDB/releases)

- Alternatively you can clone this repo.

```php
git clone https://github.com/Arkaneel/ArkaDB
```

Then include it as : 

```php
include 'ArkaDB/ArkaDB.php';
```

---

## Initialization 

- Initialization :

```php
$database = ArkaDB('Name of Your Database','Name of Your Database Folder');
```

- For Example : 

```php
$database = ArkaDB('database','db');
```

**This creates a database named database.json in the folder db**

---

## Supported Functions 

<table >
  <tr>
    <th>Function</th>
    <th>Usage</th> 
  </tr>
  <tr>
    <td>insert()</td>
    <td>Inserts Data.</td>
  </tr>
  <tr>
    <td>get()</td>
    <td>Gets Data through `Static Key`.</td>
  </tr>
  <tr>
    <td>getAll()</td>
    <td>Gets all the Data registered in the database.</td>
  </tr>
  <tr>
    <td>update()</td>
    <td>Updates Data registered in the database.</td>
  </tr>
    <tr>
    <td>delete()</td>
    <td>Deletes Data using `Static Key`.</td>
  </tr>
</table>

---

## Example Usages.

### 1.insert( )

```php
$database = new ArkaDB('data', 'data_folder');

$data = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'age' => 25
];

$id = $database->insert($data);


echo "Inserted data with ID: " . $id;

```

### 2.Get( )
```php
$database = new ArkaDB('data', 'data_folder');


$id = 'static-key';

$data = $database->get($id);


if ($data) {
  echo "Retrieved data:\n";
  print_r($data);
} else {
  echo "Data not found.";
}

```

### 3.GetAll( )

```php
$database = new ArkaDB('data', 'data_folder');


$allData = $database->getAll();


echo "All data:\n";
print_r($allData);

```

### 4.update( )

```php
$arkaDB = new ArkaDB('data', 'data_folder');


$id = 'static-key'; 
$newData = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'age' => 30
];


$result = $arkaDB->update($id, $newData);

if ($result) {
  echo "Data updated successfully.";
} else {
  echo "Failed to update data.";
}

```
### 5.delete( )

```php
$database = new ArkaDB('data', 'data_folder');


$id = 'static-key';


$deleted = $database->delete($id);


if ($deleted) {
  echo "Data with ID $id deleted successfully.";
} else {
  echo "Data not found.";
}

```

## If you like this then please share it to twitter:

- <a href="https://twitter.com/intent/tweet?text=Checkout%20this%20Database%20I%20found%20made%20by%20Arkaneel%20Roy%20with%20%F0%9F%92%9B%EF%B8%8F%20and%20%F0%9F%90%98%20https%3A%2F%2Farkaneel.github.io%2FArkaDB%2F" target="_blank">Share on Twitter</a>

--- 
  
