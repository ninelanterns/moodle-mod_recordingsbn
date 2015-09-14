<?php
/**
 * Settings for RecordingsBN
 *
 * @package   mod_recordingsbn
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @copyright 2011-2014 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

defined('MOODLE_INTERNAL') || die;

$settings->add( new admin_setting_heading('recordingsbn_config_general',
        get_string('config_general', 'recordingsbn'),
        get_string('config_general_description', 'recordingsbn')));
$settings->add(new admin_setting_configcheckbox('recordingsbn_ui_html_default',
        get_string('config_feature_ui_html_default', 'recordingsbn'),
        get_string('config_feature_ui_html_default_description', 'recordingsbn'),
        1));
