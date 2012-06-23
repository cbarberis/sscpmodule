<?php
class BlockHolder extends DataObject {
	static $db = array(
			'Title' => 'Varchar',
			'TemplateKey' => 'Varchar',
			'Description' => 'Text',
			'ShowDefaultSnippet' => 'Boolean'
			);
	
	static $defaults = array(
			'ShowDefaultSnippet' => false
	);
	
	static $summary_fields = array(
			'Title',
			'TemplateKey',
			'Description'
			);
	
	static $has_many = array(
			'Blocks'=>'SSCP_Block'
	);
	
	static $has_one = array(
			'DefaultSnippet' => 'SnippetBase'
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeFieldFromTab('Root', 'Blocks');
		
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
    	$gridFieldConfig->addComponent(new GridFieldAddNewBlockButton($this->ID, 'buttons-before-left'));
    	$gridFieldConfig->removeComponentsByType('GridFieldAddNewButton');
		$gridFields = new GridField('SSCP_Block', null, SSCP_Block::get(), $gridFieldConfig);
		$fields->push($gridFields);
		
		return $fields;
	}
}