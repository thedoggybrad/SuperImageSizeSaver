<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    TheDoggybrad
 * @copyright (C) TheDoggyBrad
 * @license   MIT License https://opensource.org/license/mit/
 * @link      https://github.com/thedoggybrad
 */

function reduce_images_size_init() {
		ossn_add_hook('ossn', 'image:resize:quality', 'reduce_images_size');
}
function reduce_images_size(){
		return 20;	
}
ossn_register_callback('ossn', 'init', 'reduce_images_size_init');
