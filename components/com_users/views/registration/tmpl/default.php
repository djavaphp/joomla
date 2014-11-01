<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="registration<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
		<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
			<?php $fields = $this->form->getFieldset($fieldset->name);?>
			<?php if (count($fields)):?>
				<fieldset>
				<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.?>
					<legend><?php echo JText::_($fieldset->label);?></legend>
				<?php endif;?>
				<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
					<?php if ($field->hidden):// If the field is hidden, just display the input.?>
						<?php echo $field->input;?>
					<?php else:?>
						<div class="control-group">
							<div class="control-label">
							<?php echo $field->label; ?>
							<?php if (!$field->required && $field->type != 'Spacer') : ?>
								<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
							<?php endif; ?>
							</div>
							<div class="controls">
								<?php echo $field->input;?>
							</div>
						</div>
					<?php endif;?>
				<?php endforeach;?>
				<fieldset>
			<?php endif;?>
		<?php endforeach;?>
		<fieldset>
		<div class="control-group">
							<div class="control-label">
							<label title="" class="hasTooltip required" for="jform_name" id="jform_name-lbl" data-original-title="&lt;strong&gt;Name&lt;/strong&gt;&lt;br /&gt;Enter your full name">
	First Name:<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="text" aria-required="true" required="required" size="30" class="required" value="" id="jform_first_name" name="jform[first_name]">							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
							<label title="" class="hasTooltip required" for="jform_name" id="jform_name-lbl" data-original-title="&lt;strong&gt;Name&lt;/strong&gt;&lt;br /&gt;Enter your full name">
	Last Name:<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="text" aria-required="true" required="required" size="30" class="required" value="" id="jform_last_name" name="jform[last_name]">							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
							<label title="" class="hasTooltip required" for="jform_telephone" id="jform_telephone-lbl" data-original-title="&lt;strong&gt;Name&lt;/strong&gt;&lt;br /&gt;Enter your full name">
	Telephone:<span class="star">&nbsp;*</span></label>														</div>
							<div class="controls">
								<input type="text" aria-required="true" required="required" size="30" class="required" value="" id="jtelephone" name="jform[telephone]">							</div>
						</div>
		</fieldset>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
				<a class="btn" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<?php echo JHtml::_('form.token');?>
	</form>
</div>
