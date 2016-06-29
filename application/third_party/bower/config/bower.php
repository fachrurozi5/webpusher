<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Bower for Codeigniter 3
 * @author Yoann VANITOU
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link https://github.com/maltyxx/bower
 */
$config['css']['page'] = [
    ['src' => base_url('bower_components/font-awesome/css/font-awesome.css')],
    ['src' => base_url('assets/css/style.css')]
];

$config['js']['page'] = [
  ['src' => base_url('bower_components/jquery/dist/jquery.min.js')],
  ['src' => base_url('bower_components/vue/dist/vue.min.js')],
  ['src' => base_url('bower_components/pusher-websocket-iso/dist/web/pusher.js')],
  ['src' => base_url('assets/js/main.js')]
];
