<?php

class MontserratFontHooks {

	/**
	 * Add the webfont to all pages
	 *
	 * @param OutputPage $out
	 * @param Skin $sk
	 */
	public static function onBeforePageDisplay( OutputPage $out, $skin ) {
		$out->addModuleStyles( 'ext.MontserratFont.webfont' );
	}
}
