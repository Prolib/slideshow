<?php

declare(strict_types=1);

namespace ProLib;

use Nette\Application\UI\Control;

class Slideshow extends Control {

	/** @var string|null */
	private $template;

	/** @var array */
	private $entries = [];

	public function add(SlideshowEntry $entry): void {
		$this->entries[] = $entry;
	}

	/**
	 * @param null|string $template
	 */
	public function setTemplate(?string $template): void {
		$this->template = $template;
	}

	public function render(): void {
		if (!$this->entries) {
			return;
		}
		$template = $this->getTemplate();
		$template->setFile($this->template ?: __DIR__ . '/templates/slideshow.latte');
		$template->entires = $this->entries;

		$template->render();
	}

	public function renderJs(): void {
		if (!$this->entries) {
			return;
		}
		$template = $this->getTemplate();
		$template->setFile(__DIR__ . '/templates/javascript.latte');

		$template->render();
	}

}
