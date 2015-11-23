<?php
namespace sarafan\guru\migrations;

use phpbb\db\migration\migration;

/**
 * @package sarafan\guru\migrations
 */
class v_0_0_2 extends migration
{
    public function effectively_installed()
    {
        return isset($this->config['sarafan_guru_version']) && version_compare($this->config['sarafan_guru_version'], '0.0.2', '>=');
    }

    static public function depends_on()
    {
        return array('sarafan\guru\migrations\v_0_0_1');
    }

    public function update_data()
    {
        return array(
            array('config.add', array('sarafan_guru_version', '0.0.2')),
            array('custom', array(
                array($this, 'create_payment_types')
            ))
        );
    }

    public function create_payment_types()
    {
        $types = array();
        $types[] = [
            'payment_type_id' => 1,
            'code' => 'charge',
            'title' => 'Пополнение счёта',
            'description' => 'Пополнение счёта',
            'created' => date('U')
        ];
        $types[] = [
            'payment_type_id' => 2,
            'code' => 'purchase',
            'title' => 'Оплата покупки',
            'description' => 'Оплата одной позиции закупки',
            'created' => date('U')
        ];
        foreach ($types as $type) {
            $sql_array = array(
                'SELECT' => '*',
                'FROM' => array(
                    'sp_payment_type' => 'payment_type'
                ),
                'WHERE' => $this->db->sql_in_set('payment_type_id', $type['payment_type_id'])
            );
            $sql = $this->db->sql_build_query('SELECT', $sql_array);
            $result = $this->db->sql_query_limit($sql, 1);
            $row = $this->db->sql_fetchrow();
            if (!$row) {
                    $sql = 'INSERT INTO sp_payment_type ' . $this->db->sql_build_array('INSERT', $type);
                    $this->db->sql_query($sql);
            }
            $this->db->sql_freeresult($result);
        }
    }

    public function update_schema()
    {
        if (!$this->db_tools->sql_table_exists('sp_payment_type')) {
            return [
                'add_tables' => [
                    'sp_payment_type' => [
                        'COLUMNS' => [
                            'payment_type_id' => array('BINT', null, 'auto_increment'),
                            'code' => array('VCHAR_UNI:10', null),
                            'title' => array('VCHAR_UNI:64', ''),
                            'description' => array('VCHAR_UNI', ''),
                            'created' => array('TIMESTAMP', null)
                        ],
                        'PRIMARY_KEY' => 'payment_type_id',
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
                'sp_payment_type'
            ]
        ];
    }
}
