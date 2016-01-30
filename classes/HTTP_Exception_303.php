<?php namespace Kohana\Core;

class HTTP_Exception_303 extends \HTTP_Exception_Redirect {

	/**
	 * @var   integer    HTTP 303 See Other
	 */
	protected $_code = 303;

}
