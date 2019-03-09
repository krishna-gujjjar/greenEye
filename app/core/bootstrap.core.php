<?php namespace greenEye\Framework;

/**
 *
 * @package				greenEye
 * @author				Krishna Gujjjar <krishnagujjjar@gmail.com>
 *
 * @Date:				2019-03-08 00:50:58
 * @Last Modified by: krishna_gujjjar
 * @Last Modified time: 2019-03-08 00:57:14
 */


/** Bootstrap Class
 *
 * Get & Set URL's Transform Data & Check Requested Class, 	    Method Exists or not.
 *
 * @param string $controller Controller Container
 * @param string $action Action Container
 * @param string $request Request Container
*/
class Bootstrap
{
	/** Controller Container
	 *
	 * [eg.] User
	 * @var string $controller */
	private $controller;

	/** Action Container
	 *
	 * [eg.] Register
	 * @var string $action */
	private $action;

	/** Request Container
	 *
	 * [eg.] user_name or id
	 * @var string $request */
	private $request;


	/**
	 * Core Bootstrap Construct Function
	 *
	 * Set URL's Value in Container eg.('' = index)
	 *
	 * @param array $request URL's Value
	 * @return void
	 */
	public function __construct(array $request)
	{
		$this->request = $request;

		if ($this->request['controller'] === "") {
			$this->controller = 'home';
		} else {
			$this->controller = $this->request['controller'];
		}

		if ($this->request['action'] === "") {
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];
		}
	}


	/** Create Controller Function
	 *
	 * Check Classes, Method & Requests ara exists.
	 *
	 * @return object Intantiation New Object in $controller (Bootstrap's Class) From Controller Class
	 */
	public function createController()
	{
		$this->controller = NS_CONTROLLERS . $this->controller;

		if (class_exists($this->controller)) {

			/** Parent Class Name
			 *
			 * Get Controller's Parent Class Name [eg.] Core Controller
			 * @var array $parents */
			$parents = class_parents($this->controller);

			if (in_array(NS_CORE . 'Controller', $parents)) {
				if (method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				} else {
					echo "<h1>Method Doesn't Exists.</h1>", "<br>";
				}
			} else {
				echo "<h1>Bootstrap Controller (Function) Doesn't Exists.</h1><br>";
			}
		} else {
			echo "<h1>$this->controller Class Doesn't Exists.</h1>", "<br>";
		}
	}
}
