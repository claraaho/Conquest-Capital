<?php

/**
 * TODO: Prevent SQL injection
 * TODO: Hide DB credentials in config/db.php
 * TODO: More informative error reporting
 */
class Transaction 
{
  private function dbLink()
  {
    $link = new mysqli("", "imagkvjl_pouria", "***REMOVED***", "imagkvjl_test_iugo");

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
    $transaction['TransactionId']   =  $_POST['TransactionId'];
    $transaction['UserId']          =  $_POST['UserId'];
    $transaction['CurrencyAmount']  =  $_POST['CurrencyAmount'];
    $transaction['Verifier']        =  $_POST['Verifier'];

    // secret key provided in the specs
    $secretKey = 'NwvprhfBkGuPJnjJp77UPJWJUpgC7mLz';

    // concatenate the string in order to verify 
    $verifierBefore = $secretKey . $transaction['TransactionId'] . $transaction['UserId'] . $transaction['CurrencyAmount'];
    
    // encrypt the concatenated string
    $verifierAfter = sha1($verifierBefore);
        
    // find existing transaction in database
    $existingQuery = "SELECT * FROM transactions WHERE transactionId = " . $transaction['TransactionId'];
    $result = $this->dbLink()->query($existingQuery);
    
    // if the transactionId is unique
    if ($result->num_rows == 0)
    {
      // if the verifier matches up
      if ($transaction['Verifier'] == $verifierAfter) //$verifierAfter)
      {
        // Add the new transaction to the database
        $addTransaction = "INSERT INTO transactions values (". $transaction['TransactionId'] .", ". $transaction['UserId'] .", ". $transaction['CurrencyAmount'] .", '". $transaction['Verifier'] ."')";
        
        // Check to see if the query went through
        if($this->dbLink()->query($addTransaction))
        {
          echo json_encode(["Success"=>true]);
          return;
        }
      }
    }
    // in case one of the conditions didn't pass
    echo json_encode(["Success"=>false]);
  }

  /**
   * Get information of the posted user's purchase
   * 
   */
  public function stats() 
  {
    // store userId data
    $userId = $_POST['UserId'];

    // check for all data related to specified user
    $existingQuery = "SELECT * FROM transactions WHERE userId = " . $userId;
    $result = $this->dbLink()->query($existingQuery);

    // if the user has transactions
    if ($result->num_rows != 0) 
    {
      $transactionCount = 0;
      $currencySum = 0;
      while($row = $result->fetch_assoc())
      {
        $transactionCount++;
        $currencySum += $row['currencyAmount'];
      }

      // combine data
      $userDetails = ["UserId"=> (int) $userId,
                      "TransactionCount"=> (int) $transactionCount,
                      "CurrencySum"=> (int) $currencySum];
     
      echo json_encode($userDetails);
    }
    else
    {
      echo json_encode(["Message"=> 'User does not have transactions']);
    }
  }

  
}














