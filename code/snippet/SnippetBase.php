<?php
/**
 * SnippetBase is a start point for providing snippet.
 */
class SnippetBase extends DataObject {
	
	static $db = array(
			'Title' => 'Varchar'
	);
	
	static $summary_fields = array(
			'Title',
	);
	
	/**
	 * Snippet name is shown in administration panel
	 */
	public static $snippet_name = 'SnippetNameIsUndefined';
	
	/**
	 * Return content of this snippet.
	 */
	public function getContent() {
		return 'Snippet base has no content, you should overwrite this method in sub class.';
	}
	
}