<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Lovestory extends Controller_Index {
    public function before()
    {
        parent::before();
    }
    public function action_index()
    {
        $categori = ORM::factory('categori')->where('showhide','=','show')->find_all();
        $main = View::factory('templates/v_lovestory')->bind('categori',$categori);
        $this->template->main[] = $main;
    }
}