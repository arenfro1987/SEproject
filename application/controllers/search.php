<?php
class Search extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('email_model');
	}

	public function index($search_term){
				//echo "SEARCH TERM: " . $search_term . "<br />";
				$results = $this->email_model->search($search_term);
				foreach ($results as $r) {
					echo "<tr>";
					echo 	"<td>";
					echo 		$r['email_address'];
					echo 	"</td>";
					echo 	"<td>";
					echo 		"<a href='javascript:void(0)' onclick='addToGroup(this);' class='addToGroup'>Add To Group</a>";
					echo 	"</td>";
					echo "<tr>";
				}
				//echo $uid;
				//echo $search_term;
	}
}
?>

