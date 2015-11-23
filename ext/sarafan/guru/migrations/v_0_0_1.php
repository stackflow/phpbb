<?php
namespace sarafan\guru\migrations;

use phpbb\db\migration\migration;
use sarafan\guru\helper\Database;

/**
 * @package sarafan\guru\migrations
 */
class v_0_0_1 extends migration
{
    public function effectively_installed()
    {
        return isset($this->config['sarafan_guru_version']) && version_compare($this->config['sarafan_guru_version'], '0.0.1', '>=');
    }

    static public function depends_on()
    {
        return array('\phpbb\db\migration\data\v310\dev');
    }

    public function update_data()
    {
        return array(
            array('config.add', array('sarafan_guru_version', '0.0.1')),
            array('custom', array(
                array($this, 'create_accounts')
            ))
        );
    }

    public function create_accounts()
    {
        $date = new \DateTime();
        $account = $date->format('y') . '000' . '001';

        $db = new Database($this->db);

        $sql_array = array(
            'SELECT' => 'u.user_id',
            'FROM' => array(
                USERS_TABLE => 'u'
            ),
            'WHERE' => $this->db->sql_in_set('user_type', 2, true),
            'ORDER_BY' => 'user_id'
        );
        $sql = $this->db->sql_build_query('SELECT', $sql_array);

        $results = $this->db->sql_query($sql);

        while ($row = $this->db->sql_fetchrow($results)) {
            $acc = $db->createAccount($row['user_id'], $account);
            $account = 1 + (int)$acc;
        }

        $this->db->sql_freeresult($results);
    }

    public function update_schema()
    {
        if (!$this->db_tools->sql_table_exists('sp_account')) {
            return [
                'add_tables' => [
                    'sp_account' => [
                        'COLUMNS' => [
                            'account_id' => array('BINT', null, 'auto_increment'),
                            'user_id' => array('BINT', null),
                            'account' => array('CHAR:8', ''),
                            'balance' => array('PDECIMAL:10', 0),
                            'created' => array('TIMESTAMP', null)
                        ],
                        'PRIMARY_KEY' => 'account_id',
                        'KEYS' => [
                            'i_account' => ['UNIQUE', 'account'],
                            'i_balance' => ['INDEX', 'balance'],
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
                'sp_account'
            ]
        ];
    }
}
