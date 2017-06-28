<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igreja extends CI_Controller {

    public function Sede() {

        $this->layout = 'maintample';
        $this->load->view('site/Sede');
    }

    public function QueluzI() {

        $this->layout = 'maintample';
        $this->load->view('site/QueluzI');
    }
    public function ItatiaiaI() {

        $this->layout = 'maintample';
        $this->load->view('site/ItatiaiaI');
    }
    public function ItatiaiaII() {

        $this->layout = 'maintample';
        $this->load->view('site/ItatiaiaII');
    }
    public function Resende() {

        $this->layout = 'maintample';
        $this->load->view('site/Resende');
    }
    public function PortoReal() {

        $this->layout = 'maintample';
        $this->load->view('site/PortoReal');
    }
    public function Areias() {

        $this->layout = 'maintample';
        $this->load->view('site/Areias');
    }
    public function Arapei() {

        $this->layout = 'maintample';
        $this->load->view('site/Arapei');
    }
    public function Bananal() {

        $this->layout = 'maintample';
        $this->load->view('site/Bananal');
    }
    public function SaoJoseBarreiro() {

        $this->layout = 'maintample';
        $this->load->view('site/SaoJoseBarreiro');
    }
    public function EngenheiroPassos() {

        $this->layout = 'maintample';
        $this->load->view('site/EngenheiroPassos');
    }
}
