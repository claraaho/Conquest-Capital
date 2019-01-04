<?php

class Route 
{

  /* 
   * Array of possible URIs  
   */
  private $_uri = [];

  /* 
   * Array of methods  
   */
  private $_method = [];

  
  /* Builds a collection of internal URLs to look for
   * 
   * @param type $uri
   */
  public function add($uri, $method = null)
  {
    // We don't want to deal with slashes
    $this->_uri[] = trim($uri, '/');

    // Assign the route with a method
    if ($method != null)
    {
      $this->_method[] = $method;
    }
  }

  /* Submit the current route 
   * 
   * @param type $uri
   */
  public function submit()
  {
    // Check if the URI is set
    $uriGet = isset($_GET['uri']) ?   $_GET['uri'] : '/';

    // Cycle through available URIs for the API
    foreach ($this->_uri as $uriKey => $uriValue)
    {
      // if the requested URI matches with a set URI
      if (preg_match("#^$uriValue$#", $uriGet))
      {
        // if the method is a string
        if (is_string($this->_method[$uriKey])) 
        {
          // Get the controller call
          $useClass = $this->_method[$uriKey];

          // split controller call in case it has a method to run from the class
          $partsOfControl = explode("@", $useClass);

          // if there's a method to run
          if(count($partsOfControl) > 1) 
          {
            // Create instance of the class
            $class = new $partsOfControl[0]();

            // isolate the method of the class casted as a string
            $function = (string) $partsOfControl[1];
            
            // run the class' method
            $class->$function();

          } 
          else 
          {
            // Create an instance of the class
            $class = new $useClass();
          }
        }
        else
        {
          // run the anonymous function
          call_user_func($this->_method[$uriKey]);
        }
      }
    }
  }

}