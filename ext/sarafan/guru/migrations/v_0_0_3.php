<?php
namespace sarafan\guru\migrations;

use phpbb\db\migration\migration;

/**
 * @package sarafan\guru\migrations
 */
class v_0_0_3 extends migration
{
    public function effectively_installed()
    {
        return isset($this->config['sarafan_guru_version']) && version_compare($this->config['sarafan_guru_version'], '0.0.3', '>=');
    }

    static public function depends_on()
    {
        return array('sarafan\guru\migrations\v_0_0_2');
    }

    public function update_data()
    {
        return array(
            array('config.add', array('sarafan_guru_version', '0.0.3')),
            array('custom', array(
                array($this, 'create_payment_systems')
            ))
        );
    }

    public function create_payment_systems()
    {
        $items = array();
        $items[] = [
            'ext_payment_system_id' => 1,
            'code' => 'bisys',
            'title' => 'Биллинговые системы',
            'description' => 'Сумма приходит в копейках',
            'rate' => 0.01,
            'token' => '',
            'created' => date('U')
        ];
        foreach ($items as $item) {
            $sql_array = array(
                'SELECT' => 'ext_payment_system_id',
                'FROM' => array(
                    'sp_ext_payment_system' => 'payment_system'
                ),
                'WHERE' => $this->db->sql_in_set('ext_payment_system_id', $item['ext_payment_system_id'])
            );
            $sql = $this->db->sql_build_query('SELECT', $sql_array);
            $result = $this->db->sql_query($sql);
            $row = $this->db->sql_fetchrow();
            if (!$row) {
                $sql = 'INSERT INTO sp_ext_payment_system ' . $this->db->sql_build_array('INSERT', $item);
                $this->db->sql_query($sql);
            }
            $this->db->sql_freeresult($result);
        }
    }

    public function update_schema()
    {
        if (!$this->db_tools->sql_table_exists('sp_ext_payment_system')) {
            return [
                'add_tables' => [
                    'sp_ext_payment_system' => [
                        'COLUMNS' => [
                            'ext_payment_system_id' => array('BINT', null, 'auto_increment'),
                            'code' => array('VCHAR_UNI:10', null),
                            'title' => array('VCHAR_UNI:64', ''),
                            'description' => array('VCHAR_UNI', ''),
                            'rate' => array('PDECIMAL:10', 0),
                            'token' => array('VCHAR_UNI', ''),
                            'created' => array('TIMESTAMP', null)
                        ],
                        'PRIMARY_KEY' => 'ext_payment_system_id',
                        'KEYS' => [
                            'i_code' => ['UNIQUE', 'code']
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
                'sp_ext_payment_system'
            ]
        ];
    }
}
