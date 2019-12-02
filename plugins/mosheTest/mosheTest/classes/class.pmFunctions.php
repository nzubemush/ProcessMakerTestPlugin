<?php
/**
 * class.mosheTest.pmFunctions.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 * *
 */

////////////////////////////////////////////////////
// mosheTest PM Functions
//
// Copyright (C) 2007 COLOSA
//
// License: LGPL, see LICENSE
////////////////////////////////////////////////////

/**
 * Moshe Test Functions
 * @class mosheTest
 *
 * @name Moshe Test Functions
 * @icon /plugin/mosheTest/Audit.png
 * @className class.mosheTest.pmFunctions.php
 */

function mosheTest_getMyCurrentDate()
{
	return G::CurDate('Y-m-d');
}

function mosheTest_getMyCurrentTime()
{
	return G::CurDate('H:i:s');
}

/**
 * Moshe Test Functions
 * @class mosheTest
 *
 * @name Moshe Test Functions
 * @icon /plugin/mosheTest/Audit.png
 * @className class.mosheTest.pmFunctions.php
 */

function mosheTest_sayHello($name)
{
	return "Hello" . $name;
}

