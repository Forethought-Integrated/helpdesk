<?php
use App\Model\ClientSetting;
use Illuminate\Database\Seeder;

class ClientSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client=new ClientSetting;
        $client->client_name='app1';
        $client->client_token='123456';
        $client->client_service='helpdesk';
        $client->client_db_connection='mysql';
        $client->client_db_driver='mysql';
        $client->client_db_host='127.0.0.1';
        $client->client_db_port='3306';
        $client->client_db_database='helpdesk';
        $client->client_db_username='forethought';
        $client->client_db_password='123456';
        $client->client_db_prefix='';
        $client->save();
        // $client->client_='';
        

        // $client->secondary_logo_url='www.Mastechsecondrylogo.com';
        // $client->mnemonic_url='www.mnemonic_url.com';
        // $client->logo_usage='The Mastech Digital Logo is primary symbol which represents the Mastech Digital Brand and its subdiaries. The logotype is stylized to represent our modern take on the rapidly-evolving digital landscape.';
        // $logos->save();

       
        
    }
}
