<?php
namespace sarafan\guru\migrations;

use phpbb\db\migration\migration;

/**
 * @package sarafan\guru\migrations
 */
class v_0_0_4 extends migration
{
    public function effectively_installed()
    {
        return isset($this->config['sarafan_guru_version']) && version_compare($this->config['sarafan_guru_version'], '0.0.4', '>=');
    }

    static public function depends_on()
    {
        return array('sarafan\guru\migrations\v_0_0_3');
    }

    public function update_data()
    {
        return array(
            array('config.add', array('sarafan_guru_version', '0.0.4'))
        );
    }

    public function update_schema()
    {
        if (!$this->db_tools->sql_table_exists('sp_ext_payment')) {
            return [
                'add_tables' => [
                    'sp_ext_payment' => [
                        'COLUMNS' => [
                            'ext_payment_id' => array('BINT', null, 'auto_increment'),
                            'ext_payment_system_id' => array('BINT', null),
                            'total' => array('PDECIMAL:10', 0),
                            'external_id' => array('VCHAR_UNI', ''),
                            'external_date' => array('VCHAR_UNI', ''),
                            'created' => array('TIMESTAMP', null)
                        ],
                        'PRIMARY_KEY' => 'ext_payment_id',
                        'KEYS' => [
                            'i_sys_created' => ['INDEX', ['ext_payment_system_id', 'created']],
                            'i_sys_extid' => ['UNIQUE', ['ext_payment_system_id', 'external_id']],
                            'i_created' => ['INDEX', 'created']
                        ]
                    ]
                ]
            ];
        }

        return array();
    }

    public function revert_schema()
    {
        return [
            'drop_tables' => [
                'sp_ext_payment'
            ]
        ];
    }
}
