<?php
/**
 * class.mosheTest.php
 *  
 */

  class mosheTestClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'mosheTest' . PATH_SEPARATOR .
        get_include_path()
      );
    }

    function setup()
    {
    }

    function getFieldsForPageSetup()
    {
    }

    function updateFieldsForPageSetup()
    {
    }

  }
?>