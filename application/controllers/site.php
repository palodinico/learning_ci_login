<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index() {
		echo "Hello world!";
		#echo BASEPATH;
	}
	public function test() {
		echo BASEPATH;
	}
}
?>