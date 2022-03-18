<?php

class Countries extends Controller {
    
    public function index() {
        $countries = $this->model('Country');
        $countries = $countries->getAll();
        
        $this->view('countries/index', ['title' => 'Countries', 'countries' => $countries]);
    }
}