<?php declare (strict_types = 1);

namespace App\Modules\Front\Base\Controls\Layout\Header\Menu;

use App\Model\UI\BasePropsControl;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService(generateComponent=true)
 */
class Control extends BasePropsControl
{

	protected function getPropsClass(): string
	{
		return MenuProps::class;
	}

}
