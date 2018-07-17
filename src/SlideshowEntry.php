<?php

declare(strict_types=1);

namespace ProLib;

class SlideshowEntry {

	/** @var string */
	private $image;

	/** @var null|string */
	private $desc;

	public function __construct(?string $image, ?string $desc = null) {
		$this->image = $image;
		$this->desc = $desc;
	}

	/**
	 * @return null|string
	 */
	public function getDesc(): ?string {
		return $this->desc;
	}

	/**
	 * @return string
	 */
	public function getImage(): ?string {
		return $this->image;
	}

}
