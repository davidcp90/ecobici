<?php
namespace App;

use App\User;
use Illuminate\Support\Facades\Hash;
use Codeception\Util\Stub;

class LoginTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testRegisterEVOne()
    {
        /*Stubs*/
        $userTester = Stub::make('User',['getName' =>'bryan','getEmail'=>'bryan@gmail.com','getPassword' =>'udistrital123456']);
        $email = $user->getEmail();
        $password = Hash::make($user->getPassword());

        Auth::register(['email' => $email, 'password' => $password]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }
    public function testRegisterEVTwo()
    {
        /*Stubs*/
        $email = '1234567890@123456789.123456789';
        $password = 'password';

        User::register(['email' => $email, 'password' => $password]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }

}