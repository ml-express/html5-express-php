<?php

namespace ClacyBuilders\Html5\Tests;

require_once 'vendor/clacy-builders/xml/allIncl.php';
require_once 'vendor/clacy-builders/xml/tests/Express_TestCase.php';
require_once 'src/Html5.php';

use ClacyBuilders\Tests\Express_TestCase;
use ClacyBuilders\Html5\Html5;

class Html5SectionsTest extends Express_TestCase
{
	public function provider()
	{
		return array(
				array(Html5::createSub()->body(), '<body>'),
				array(Html5::createSub()->article(), '<article>'),
				array(Html5::createSub()->section(), '<section>'),
				array(Html5::createSub()->nav(), '<nav>'),
				array(Html5::createSub()->aside(), '<aside>'),
				array(Html5::createSub()->h1('content'), '<h1>content</h1>'),
				array(Html5::createSub()->h1(), '<h1></h1>'),
				array(Html5::createSub()->h2('content'), '<h2>content</h2>'),
				array(Html5::createSub()->h2(), '<h2></h2>'),
				array(Html5::createSub()->h3('content'), '<h3>content</h3>'),
				array(Html5::createSub()->h3(), '<h3></h3>'),
				array(Html5::createSub()->h4('content'), '<h4>content</h4>'),
				array(Html5::createSub()->h4(), '<h4></h4>'),
				array(Html5::createSub()->h5('content'), '<h5>content</h5>'),
				array(Html5::createSub()->h5(), '<h5></h5>'),
				array(Html5::createSub()->h6('content'), '<h6>content</h6>'),
				array(Html5::createSub()->h6(), '<h6></h6>'),
				array(Html5::createSub()->hgroup(), '<hgroup>'),
				array(Html5::createSub()->header(), '<header>'),
				array(Html5::createSub()->footer(), '<footer>'),
				array(Html5::createSub()->address(), '<address>'),

		);
	}
}