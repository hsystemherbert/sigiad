<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function EnviarEvento() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/EnviarEvento_form');
    }

    public function Janeiro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/janeiro_form');
    }
    public function Fevereiro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/fevereiro_form');
    }
    public function Marco() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/marco_form');
    }
    public function Abril() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/abril_form');
    }
    public function Maio() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/maio_form');
    }
    public function Junho() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/junho_form');
    }
    public function Julho() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/julho_form');
    }
    public function Agosto() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/agosto_form');
    }
    public function Setembro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/setembro_form');
    }
    public function Outubro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/outubro_form');
    }
    public function Novembro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/novembro_form');
    }
    public function Dezembro() {

        $this->layout = 'maintample';
        $this->load->view('site/agenda/dezembro_form');
    }
}
