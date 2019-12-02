<?php

class mosheTestPlugin extends PMPlugin
{
  private $dashletsUids;
  
  public function mosheTestPlugin($sNamespace, $sFilename = null)
  {
    $res = parent::PMPlugin($sNamespace, $sFilename);
    $this->sFriendlyName = "Moshe Test Plugin";
    $this->sDescription  = "My test plugin for Mr Dipo homework";
    $this->sPluginFolder = "mosheTest";
    $this->sSetupPage    = "setup";
    $this->iVersion      = "1.0.0";
    //$this->iPMVersion    = 2425;
    $this->aWorkspaces   = null;
    //$this->aWorkspaces = array("os");
    
    
    $this->dashletsUids = array(
      array("DAS_UID" => "4015797735de527bf4a68d9046888522",
            "DAS_CLASS" => "dashletmosheTest",
            "DAS_TITLE" => "Dashlet mosheTest",
            "DAS_DESCRIPTION" => "Dashlet mosheTest",
            "DAS_VERSION" => "1.0",
            "DAS_CREATE_DATE" => date("Y-m-d"),
            "DAS_UPDATE_DATE" => date("Y-m-d"))
    );
    
    
    return $res;
  }

  public function setup()
  {
    $this->setCompanyLogo("/plugin/mosheTest/mosheTest.png");
    $this->registerMenu("processmaker", "menumosheTest.php");
    $this->registerMenu("cases", "menuCasesmosheTest.php");
    $this->registerStep("4310116865de527bc6e5cb9031453168", "stepmosheTestApplication", "mosheTest external step");
    $this->registerPmFunction();
    $this->redirectLogin("PROCESSMAKER_MOSHETEST", "users/users_List");
    
    $this->registerDashlets();
  }

  public function install()
  {
    $RBAC = RBAC::getSingleton() ;
    $RBAC->initRBAC();
    $roleData = array();
    $roleData["ROL_UID"] = G::GenerateUniqueId();
    $roleData["ROL_PARENT"] = "";
    $roleData["ROL_SYSTEM"] = "00000000000000000000000000000002";
    $roleData["ROL_CODE"] = "PROCESSMAKER_MOSHETEST";
    $roleData["ROL_CREATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_UPDATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_STATUS"] = "1";
    $RBAC->createRole($roleData);
    $RBAC->createPermision("PM_MOSHETEST");
  }
  
  public function enable()
  {
    $this->dashletInsert();
  }

  public function disable()
  {
    $this->dashletDelete();
  }
  
  public function dashletInsert()
  {

    
    $connection = Propel::getConnection(DashletPeer::DATABASE_NAME);
    
    foreach ($this->dashletsUids as $dashletData) {
      $dashlet = new Dashlet();
      
      if (is_null($dashlet->load($dashletData["DAS_UID"]))) {
        $dashlet->fromArray($dashletData, BasePeer::TYPE_FIELDNAME);
        $connection->begin();
        $dashlet->save();
        $connection->commit();
      }
    }
  }
  
  public function dashletDelete()
  {

    
    foreach ($this->dashletsUids as $dashletData) {
      $criteria = new Criteria("workflow");
      $criteria->add(DashletPeer::DAS_UID, $dashletData["DAS_UID"]);
      DashletPeer::doDelete($criteria);
    }
  }
}

$oPluginRegistry = PMPluginRegistry::getSingleton();
$oPluginRegistry->registerPlugin("mosheTest", __FILE__);
