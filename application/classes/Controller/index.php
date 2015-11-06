<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template{

	public function action_index()
	{
		$content = View::factory('main');
		$this->template->title = 'Главная страница';
		$this->template->sitename = 'Kohana';
		$this->template->description = 'My first site on Kohana Framework';
		$this->template->content = $content;
		/*
        $query = DB::query(Database::SELECT, 'SELECT * FROM news');
        $news = $query->execute();
        return $news;
		*/
	}
}

