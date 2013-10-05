<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('user_model');
	}
    function index() {
		echo "hello<br />";
		echo md5("hello")."<br />";
		echo '
			<a href="test1" />test1</a><br />
			<a href="test2" />test2</a><br />
			';
		phpinfo();
    }

	function test1() {
		$test = $this->user_model->test("junho85@gmail.com");
		var_dump($test);
		echo $test->email;
	}

	function test2() {
		echo "test2";
	}
}
?>
