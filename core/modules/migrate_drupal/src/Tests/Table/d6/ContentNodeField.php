<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d6\ContentNodeField.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d6;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the content_node_field table.
 */
class ContentNodeField extends DrupalDumpBase {

  public function load() {
    $this->createTable("content_node_field", array(
      'primary key' => array(
        'field_name',
      ),
      'fields' => array(
        'field_name' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '32',
          'default' => '',
        ),
        'type' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '127',
          'default' => '',
        ),
        'global_settings' => array(
          'type' => 'text',
          'not null' => TRUE,
          'length' => 100,
        ),
        'required' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'multiple' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'db_storage' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '1',
        ),
        'module' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '127',
          'default' => '',
        ),
        'db_columns' => array(
          'type' => 'text',
          'not null' => TRUE,
          'length' => 100,
        ),
        'active' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'locked' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("content_node_field")->fields(array(
      'field_name',
      'type',
      'global_settings',
      'required',
      'multiple',
      'db_storage',
      'module',
      'db_columns',
      'active',
      'locked',
    ))
    ->values(array(
      'field_name' => 'field_multivalue',
      'type' => 'number_decimal',
      'global_settings' => 'a:9:{s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:3:"min";s:0:"";s:3:"max";s:0:"";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";s:9:"precision";s:2:"10";s:5:"scale";s:1:"2";s:7:"decimal";s:1:".";}',
      'required' => '0',
      'multiple' => '1',
      'db_storage' => '0',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:5:{s:4:"type";s:7:"numeric";s:9:"precision";s:2:"10";s:5:"scale";s:1:"2";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test',
      'type' => 'text',
      'global_settings' => 'a:4:{s:15:"text_processing";s:1:"1";s:10:"max_length";s:0:"";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '0',
      'module' => 'text',
      'db_columns' => 'a:2:{s:5:"value";a:5:{s:4:"type";s:4:"text";s:4:"size";s:3:"big";s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}s:6:"format";a:4:{s:4:"type";s:3:"int";s:8:"unsigned";b:1;s:8:"not null";b:0;s:5:"views";b:0;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_date',
      'type' => 'date',
      'global_settings' => 'a:7:{s:11:"granularity";a:5:{s:4:"year";s:4:"year";s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"hour";s:4:"hour";s:6:"minute";s:6:"minute";}s:11:"timezone_db";s:3:"UTC";s:11:"tz_handling";s:4:"site";s:6:"todate";s:0:"";s:6:"repeat";i:0;s:16:"repeat_collapsed";s:0:"";s:14:"default_format";s:6:"medium";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'date',
      'db_columns' => 'a:1:{s:5:"value";a:5:{s:4:"type";s:7:"varchar";s:6:"length";i:20;s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_datestamp',
      'type' => 'datestamp',
      'global_settings' => 'a:7:{s:11:"granularity";a:5:{s:4:"year";s:4:"year";s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"hour";s:4:"hour";s:6:"minute";s:6:"minute";}s:11:"timezone_db";s:3:"UTC";s:11:"tz_handling";s:4:"site";s:6:"todate";s:0:"";s:6:"repeat";i:0;s:16:"repeat_collapsed";s:0:"";s:14:"default_format";s:6:"medium";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'date',
      'db_columns' => 'a:1:{s:5:"value";a:4:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_datetime',
      'type' => 'datetime',
      'global_settings' => 'a:7:{s:11:"granularity";a:5:{s:4:"year";s:4:"year";s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"hour";s:4:"hour";s:6:"minute";s:6:"minute";}s:11:"timezone_db";s:3:"UTC";s:11:"tz_handling";s:4:"site";s:6:"todate";s:0:"";s:6:"repeat";i:0;s:16:"repeat_collapsed";s:0:"";s:14:"default_format";s:6:"medium";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'date',
      'db_columns' => 'a:1:{s:5:"value";a:4:{s:4:"type";s:8:"datetime";s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_decimal_radio_buttons',
      'type' => 'number_decimal',
      'global_settings' => "a:9:{s:6:\"prefix\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:14:\"allowed_values\";s:8:\"1.2\r\n2.1\";s:18:\"allowed_values_php\";s:0:\"\";s:9:\"precision\";s:2:\"10\";s:5:\"scale\";s:1:\"2\";s:7:\"decimal\";s:1:\".\";}",
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:5:{s:4:"type";s:7:"numeric";s:9:"precision";s:2:"10";s:5:"scale";s:1:"2";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_email',
      'type' => 'email',
      'global_settings' => 'a:0:{}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'email',
      'db_columns' => 'a:1:{s:5:"email";a:4:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_exclude_unset',
      'type' => 'text',
      'global_settings' => 'a:4:{s:15:"text_processing";s:1:"1";s:10:"max_length";s:0:"";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'text',
      'db_columns' => 'a:2:{s:5:"value";a:5:{s:4:"type";s:4:"text";s:4:"size";s:3:"big";s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}s:6:"format";a:4:{s:4:"type";s:3:"int";s:8:"unsigned";b:1;s:8:"not null";b:0;s:5:"views";b:0;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_filefield',
      'type' => 'filefield',
      'global_settings' => 'a:3:{s:10:"list_field";s:1:"0";s:12:"list_default";i:1;s:17:"description_field";s:1:"1";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'filefield',
      'db_columns' => 'a:3:{s:3:"fid";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:5:"views";b:1;}s:4:"list";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"tiny";s:8:"not null";b:0;s:5:"views";b:1;}s:4:"data";a:3:{s:4:"type";s:4:"text";s:9:"serialize";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_float_single_checkbox',
      'type' => 'number_float',
      'global_settings' => "a:6:{s:6:\"prefix\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:14:\"allowed_values\";s:12:\"3.142\r\n1.234\";s:18:\"allowed_values_php\";s:0:\"\";}",
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:5:"float";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_four',
      'type' => 'number_float',
      'global_settings' => 'a:6:{s:6:"prefix";s:3:"id-";s:6:"suffix";s:0:"";s:3:"min";s:3:"100";s:3:"max";s:3:"200";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:5:"float";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_identical1',
      'type' => 'number_integer',
      'global_settings' => 'a:6:{s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:3:"min";s:0:"";s:3:"max";s:0:"";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_identical2',
      'type' => 'number_integer',
      'global_settings' => 'a:6:{s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:3:"min";s:0:"";s:3:"max";s:0:"";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_imagefield',
      'type' => 'filefield',
      'global_settings' => 'a:3:{s:10:"list_field";s:1:"0";s:12:"list_default";i:1;s:17:"description_field";s:1:"0";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'filefield',
      'db_columns' => 'a:3:{s:3:"fid";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:5:"views";b:1;}s:4:"list";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"tiny";s:8:"not null";b:0;s:5:"views";b:1;}s:4:"data";a:3:{s:4:"type";s:4:"text";s:9:"serialize";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_integer_selectlist',
      'type' => 'number_integer',
      'global_settings' => "a:6:{s:6:\"prefix\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:14:\"allowed_values\";s:22:\"1234\r\n2341\r\n3412\r\n4123\";s:18:\"allowed_values_php\";s:0:\"\";}",
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_link',
      'type' => 'link',
      'global_settings' => 'a:7:{s:10:"attributes";a:4:{s:6:"target";s:4:"user";s:3:"rel";s:8:"nofollow";s:5:"class";s:0:"";s:5:"title";s:10:"Link Title";}s:7:"display";a:1:{s:10:"url_cutoff";s:2:"80";}s:3:"url";i:0;s:5:"title";s:8:"required";s:11:"title_value";s:0:"";s:13:"enable_tokens";s:0:"";s:12:"validate_url";i:1;}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'link',
      'db_columns' => 'a:3:{s:3:"url";a:4:{s:4:"type";s:7:"varchar";s:6:"length";i:2048;s:8:"not null";b:0;s:8:"sortable";b:1;}s:5:"title";a:4:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:8:"not null";b:0;s:8:"sortable";b:1;}s:10:"attributes";a:3:{s:4:"type";s:4:"text";s:4:"size";s:6:"medium";s:8:"not null";b:0;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_phone',
      'type' => 'au_phone',
      'global_settings' => 'a:1:{s:18:"phone_country_code";i:0;}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'phone',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:8:"not null";b:0;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_text_single_checkbox',
      'type' => 'text',
      'global_settings' => "a:4:{s:15:\"text_processing\";s:1:\"0\";s:10:\"max_length\";s:0:\"\";s:14:\"allowed_values\";s:18:\"0|Hello\r\n1|Goodbye\";s:18:\"allowed_values_php\";s:0:\"\";}",
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'text',
      'db_columns' => 'a:1:{s:5:"value";a:5:{s:4:"type";s:4:"text";s:4:"size";s:3:"big";s:8:"not null";b:0;s:8:"sortable";b:1;s:5:"views";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_three',
      'type' => 'number_decimal',
      'global_settings' => 'a:9:{s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:3:"min";s:0:"";s:3:"max";s:3:"600";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";s:9:"precision";s:2:"10";s:5:"scale";s:1:"2";s:7:"decimal";s:1:".";}',
      'required' => '0',
      'multiple' => '0',
      'db_storage' => '1',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:5:{s:4:"type";s:7:"numeric";s:9:"precision";s:2:"10";s:5:"scale";s:1:"2";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->values(array(
      'field_name' => 'field_test_two',
      'type' => 'number_integer',
      'global_settings' => 'a:6:{s:6:"prefix";s:4:"pref";s:6:"suffix";s:3:"suf";s:3:"min";s:2:"10";s:3:"max";s:3:"100";s:14:"allowed_values";s:0:"";s:18:"allowed_values_php";s:0:"";}',
      'required' => '0',
      'multiple' => '1',
      'db_storage' => '0',
      'module' => 'number',
      'db_columns' => 'a:1:{s:5:"value";a:3:{s:4:"type";s:3:"int";s:8:"not null";b:0;s:8:"sortable";b:1;}}',
      'active' => '1',
      'locked' => '0',
    ))->execute();
  }

}
#e1fbb3a444896287af59cd6395555fbf
