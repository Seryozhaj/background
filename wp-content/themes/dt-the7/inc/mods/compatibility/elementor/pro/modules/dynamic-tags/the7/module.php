<?php

namespace The7\Mods\Compatibility\Elementor\Pro\Modules\Dynamic_Tags\The7;

use Elementor\Modules\DynamicTags\Module as TagsModule;

defined( 'ABSPATH' ) || exit;

class Module extends TagsModule {

	const THE7_GROUP = 'the7';
	const TEXT_CATEGORY_WITH_TEMPLATE = 'the7-text-with-template';

	public function __construct() {
		parent::__construct();
		require_once __DIR__ . '/tags/the7-color.php';
		require_once __DIR__ . '/tags/the7-template.php';
	}

	public function get_name() {
		return 'the7-tags';
	}

	public function get_tag_classes_names() {
		return [
			'The7_Color',
			'The7_Template',
		];
	}

	public function get_groups() {
		return [
			self::THE7_GROUP => [
				'title' => __( 'The7', 'the7mk2' ),
			],
		];
	}
}
