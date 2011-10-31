<?php
class Paginas_extras extends CI_Controller
{
    public function promo()
    {
        $this->load->view("paginas_extras/promo", null);
    }
	
	public function comofunciona()
    {
        $this->load->view("paginas_extras/comofunciona", null);
    }
	
	public function quees()
    {
        $this->load->view("paginas_extras/quees", null);
    }
	
	public function comocomprar()
    {
        $this->load->view("paginas_extras/comocomprar", null);
    }
	
	public function comovender()
    {
        $this->load->view("paginas_extras/comovender", null);
    }
}