#  ArkaDB

A simple `CRUD` Database made with ❤️ and PHP.

ArkaDB is a simple CRUD like database implemented in PHP without any third-party dependencies that store data in JSON files.

---

## Motivation

I'm Arkaneel Roy I'm 15 (2023) and I was feeling lazy to use `SQL` so I created it.

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

- Just download the source code as ZIP and add it into your project.

[Download](https://github.com/Arkaneel/ArkaDB/archive/refs/tags/1.0.0.zip)

```PHP
include 'ArkaDB/ArkaDB.php';
```

---

## Initialization 

- Initialization :
```PHP 
$database = ArkaDB('Name of Your Database','Name of Your Database Folder');
```
- For Example : 
```PHP 
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

```PHP
// Create a new instance of ArkaDB
$database = new ArkaDB('data', 'data_folder');

// Data to be inserted
$data = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'age' => 25
];

// Insert the data into the database
$id = $database->insert($data);

// Output the generated unique ID
echo "Inserted data with ID: " . $id;

```

### 2.Get( )
```PHP
// Create a new instance of ArkaDB
$database = new ArkaDB('data', 'data_folder');

// ID of the data to retrieve
$id = 'static-key';

// Get the data from the database
$data = $database->get($id);

// Output the retrieved data
if ($data) {
  echo "Retrieved data:\n";
  print_r($data);
} else {
  echo "Data not found.";
}

```

### 3.GetAll( )

```PHP 
// Create a new instance of ArkaDB
$database = new ArkaDB('data', 'data_folder');

// Get all the data from the database
$allData = $database->getAll();

// Output all the data
echo "All data:\n";
print_r($allData);

```

### 4.update( )

```PHP
// Create an instance of the ArkaDB class
$arkaDB = new ArkaDB('data', 'data_folder');

// Example data to update
$id = 'static-key'; 
$newData = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'age' => 30
];

// Update the data
$result = $arkaDB->update($id, $newData);

// Check if the update was successful
if ($result) {
  echo "Data updated successfully.";
} else {
  echo "Failed to update data.";
}

```
### 5.delete( )

```PHP
// Create a new instance of ArkaDB
$database = new ArkaDB('data', 'data_folder');

// ID of the data to delete
$id = 'static-key';

// Delete the data from the database
$deleted = $database->delete($id);

// Output the result of deletion
if ($deleted) {
  echo "Data with ID $id deleted successfully.";
} else {
  echo "Data not found.";
}

```

--- 
