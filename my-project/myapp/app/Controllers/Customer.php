<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function index()
    {

        /*
         * Calling the Helper Curl function
         */
        helper(['curl']);

        $rest_api_base_url = 'http://137.184.12.5:8081';

        //GET - list of users
//        $get_endpoint = '/customer/1';
//
//        $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
//
//        $data['customer'] = $response;

        //GET - single user
        $get_endpoint = '/customer/1';

        $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);

        $data['customer'] = $response;
//
//        //POST - create new user
//        $post_endpoint = '/api/users';
//
//        $request_data = json_encode(array("name" => "Soumitra", "job" => "Blog Author", "avatar" => "https://roytuts.com/about/"));
//
//        $response = perform_http_request('POST', $rest_api_base_url . $post_endpoint, $request_data);
//
//        $data['new_user'] = $response;
//
//        //PUT - update user
//        $put_endpoint = '/api/users';
//
//        $request_data = json_encode(array("name" => "Soumitra", "job" => "Roy Tutorials Author", "avatar" => "https://roytuts.com/about/"));
//
//        $response = perform_http_request('PUT', $rest_api_base_url . $put_endpoint, $request_data);
//
//        $data['update_user'] = $response;

        //View
        return view('customer_view', $data);
    }
}


?>