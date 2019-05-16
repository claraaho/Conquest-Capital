<?php
/**
 * TODO: Prevent SQL injection
 * TODO: Hide DB credentials in config/db.php
 * TODO: More informative error reporting
 * TODO: Optimize calls so we don't make so many
 */
class Leaderboard 
{
  private function dbLink()
  {
    $link = new mysqli("", "imagkvjl_pouria", "bionicaL12!", "imagkvjl_test_iugo");

    return $link;
  }
  
  /**
   * Create a transaction and record it in the
   * database from the data posted
   * 
   */
  public function create() 
  {
    // store posted data
    $scoreData['UserId']          =  $_POST['UserId'];
    $scoreData['LeaderboardId']   =  $_POST['LeaderboardId'];
    $scoreData['Score']           =  $_POST['Score'];
    
    $dbScore = $this->getScore($scoreData['UserId'], $scoreData['LeaderboardId']);
    
    // if score is higher than current
    if($scoreData["Score"] > $dbScore)
    {
      $highScore = $scoreData["Score"];
      
      // check if exists
      $existingQuery = "SELECT * FROM leaderboards WHERE userId = " . $scoreData['UserId'];
      $result = $this->dbLink()->query($existingQuery);

      // if the user has transactions
      if ($result->num_rows != 0) 
      {
        // Update score into appropriate leaderboard for user
        $addScore = "UPDATE leaderboards SET score =". $scoreData['Score'] ." WHERE userId=". $scoreData['UserId'] ." AND leaderboardId =". $scoreData['LeaderboardId'];
      }
      else
      {
        // insert score into appropriate leaderboard
        $addScore = "INSERT INTO leaderboards values (". $scoreData['UserId'] .",". $scoreData['LeaderboardId'] .",". $scoreData['Score'] .")";

      }
      $this->dbLink()->query($addScore);
    }
    else 
    {
      $highScore = $dbScore;
    }
  

    $rank = $this->getRank($scoreData['UserId'], $scoreData['LeaderboardId'], $highScore);
    
    // create rank data array
    $rankData = [ "UserId"=> (int) $scoreData['UserId'],
                  "LeaderboardId"=> (int) $scoreData['LeaderboardId'],
                  "Score"=> (int) $highScore,
                  "Rank"=>(int) $rank];

    echo json_encode($rankData);
  }


  /**
   * Get the entries in the leaderboard in 
   * order from rank given a limit
   * 
   */
  public function get() 
  {
    // store post data
    $leaderBoardGet['UserId']          =  $_POST['UserId'];
    $leaderBoardGet['LeaderboardId']   =  $_POST['LeaderboardId'];
    $leaderBoardGet['Offset']          =  $_POST['Offset'];
    $leaderBoardGet['Limit']           =  $_POST['Limit'];

    // get all scores within specified range
    $getScores =   "SELECT * FROM leaderboards WHERE  ".
                    "leaderboardId =". $leaderBoardGet['LeaderboardId'].
                    " LIMIT ". $leaderBoardGet['Limit'] .
                    " OFFSET ". $leaderBoardGet['Offset'];
    $result = $this->dbLink()->query($getScores);
    
    // if high score entries within range
    if ($result->num_rows > 0)
    {
      // start building the output
      $leaderboardArray = [ "UserId"=> (int) $leaderBoardGet['UserId'],
                            "LeaderboardId"=> (int) $leaderBoardGet['LeaderboardId']];

      // get score                      
      $playerScore = $this->getScore($leaderBoardGet['UserId'], $leaderBoardGet['LeaderboardId']);

      // get rank
      $rank = $this->getRank($leaderBoardGet['UserId'], $leaderBoardGet['LeaderboardId'], $playerScore);

      // put score and rank into object 
      $leaderboardArray["Score"] = (int) $playerScore;
      $leaderboardArray["Rank"] = (int) $rank;

      $entries = [];
      $i = 0;
      // populate sub-array
      while($row = $result->fetch_assoc())
      {
        $rank = $this->getRank($row["userId"], $leaderBoardGet['LeaderboardId'], $row["score"]);
        $entries[$i] = ["UserId"=> $row["userId"], 
                        "Score" => $row["score"],
                        "Rank" => $rank];
        $i++;
      }
      $leaderboardArray["Entries"] = $entries;

      echo json_encode($leaderboardArray);
    }
  }

  /**
   * Get score of a specified user for a leaderboard
   * @param userId int
   * @param leaderboardId int
   *
   * @return int
   */
  private function getScore($userId, $leaderboardId) 
  {
    // Get player's score
    $checkScore =  "SELECT * FROM leaderboards WHERE leaderboardId =". $leaderboardId .
                  " AND userId = ". $userId;
    $scoreResult = $this->dbLink()->query($checkScore);
    if ($scoreResult->num_rows > 0)
    {
      // output data of each row
      while($row = $scoreResult->fetch_assoc())
      {
        return $row["score"];
      }
    }
  }
  
  /**
   * Get rank of a specified user for a leaderboard
   * @param userId int
   * @param leaderboardId int
   * @param score int
   *
   * @return int
   */
  public function getRank($userId, $leaderboardId, $score) 
  {
    // get rank of player's high score
    $checkRank =  "SELECT * FROM leaderboards WHERE leaderboardId =".$leaderboardId.
                  " AND score > ". $score.
                  " AND userId <> ". $userId;

    $result = $this->dbLink()->query($checkRank);

    // rank is equal to the number of people ahead of them plus 1
    $rank = $result->num_rows + 1;

    return $rank;
  }
  
}















