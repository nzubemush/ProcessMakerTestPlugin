
Ext.namespace("mosheTest");mosheTest.application3={init:function(){var pnlCenter=new Ext.Panel({id:"pnlCenter",region:"center",border:false,title:"Application3",html:"&nbsp;Content3"});var pnlMain=new Ext.Panel({id:"pnlMain",layout:"border",height:150,items:[pnlCenter],renderTo:"divMain"});}}
Ext.onReady(mosheTest.application3.init,mosheTest.application3);