<?php
/*

* 📃ArkaDB is a simple Database created by me.
* 👦I'm Arkaneel Roy I'm 15 (2023) and I was feeling lazy to use SQL so I created it.
* ✨It supports basic functions like Create Read Update Delete.
* 🎉It's Best for Creating LMS and CMS etc.
* ❤️Please Support me and my hardwork by adding a star to this repo and sharing it to twitter.
* 🌟Made with 💞 and PHP 🐘 by Arkaneel Roy.

*/
class ArkaDB
{
  private $dataFile;
  private $dataFolder;

    //Initializing the constructor.
  public function __construct($dataFile, $dataFolder) {
    $this->dataFolder = $dataFolder;

    //Adding the .json extension.
    if (!preg_match('/\.json$/', $dataFile)) {
      $dataFile .= '.json';
    }

    $this->dataFile = $dataFolder . '/' . $dataFile;

    // Checking if the data folder exists.
    if (!is_dir($dataFolder)) {
      mkdir($dataFolder, 0777, true);
    }

    // Checking if the data file exists.
    if (!file_exists($this->dataFile)) {
    // Initializing an new JSON file.
      file_put_contents($this->dataFile, json_encode([]));
    }
  }

  //Generating an unique ID.
  private function generateUniqueId() {
    return uniqid();
  }

  //Insert Function to insert data.
  public function insert($data) {
    $id = $this->generateUniqueId();

    $existingData = json_decode(file_get_contents($this->dataFile), true);

    $existingData[$id] = $data;

    file_put_contents($this->dataFile, json_encode($existingData));

    return $id;
  }

  //Get Function to get individual data.
  public function get($id) {
    $existingData = json_decode(file_get_contents($this->dataFile), true);

    if (isset($existingData[$id])) {
      return $existingData[$id];
    }

    return null;
  }

  // Function to get all the data.
  public function getAll() {
    // Read the data from the file
    $existingData = json_decode(file_get_contents($this->dataFile), true);

    return $existingData;
  }

  //Generating an unique key for file.
  public function getFileId() {
    return md5_file($this->dataFile);
  }

  //Function to delete data.
  public function delete($id) {
    $existingData = json_decode(file_get_contents($this->dataFile), true);

    if (isset($existingData[$id])) {
      unset($existingData[$id]);

      file_put_contents($this->dataFile, json_encode($existingData));

      return true;
    }
    return false;
  }
}
?>