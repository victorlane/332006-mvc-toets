<?php

class Countries extends Controller {
    
    public function index() {
        $countries = $this->model('Country');
        $countries = $countries->getCountries();
        
        $this->view('countries/index', ['title' => 'Countries', 'countries' => $countries]);
    }
}