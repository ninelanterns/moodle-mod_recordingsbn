<?php
/**
 * View and administrate BigBlueButton playback recordings
 *
 * @package   mod_recordingsbn
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @copyright 2011-2014 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/moodleform_mod.php');

/**
 * Module instance settings form
 */
class mod_recordingsbn_mod_form extends moodleform_mod {

    /**
     * Defines forms elements
     */
    public function definition() {

        global $CFG;

        $mform = $this->_form;
        $current_resource =& $this->current;

        //-------------------------------------------------------------------------------
        // Adding the "general" fieldset, where all the common settings are showed
        $mform->addElement('header', 'general', get_string('mod_form_block_general', 'bigbluebuttonbn'));

        // Adding the standard "name" field
        $mform->addElement('text', 'name', get_string('mod_form_field_name','recordingsbn'), 'maxlength="64" size="32"');
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');
        //$mform->addHelpButton('name', 'mod_form_field_name_help', 'recordingsbn');

        if ( $CFG->version < '2015051100' ) {
            //This is valid before v2.9
            $this->add_intro_editor(false, get_string('mod_form_field_intro', 'bigbluebuttonbn'));
        } else {
            //This is valid after v2.9
            $this->standard_intro_elements(get_string('mod_form_field_intro', 'bigbluebuttonbn'));
        }
        $mform->setAdvanced('introeditor');
        $mform->setAdvanced('showdescription');

        //-------------------------------------------------------------------------------
        // Adding the "content" fieldset, where the content to be linked to this resource will be configured

        //-------------------------------------------------------------------------------
        // add standard elements, common to all modules
        $this->standard_coursemodule_elements();
        //-------------------------------------------------------------------------------
        // add standard buttons, common to all modules
        $this->add_action_buttons();
    }
}