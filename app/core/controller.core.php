<?php namespace greenEye\Framework;

/**
 * Core Controller Class
 *
 *
 * @package				greenEye
 * @author				Krishna Gujjjar <krishnagujjjar@gmail.com>
 *
 * @Date:				2019-03-08 00:50:58
 * @Last Modified by: krishna_gujjjar
 * @Last Modified time: 2019-03-08 00:59:17
 */


/** Parent Core Controller's Class
 *
 * Sends and Receives Data from the "Model" and Passes to the "View"
 * (Controls & Execute the Transfer of Data)
 *
 * @param string $action  Action Container
 * @param string $request Request Container
 */
abstract class Controller
{
	/** Action Container
	 * @var string $action */
	protected $action;

	/** URL's Request Container
	 * @var array $request */
	protected $request;


	/**
	 * Core Contoller's Constuct Function
	 *
	 * Get URL Container's Value & Set in Variables
	 *
	 * @param string $action Get URL's Action
	 * @param array $request Get URL's Container's Value
	 *
	 * @return void Set param's Value in Containers
	 */
	public function __construct(string $action, array $request)
	{
		$this->action = $action;
		$this->request = $request;
	}


	/** Execute Action Function
	 *
	 * Get Page the Page of Class & Call Requested Method
	 *
	 * @return null Called Contollers Class's Requested Method
	 */
	public function executeAction()
	{
		return $this->{$this->action}();
	}


	/** Include View
	 *
	 * Include Requested View's File
	 *
	 * @param array $viewModel
	 * @param bool $fullView eg. true | false
	 *
	 * @return void */
	protected function returnView($viewModel, bool $fullView)
	{
		$view = strtolower(str_replace('Bloggy/', '', str_replace('Controllers', 'Views', str_replace(BACKSLASH, DIRECTORY_SEPARATOR, get_class($this)))) . DIRECTORY_SEPARATOR .  $this->action . PHP_EXTENSION);
		if ($fullView) {
			require_once 'views/main.php';
		} else {
			require_once $view;
		}
	}
}
