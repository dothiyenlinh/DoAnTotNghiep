/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

//     config.allowedContent = true;
//     config.autoParagraph = false;

// config.fillEmptyBlocks = false;

// config.fullPage = false;

// config.ignoreEmptyParagraph = true;

// config.enterMode = CKEDITOR.ENTER_BR;
CKEDITOR.config.autoParagraph = false;


config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.htmlEncodeOutput = false;
    config.entities = false;
    config.entities_latin = false;
    config.ForceSimpleAmpersand = true;

};
