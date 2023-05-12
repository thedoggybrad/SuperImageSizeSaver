<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    TheDoggybrad and its original authors
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

function reduce_images_size_init() {
		ossn_add_hook('ossn', 'image:resize:quality', 'reduce_images_size');
}
function reduce_images_size(){
		return 20;	
}
ossn_register_callback('ossn', 'init', 'reduce_images_size_init');
