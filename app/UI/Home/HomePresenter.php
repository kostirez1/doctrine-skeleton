<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\UI\BasePresenter;

class HomePresenter extends BasePresenter
{

	public function __construct()
	{
		parent::__construct();
	}

	public function actionDefault(): void
	{
		$this->template->users = [];
	}

	public function handleCreateUser(): void
	{
		$this->flashMessage('Saved');
		$this->redirect('this');
	}

	public function handleDeleteUsers(): void
	{
		$this->flashMessage('Removed');
		$this->redirect('this');
	}

}
