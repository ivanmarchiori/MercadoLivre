<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addStore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $lojas = [
        [
            'name'=>'Loja01',
            'description'=>'Dados da Loja e descricao sobre produtos',
            'user'=>'usuario',
            'email'=>'email@provedor.com',
            'password'=>'senha',
            'status'=>'1',
            'applicationKey'=>'applicationKey'
        ],
        [
            'name'=>'Loja02',
            'description'=>'Dados da Loja e descricao sobre produtos',
            'user'=>'usuario',
            'email'=>'email@provedor.com',
            'password'=>'senha',
            'status'=>'1',
            'applicationKey'=>'applicationKey'
        ], [
            'name'=>'Loja03',
            'description'=>'Dados da Loja e descricao sobre produtos',
            'user'=>'usuario',
            'email'=>'email@provedor.com',
            'password'=>'senha',
            'status'=>'1',
            'applicationKey'=>'applicationKey'
        ]
    ];
 

    public function run()
    {
        foreach (self::$lojas as $list) {
            DB::table('tbl_store')->insert([
                'name' => $list['name'],
                'description' => $list['description'],
                'user' => $list['user'],
                'email' => $list['email'],
                'password' => $list['password'],
                'applicationKey'=>$list['applicationKey'],
                'status' => 1
                
            ]);
        }
    }
}
