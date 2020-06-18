<?php

    class dashboardController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Dashboard', $data);
        }

    }
