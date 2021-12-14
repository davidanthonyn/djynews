<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Categories'));
    }

    function index()
    {
        $this->load->view('index.php');
    }

    function getCuaca()
    {
        $campus_name = 'UPH';
        $api_key = 'ed5e25c5a5f417a3ca5979c29453cbe4';
        //$koordinatkampus = '-6.228303, 106.610486';
        $koorx = '-6.228303';
        $koory = '106.610486';

        //Koordinat
        $api_url = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $koorx . '&lon=' . $koory . '&appid=' . $api_key;

        $weather_data = json_decode(file_get_contents($api_url), true);

        $temperature = $weather_data['main']['temp'];

        $data['celcius'] = $temperature_in_celcius = round($temperature - 273.15);

        $data['current'] = $temperature_current_weahter = $weather_data['weather'][0]['main'];

        $data['description'] = $temperature_current_weather_description = $weather_data['weather'][0]['description'];

        $data['icon'] = $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];
    }


    function getCuacaByAjax()
    {
        //$campus_name = 'UPH';
        $api_key = 'ed5e25c5a5f417a3ca5979c29453cbe4';
        //$koordinatkampus = '-6.228303, 106.610486';
        //$koorx = '-6.228303';
        //$koory = '106.610486';
        $city_name = "";

        //Koordinat
        //$api_url = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $koorx . '&lon=' . $koory . '&appid=' . $api_key;

        $api_url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city_name . '&appid=' . $api_key;

        $weather_data = json_decode(file_get_contents($api_url), true);

        $temperature = $weather_data['main']['temp'];

        echo $temperature_in_celcius = round($temperature - 273.15);

        echo $temperature_current_weather = $weather_data['weather'][0]['main'];

        $temperature_current_weather_description = $weather_data['weather'][0]['description'];

        echo $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];
    }


    /*
    function getCuacaByAjax()
    {
        $campus_name = 'UPH';
        $api_key = 'ed5e25c5a5f417a3ca5979c29453cbe4';
        //$koordinatkampus = '-6.228303, 106.610486';
        $koorx = '-6.228303';
        $koory = '106.610486';


        $api_url = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $koorx . '&lon=' . $koory . '&appid=' . $api_key;

        $weather_data = json_decode(file_get_contents($api_url), true);

        $temperature = $weather_data['main']['temp'];

        $temperature_in_celcius = round($temperature - 273.15);

        $temperature_current_weahter = $weather_data['weather'][0]['main'];

        $temperature_current_weather_description = $weather_data['weather'][0]['description'];

        $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];

        echo json_encode(file_get_contents($api_url), true);
    }*/
}
