<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Hrjobroles/HrJobRoles.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Hrjobroles_DAO_HrJobRoles extends CRM_Core_DAO
{
    /**
     * static instance to hold the table name
     *
     * @var string
     * @static
     */
    static $_tableName = 'civicrm_hrjobroles';
    /**
     * static instance to hold the field values
     *
     * @var array
     * @static
     */
    static $_fields = null;
    /**
     * static instance to hold the keys used in $_fields for each field.
     *
     * @var array
     * @static
     */
    static $_fieldKeys = null;
    /**
     * static instance to hold the FK relationships
     *
     * @var string
     * @static
     */
    static $_links = null;
    /**
     * static instance to hold the values that can
     * be imported
     *
     * @var array
     * @static
     */
    static $_import = null;
    /**
     * static instance to hold the values that can
     * be exported
     *
     * @var array
     * @static
     */
    static $_export = null;
    /**
     * static value to see if we should log any modifications to
     * this table in the civicrm_log table
     *
     * @var boolean
     * @static
     */
    static $_log = true;
    /**
     * Unique HrJobRoles ID
     *
     * @var int unsigned
     */
    public $id;
    /**
     * FK to Contract
     *
     * @var int unsigned
     */
    public $job_contract_id;
    /**
     * Title or Project name for the Job Role.
     *
     * @var string
     */
    public $title;
    /**
     * Negotiated name for the role
     *
     * @var text
     */
    public $description;
    /**
     * Job Role Status (Active / Inactive)
     *
     * @var string
     */
    public $status;
    /**
     * Amount of time allocated for work (in a given week)
     *
     * @var float
     */
    public $hours;
    /**
     * Period during which hours are allocated (eg 5 hours per day; 5 hours per week)
     *
     * @var string
     */
    public $role_hours_unit;
    /**
     * Role region value.
     *
     * @var string
     */
    public $region;
    /**
     * Role department.
     *
     * @var string
     */
    public $department;
    /**
     * Junior manager, senior manager, etc.
     *
     * @var string
     */
    public $level_type;
    /**
     * FK to Contact ID
     *
     * @var int unsigned
     */
    public $manager_contact_id;
    /**
     *
     * @var string
     */
    public $functional_area;
    /**
     *
     * @var string
     */
    public $organization;
    /**
     * List of Cost Center option group values
     *
     * @var string
     */
    public $cost_center;
    /**
     * Cost Center value type (fixed or %)
     *
     * @var string
     */
    public $cost_center_val_type;
    /**
     * Percentage of Pay Assigned to this cost center
     *
     * @var string
     */
    public $percent_pay_cost_center;
    /**
     * Amount of Pay Assigned to this cost center
     *
     * @var string
     */
    public $amount_pay_cost_center;
    /**
     * List of attached Funder contact IDs
     *
     * @var string
     */
    public $funder;
    /**
     * Funder value type (fixed or %)
     *
     * @var string
     */
    public $funder_val_type;
    /**
     * Percentage of Pay Assigned to this funder
     *
     * @var string
     */
    public $percent_pay_funder;
    /**
     * Amount of Pay Assigned to this funder
     *
     * @var string
     */
    public $amount_pay_funder;
    /**
     * Main work location
     *
     * @var string
     */
    public $location;
    /**
     * class constructor
     *
     * @access public
     * @return civicrm_hrjobroles
     */
    function __construct()
    {
        $this->__table = 'civicrm_hrjobroles';
        parent::__construct();
    }
    /**
     * return foreign keys and entity references
     *
     * @static
     * @access public
     * @return array of CRM_Core_Reference_Interface
     */
    static function getReferenceColumns()
    {
        if (!self::$_links) {
            self::$_links = static ::createReferenceColumns(__CLASS__);
            self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'manager_contact_id', 'civicrm_contact', 'id');
        }
        return self::$_links;
    }
    /**
     * returns all the column names of this table
     *
     * @access public
     * @return array
     */
    static function &fields()
    {
        if (!(self::$_fields)) {
            self::$_fields = array(
                'id' => array(
                    'name' => 'id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'job_contract_id' => array(
                    'name' => 'job_contract_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Job Id') ,
                    'required' => true,
                ) ,
                'title' => array(
                    'name' => 'title',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Job Role Title') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'default' => 'NULL',
                ) ,
                'description' => array(
                    'name' => 'description',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Job Role Description') ,
                ) ,
                'status' => array(
                    'name' => 'status',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Job Role Status') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'default' => 'NULL',
                ) ,
                'hrjc_role_hours' => array(
                    'name' => 'hours',
                    'type' => CRM_Utils_Type::T_FLOAT,
                    'title' => ts('Amount') ,
                ) ,
                'hrjc_role_unit' => array(
                    'name' => 'role_hours_unit',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Hours Unit') ,
                    'maxlength' => 63,
                    'size' => CRM_Utils_Type::BIG,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.role_hours_unit',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_region' => array(
                    'name' => 'region',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Region') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.region',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_role_department' => array(
                    'name' => 'department',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Department') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.department',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_level_type' => array(
                    'name' => 'level_type',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Level') ,
                    'maxlength' => 63,
                    'size' => CRM_Utils_Type::BIG,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.level_type',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'manager_contact_id' => array(
                    'name' => 'manager_contact_id',
                    'type' => CRM_Utils_Type::T_INT,
                    'title' => ts('Manager Contact Id') ,
                    'FKClassName' => 'CRM_Contact_DAO_Contact',
                ) ,
                'functional_area' => array(
                    'name' => 'functional_area',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Functional Area') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'organization' => array(
                    'name' => 'organization',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Organization') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'hrjc_cost_center' => array(
                    'name' => 'cost_center',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Cost Center') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.cost_center',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_cost_center_val_type' => array(
                    'name' => 'cost_center_val_type',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Cost Center value type') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.cost_center_val_type',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_role_percent_pay_cost_center' => array(
                    'name' => 'percent_pay_cost_center',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Percent of Pay Assigned to this cost center') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.percent_pay_cost_center',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_role_amount_pay_cost_center' => array(
                    'name' => 'amount_pay_cost_center',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Amount of Pay Assigned to this cost center') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.amount_pay_cost_center',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'funder' => array(
                    'name' => 'funder',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Funder Contact ID') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'hrjc_funder_val_type' => array(
                    'name' => 'funder_val_type',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Funder value type') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.funder_val_type',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_role_percent_pay_funder' => array(
                    'name' => 'percent_pay_funder',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Percent of Pay Assigned to this funder') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.percent_pay_funder',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'hrjc_role_amount_pay_funder' => array(
                    'name' => 'amount_pay_funder',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Amount of Pay Assigned to this funder') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.amount_pay_funder',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
                'location' => array(
                    'name' => 'location',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Location') ,
                    'maxlength' => 127,
                    'size' => CRM_Utils_Type::HUGE,
                    'import' => true,
                    'where' => 'civicrm_hrjobroles.location',
                    'headerPattern' => '',
                    'dataPattern' => '',
                    'export' => true,
                ) ,
            );
        }
        return self::$_fields;
    }
    /**
     * Returns an array containing, for each field, the arary key used for that
     * field in self::$_fields.
     *
     * @access public
     * @return array
     */
    static function &fieldKeys()
    {
        if (!(self::$_fieldKeys)) {
            self::$_fieldKeys = array(
                'id' => 'id',
                'job_contract_id' => 'job_contract_id',
                'title' => 'title',
                'description' => 'description',
                'status' => 'status',
                'hours' => 'hrjc_role_hours',
                'role_hours_unit' => 'hrjc_role_unit',
                'region' => 'hrjc_region',
                'department' => 'hrjc_role_department',
                'level_type' => 'hrjc_level_type',
                'manager_contact_id' => 'manager_contact_id',
                'functional_area' => 'functional_area',
                'organization' => 'organization',
                'cost_center' => 'hrjc_cost_center',
                'cost_center_val_type' => 'hrjc_cost_center_val_type',
                'percent_pay_cost_center' => 'hrjc_role_percent_pay_cost_center',
                'amount_pay_cost_center' => 'hrjc_role_amount_pay_cost_center',
                'funder' => 'funder',
                'funder_val_type' => 'hrjc_funder_val_type',
                'percent_pay_funder' => 'hrjc_role_percent_pay_funder',
                'amount_pay_funder' => 'hrjc_role_amount_pay_funder',
                'location' => 'location',
            );
        }
        return self::$_fieldKeys;
    }
    /**
     * returns the names of this table
     *
     * @access public
     * @static
     * @return string
     */
    static function getTableName()
    {
        return self::$_tableName;
    }
    /**
     * returns if this table needs to be logged
     *
     * @access public
     * @return boolean
     */
    function getLog()
    {
        return self::$_log;
    }
    /**
     * returns the list of fields that can be imported
     *
     * @access public
     * return array
     * @static
     */
    static function &import($prefix = false)
    {
        if (!(self::$_import)) {
            self::$_import = array();
            $fields = self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('import', $field)) {
                    if ($prefix) {
                        self::$_import['hrjobroles'] = & $fields[$name];
                    } else {
                        self::$_import[$name] = & $fields[$name];
                    }
                }
            }
        }
        return self::$_import;
    }
    /**
     * returns the list of fields that can be exported
     *
     * @access public
     * return array
     * @static
     */
    static function &export($prefix = false)
    {
        if (!(self::$_export)) {
            self::$_export = array();
            $fields = self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('export', $field)) {
                    if ($prefix) {
                        self::$_export['hrjobroles'] = & $fields[$name];
                    } else {
                        self::$_export[$name] = & $fields[$name];
                    }
                }
            }
        }
        return self::$_export;
    }
}