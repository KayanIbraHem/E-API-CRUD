<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return ['errors' => 'Some Thing Wrong ,Product Not Belongs to This User'];
    }
}
