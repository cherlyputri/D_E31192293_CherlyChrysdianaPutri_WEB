<?php
 class Templatee {
 protected $_ci;
function __construct() {
$this->_ci = &get_instance(); 
}
 function views($template = NULL, $data = NULL) {
if ($template != NULL) {
		
		// $data['head'] berfungsi memanggil file head.php yang ada di folder Admin/_Template/
 		// ['head'] data yang dipanggil dari template.php dari folder Admin/_Template/
		$data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE);
 
		// $data['topbar'] berfungsi memanggil file topbar.php yang ada di folder Admin/_Template/
		// ['topbar'] data yang dipanggil dari file template.php dari folder Admin/_Template/
		$data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);

		// $data['sidebar'] berfungsi memanggil file sidebar.php yang ada di folder Admin/_Template/
		// ['sidebae'] data yang dipanggil dari file template.php dari folder Admin/_Template/
		$data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);

		// ['isi'] data yang dipanggil dari file content.php dari folderAdmin/_Template/
 		$data['isi'] = $this->_ci->load->view($template, $data, TRUE);
 
		// $data['content'] berfungsi memanggil file content.php dari folder Admin/_Template/
		// ['content'] data yang dipanggil dari file template.php dari folder Admin/_Template/
		$data['content'] = $this->_ci->load->view('crud/home_mahasiswa', $data, TRUE);

		// $data['footer'] berfungsi memanggil file footer.php dari folder Admin/_Template/
		// ['footer'] data yang dipanggil dari file template.php dari folder Admin/_Template/
		$data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
 
		// $data['template'] berfungsi menampilkan file template.php dari folder Admin/_Template/
		// view('Admin/_Template/Template', $data, TRUE); untuk memanggil $data diatas seperti $data['head'], dll
		echo $data['Template']= $this->_ci->load->view('Admin/_Template/Template',

$data, TRUE); }}}?>