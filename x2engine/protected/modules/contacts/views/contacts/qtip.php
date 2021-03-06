<?php
/*****************************************************************************************
 * X2CRM Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2014 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/
?>

<h2><?php echo $contact->name; ?></h2>

<?php
if(isset($_GET['fields'])){
    $fields=$_GET['fields'];
    if(count($fields)>0){
        $attrLabels=$contact->attributeLabels();
        foreach($fields as $field){
            if($contact->hasAttribute($field) && !empty($contact->$field)){
                echo Yii::t('contacts', $attrLabels[$field]).": <strong> ".$contact->getAttribute($field,true)."</strong><br />";
            }else{
                if($field=='link'){
                    echo CHtml::link(Yii::t('contacts','Link to Record'),$this->createUrl('view',array('id'=>$contact->id)),array('style'=>'text-decoration:none;'))."<br />";
                }elseif($field=='directions'){
                    if(!empty(Yii::app()->params->admin->corporateAddress))
                        echo CHtml::link(Yii::t('contacts','Directions from Corporate'),'#',array('style'=>'text-decoration:none;','id'=>'corporate-directions','class'=>'directions'))."<br />";
                    if(!empty(Yii::app()->params->profile->address))
                        echo CHtml::link(Yii::t('contacts','Directions from Personal Address'),'#',array('style'=>'text-decoration:none;','id'=>'personal-directions','class'=>'directions'));
                }
            }
        }
    }
}else{
?>


<?php /* Contact Info */ ?>
<?php if(isset($contact->email) || isset($contact->website)) { ?>
	<?php if(isset($contact->email) && $contact->email != "") { ?>
		<?php echo Yii::t('contacts', 'Email').": "; ?> <strong><?php echo $contact->email; ?></strong><br />
	<?php } ?>

	<?php if(isset($contact->website) && $contact->website != "") { ?>
		<?php echo Yii::t('contacts', 'Website: '); ?> <strong><?php echo $contact->website; ?></strong><br />
	<?php } ?>
	<br />
<?php } ?>


<?php /* Sales and Marketing */ ?>
<?php if(isset($contact->leadtype) ||
		isset($contact->leadstatus) ||
		isset($contact->leadDate) ||
		isset($contact->interest) ||
		isset($contact->dalevalue) ||
		isset($contact->closedate) ||
		isset($contact->closestatus)) { ?>
	<?php if(isset($contact->leadtype) && $contact->leadtype != "") { ?>
	    <?php echo Yii::t('contacts', 'Lead Type').": "; ?> <strong><?php echo $contact->leadtype; ?></strong><br />
	<?php } ?>

	<?php if(isset($contact->leadstatus) && $contact->leadstatus != "") { ?>
		<?php echo Yii::t('contacts', 'Lead Status').": "; ?> <strong><?php echo $contact->leadstatus; ?></strong><br />
	<?php } ?>


	<?php if(isset($contact->leadDate) && $contact->leadDate != "") { ?>
		<?php echo Yii::t('contacts', 'Lead Date').": "; ?> <strong><?php echo Formatter::formatLongDate($contact->leadDate); ?></strong><br />
	<?php } ?>


	<?php if(isset($contact->interest) && $contact->interest != "") { ?>
		<?php echo Yii::t('contacts', 'Interest').": "; ?> <strong><?php echo $contact->interest; ?></strong><br />
	<?php } ?>

	<?php if(isset($contact->dalevalue) && $contact->dealvalue != "") { ?>
		<?php echo Yii::t('contacts', 'Deal Value').": "; ?> <strong><?php echo $contact->dealvalue; ?></strong><br />
	<?php } ?>

	<?php if(isset($contact->closedate) && $contact->closedate != "") { ?>
		<?php echo Yii::t('contacts', 'Close Date').": "; ?> <strong><?php echo Formatter::formatLongDate($contact->closedate); ?></strong><br />
	<?php } ?>

	<?php if(isset($contact->dealstatus) && $contact->dealstatus != "") { ?>
		<?php echo Yii::t('contacts', 'Deal Status').": "; ?> <strong><?php echo $contact->dealstatus; ?></strong><br />
	<?php } ?>
	<br />
<?php } ?>

<?php if(isset($contact->backgroundInfo) && $contact->backgroundInfo != "") { ?>
		<?php echo Yii::t('contacts', 'Background Info').": "; ?> <strong><?php echo $contact->backgroundInfo; ?></strong><br />
<?php }

} ?>