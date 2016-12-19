<?php abstract class Api{

	protected method = "";
	protected endpoint = "";
	protected args = array ();

	public function __construct ($request){
		header("Content-Type: aplication/json");
		$this->args = explode ('/', $request);
		$this->endpoint = array_shift(this->args);
		$this->method = $SERVER['REQUEST_METHOD'];

	}

	public function processAPI(){
		if(method_exists($this, $this->endpoint)){
			return $this->_response(
				$this->{$this->endpoint}($this->args)
				);
		}
		return $this->_response("No Endpoint: $this->endpoint", 404);
	}

}
?>