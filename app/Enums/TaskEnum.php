<?php 

namespace App\Enums;

enum TaskEnum: string
{
	case NEW = 'NEW';
	case PENDING = 'PENDING';
	case COMPLETED = 'COMPLETED';
}