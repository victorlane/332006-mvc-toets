<?php

class Countries extends Controller {
    public function f($fn) {
        return $fn;
    }

    public function index() {
        $countries = $this->model('Country')->getCountries();
        $table = "";

        foreach($countries as $country) {
            $table .= <<<HTML
            <tr>
                <td>{$country->id}</td>
                <td>{$country->name}</td>
                <td>{$country->capitalCity}</td>
                <td>{$country->continent}</td>
                <td>{$this->f(number_format($country->population))}</td>
            </tr>
            HTML;
        }
        
        $this->view('countries/index', ['title' => 'Countries', 'countries' => $table]);
    }
}