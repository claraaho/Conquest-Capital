<?php
/**
 * TODO: Prevent SQL injection
 * TODO: Hide DB credentials in config/db.php
 * TODO: More informative error reporting
 * TODO: Optimize calls so we don't make so many
 */
class User 
{
  private function dbLink()
  {
    $link = new mysqli("", "imagkvjl_pouria", "bionicaL12!", "imagkvjl_test_iugo");

    return $link;
  }
  
  /**
   * Create a user and record it's data in the
   * database from the post information
   * 
   */
  public function create() 
  {

    // store posted data
    $userData['UserId']          =  $_POST['UserId'];
    // Data could be empty
    if(isset($_POST['Data']))
      $userData['Data']          =  json_decode($_POST['Data']);

    $getUserData =  "SELECT data FROM userData WHERE userId = ". $userData['UserId'];

    //if user_id exists
    $dataResult = $this->dbLink()->query($getUserData);
    if ($dataResult->num_rows > 0)
    {
      // output data of row
      if($row = $dataResult->fetch_assoc())
      {
        $data = $row["data"];
      }
      // decode json entry to php array
      $arrayData = json_decode($data, true);

      // if there's data to push
      if(isset($_POST['Data'])) 
      {
        // push in new array data
        foreach($userData['Data'] as $key => $value)
        {

          // update that field
          $arrayData[$key] = $value;
        }
      }
      

      // Update score into appropriate leaderboard for user
      $addUser = "UPDATE userData SET data ='". json_encode($arrayData) ."' WHERE userId=". $userData['UserId'];
      $this->dbLink()->query($addUser);
      echo json_encode(["Success"=>true]);

    }
    else
    { 
      // insert score into appropriate leaderboard
      $addUser = "INSERT INTO userData values (". $userData['UserId'] .",'". json_encode($userData['Data'])."')";

      $this->dbLink()->query($addUser);
      echo json_encode(["Success"=>true]);
    }
  }

  /**
   * Create a user and record it's data in the
   * database from the post information
   * 
   */
  public function loadData() 
  {
    // store posted data
    $userData['UserId']          =  $_POST['UserId'];

    $getUserData =  "SELECT data FROM userData WHERE userId = ". $userData['UserId'];

    $result = $this->dbLink()->query($getUserData);

    // if there are results
    if ($result->num_rows > 0)
    {
      // output data of each row
      if($row = $result->fetch_assoc())
      {
        echo $row['data'];
      }
    }
    else
    {
      echo '{}';
    }
  }

}




















