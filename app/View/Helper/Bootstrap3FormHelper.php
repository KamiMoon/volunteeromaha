<?php
/**
 * Default form options for Bootstrap 3
 * Taken from https://gist.github.com/Suven/6325905
 */
App::uses ( 'FormHelper', 'View/Helper' );
class Bootstrap3FormHelper extends FormHelper {
	public function create($model = null, $options = array()) {
		$defaultOptions = array (
				'inputDefaults' => array (
						'div' => array (
								'class' => 'form-group' 
						),
						'label' => array (
								'class' => 'col-lg-2 control-label' 
						),
						'between' => '<div class="col-lg-10">',
						'seperator' => '</div>',
						'after' => '</div>',
						'class' => 'form-control' 
				),
				'class' => 'form-horizontal',
				'role' => 'form' 
		);	
		
		if (! empty ( $options ['inputDefaults'] )) {
			$options = array_merge ( $defaultOptions ['inputDefaults'], $options ['inputDefaults'] );
		} else {
			$options = array_merge ( $defaultOptions, $options );
		}
		return parent::create ( $model, $options );
	}
	
	// Remove this function to show the fieldset & language again
	public function inputs($fields = null, $blacklist = null, $options = array()) {
		$options = array_merge ( array (
				'fieldset' => false,
				 
		), $options );
			
		return parent::inputs ( $fields, $blacklist, $options );
	}
	
	public function input($fieldName, $options = array()){
		
		if(isset($options['label']) && (!isset($options['label']['class']) || !empty($options['label']['class']))){
			$options['label'] = array('class' => 'col-lg-2 control-label', 'text' => $options['label']); 
		}
		
		return parent::input($fieldName, $options);
	}
	
	
	public function dateTime($fieldName, $dateFormat = 'DMY', $timeFormat = '12', $attributes = array()){
		
		return parent::dateTime($fieldName, $dateFormat, $timeFormat, $attributes);
	}
	
	public function datePicker($fieldName, $attributes = array()) {
		
		$text = $fieldName;
		if(isset($attributes['label'])){
			$text = $attributes['label'];
		}
		
		$label = parent::label($text, null, array('class' => 'col-lg-2 control-label'));
		
		$id = $this->domId($fieldName);
		$inputId = $id . '_Input';
		
		$name = $this->_name(null, $fieldName);
		$name = $name['name'];
		
		$currentTime = '';
		
		if(isset($attributes['value'])){
			$currentTime = $attributes['value'];
		}
		
		$html =  <<< EOD
<div class="form-group">
	{$label}
	<div class="col-lg-10">				
		<div class='input-group date datepicker' id="{$id}">
		<input type='text' class="form-control" value="{$currentTime}" />
		<span class="input-group-addon">
		<span class="glyphicon glyphicon-calendar"></span>
		</span>
				
		<input type="hidden" name="{$name}[month]" id="{$id}Month" value="" />
		<input type="hidden" name="{$name}[day]" id="{$id}Day" value="" />
		<input type="hidden" name="{$name}[year]" id="{$id}Year" value="" />
		<input type="hidden" name="{$name}[hour]" id="{$id}Hour" value="" />
		<input type="hidden" name="{$name}[min]" id="{$id}Min" value="" />
		<input type="hidden" name="{$name}[meridian]" id="{$id}Meridian" value="" />		
					
		</div>
	</div>				
</div>		
EOD;
	
		return $html;
	}
	
	public function submit($caption = null, $options = array()) {
		$defaultOptions = array (
				'class' => 'btn btn-primary',
				'div' => 'form-group',
				'before' => '<div class="col-lg-offset-2 col-lg-10">',
				'after' => '</div>' 
		);
		$options = array_merge ( $defaultOptions, $options );
		return parent::submit ( $caption, $options );
	}
}