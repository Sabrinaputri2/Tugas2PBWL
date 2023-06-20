<?php

namespace App\Models;

use App\Core\Model;

class home extends Model
{

	public function home()
	{
		$this->dashboard('dashboard/index', $data);
	}
    }