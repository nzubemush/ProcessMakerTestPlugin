<?php
  namespace Services\Api\TestPlugin;
  use Luracast\Restler\RestException;
  use ProcessMaker\Services\Api;
  use \ProcessMaker\Util;

require_once('classes/class.pmFunctions.php');

  /**
  * @protected
  */  
  class TestService extends Api
  {
  /**
  * @url GET /testservice/hello/:var
  */
  public function  hello($var)
  {
    return array("response"=>"hi ".$var);
  }

  /**
  * @url GET /testservice/getcustomerdetails/:customerId
  */
  public function  getCustomerDetails($customerId)
  {
    return testPlugin_getCustomerDetails($customerId);
  }
}  