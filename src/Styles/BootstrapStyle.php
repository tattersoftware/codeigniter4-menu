<?php namespace Tatter\Menus\Styles;

use Tatter\Menus\Menu;
use Spatie\Menu\Link;

/**
 * Bootstrap Styler Trait
 *
 * Applies CSS classes & styles
 * to make a Bootstrap-style Menu.
 *
 * @mixin Menu
 */
trait BootstrapStyle
{
	protected function applyBootstrapStyle(): void
    {
		$this->builder
			->addClass('navbar-nav mr-auto')
			->registerFilter(function (Link $link) {
				$link->addParentClass('nav-item');
				$link->addClass('nav-link');
			});
	}
}
