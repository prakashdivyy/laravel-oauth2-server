<?php

use Illuminate\Database\Seeder;

class OauthUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('oauth_users')->delete();

        \DB::table('oauth_users')->insert(array(
            0 =>
                array(
                    'username' => '1106004815',
                    'password' => sha1('4zB07IBM'),
                    'first_name' => '1106004815',
                    'last_name' => 'M Baja Hamzah',
                ),
            1 =>
                array(
                    'username' => '1206255753',
                    'password' => sha1('OEWC0AkI'),
                    'first_name' => '1206255753',
                    'last_name' => 'Andhika Anggriawan S',
                ),
            2 =>
                array(
                    'username' => '1206289773',
                    'password' => sha1('4PSogHFV'),
                    'first_name' => '1206289773',
                    'last_name' => 'Risdani Agung Wibowo',
                ),
            3 =>
                array(
                    'username' => '1306386693',
                    'password' => sha1('k0ghzgKW'),
                    'first_name' => '1306386693',
                    'last_name' => 'Rachmad Ardiansyah',
                ),
            4 =>
                array(
                    'username' => '1306407344',
                    'password' => sha1('hosE5zt7'),
                    'first_name' => '1306407344',
                    'last_name' => 'Kevin Kristian',
                ),
            5 =>
                array(
                    'username' => '1406543656',
                    'password' => sha1('w9DiHuNL'),
                    'first_name' => '1406543656',
                    'last_name' => 'Mohammad Ghautsul Azham',
                ),
            6 =>
                array(
                    'username' => '1406543813',
                    'password' => sha1('6304J07z'),
                    'first_name' => '1406543813',
                    'last_name' => 'Angga Dwi Arifandi',
                ),
            7 =>
                array(
                    'username' => '1406543832',
                    'password' => sha1('FkF2DLkU'),
                    'first_name' => '1406543832',
                    'last_name' => 'Fathya Afifah',
                ),
            8 =>
                array(
                    'username' => '1406543851',
                    'password' => sha1('J4QfPq8S'),
                    'first_name' => '1406543851',
                    'last_name' => 'Abdul Hakim',
                ),
            9 =>
                array(
                    'username' => '1406546166',
                    'password' => sha1('vS9zKN9d'),
                    'first_name' => '1406546166',
                    'last_name' => 'Bimo Prabowo Reksoprodjo',
                ),
            10 =>
                array(
                    'username' => '1406558986',
                    'password' => sha1('1tWwNhao'),
                    'first_name' => '1406558986',
                    'last_name' => 'Glenn Reynaldi Halomoan',
                ),
            11 =>
                array(
                    'username' => '1406559036',
                    'password' => sha1('ybrOjPv2'),
                    'first_name' => '1406559036',
                    'last_name' => 'Galuh Estya Adisaputra',
                ),
            12 =>
                array(
                    'username' => '1406559042',
                    'password' => sha1('GFz8HYz2'),
                    'first_name' => '1406559042',
                    'last_name' => 'Agni Wira Buana',
                ),
            13 =>
                array(
                    'username' => '1406559055',
                    'password' => sha1('9IcE0GsD'),
                    'first_name' => '1406559055',
                    'last_name' => 'Muhammad Ghozi',
                ),
            14 =>
                array(
                    'username' => '1406559111',
                    'password' => sha1('BKAWl6YV'),
                    'first_name' => '1406559111',
                    'last_name' => 'Rizky Noviandi Purwono',
                ),
            15 =>
                array(
                    'username' => '1406566400',
                    'password' => sha1('hEGh7WzC'),
                    'first_name' => '1406566400',
                    'last_name' => 'Geraldo William',
                ),
            16 =>
                array(
                    'username' => '1406569781',
                    'password' => sha1('6mvZrZ9f'),
                    'first_name' => '1406569781',
                    'last_name' => 'George Albert',
                ),
            17 =>
                array(
                    'username' => '1406571842',
                    'password' => sha1('yLNLkL15'),
                    'first_name' => '1406571842',
                    'last_name' => 'Fatah Fadhlurrohman',
                ),
            18 =>
                array(
                    'username' => '1406573822',
                    'password' => sha1('62abRtKN'),
                    'first_name' => '1406573822',
                    'last_name' => 'Kelvin',
                ),
            19 =>
                array(
                    'username' => '1406577386',
                    'password' => sha1('W2xoXXU7'),
                    'first_name' => '1406577386',
                    'last_name' => 'Nandana Prabaswara',
                ),
            20 =>
                array(
                    'username' => '1406577392',
                    'password' => sha1('2TNFn5Ri'),
                    'first_name' => '1406577392',
                    'last_name' => 'Mgs. Muhammad Thoyib Antarnusa',
                ),
            21 =>
                array(
                    'username' => '1406577915',
                    'password' => sha1('6Z3ZbnE1'),
                    'first_name' => '1406577915',
                    'last_name' => 'M Rizky Ramadhan',
                ),
            22 =>
                array(
                    'username' => '1406578275',
                    'password' => sha1('XchpWyV3'),
                    'first_name' => '1406578275',
                    'last_name' => 'Muhammad Yusuf Imam',
                ),
            23 =>
                array(
                    'username' => '1406578874',
                    'password' => sha1('lUeD8NdI'),
                    'first_name' => '1406578874',
                    'last_name' => 'Fahri Achmadi',
                ),
            24 =>
                array(
                    'username' => '1406622811',
                    'password' => sha1('RH9WNdyK'),
                    'first_name' => '1406622811',
                    'last_name' => 'Falah Prasetyo Waluyo',
                ),
            25 =>
                array(
                    'username' => '1406622830',
                    'password' => sha1('up2Dmhne'),
                    'first_name' => '1406622830',
                    'last_name' => 'Faris Ihsaan Fauzi',
                ),
            26 =>
                array(
                    'username' => '1406623865',
                    'password' => sha1('9TazSKvn'),
                    'first_name' => '1406623865',
                    'last_name' => 'Irvanno Taqi Irmawan',
                ),
            27 =>
                array(
                    'username' => '1506688790',
                    'password' => sha1('OOMxl8hy'),
                    'first_name' => '1506688790',
                    'last_name' => 'Fayya Nadhira Anyatasia',
                ),
            28 =>
                array(
                    'username' => '1506688986',
                    'password' => sha1('j5lFZA59'),
                    'first_name' => '1506688986',
                    'last_name' => 'Andri Nur Rochman',
                ),
            29 =>
                array(
                    'username' => '1506711036',
                    'password' => sha1('Jv5aAM0y'),
                    'first_name' => '1506711036',
                    'last_name' => 'Abdullah Ahmad',
                ),
            30 =>
                array(
                    'username' => '1706124163',
                    'password' => sha1('28IVpH5G'),
                    'first_name' => '1706124163',
                    'last_name' => 'Rian Pramudia Salasa',
                ),
        ));


    }
}