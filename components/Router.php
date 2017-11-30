<?php 
class Router
{
	//массив с маршрутами
	private $routes;

	public function __construct()
	{
		$routesPath = ROOT. '/config/routes.php';
		$this->routes = require_once($routesPath);
	}

    /**
     *Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/' );
        }
    }

    public function run()
	{
        //get request string
        $uri = $this->getURI();

        //check is $uri in routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {

                //get internal path from external with our rules
                $internalRoute =  preg_replace("~$uriPattern~", $path, $uri);

                //define witch controller and action process request
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments ) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;


                //include file controller-class
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //create new object, call method
                $controllerObject = new $controllerName();
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
	}
}