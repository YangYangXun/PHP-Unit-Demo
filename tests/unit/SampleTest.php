<?

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals('bar', 'bar1');
    }

    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(1 == 1);
    }

    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('JayniYang');

        $this->assertEquals($user->getFirstName(), 'JayniYang');
    }

    public function testThatWeCanGetTheLastName()
    {

        $user = new \App\Models\User;

        $user->setLastName('Takkke');

        $this->assertEquals($user->getLastName(), 'Takkke');
    }

    public function testFullNameIsReturn()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Pinkman');
        $user->setLastName('Snow');

        $this->assertEquals($user->getFullName(), 'Pinkman Snow');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Pinkman     ');
        $user->setLastName('     Snow');

        $this->assertEquals($user->getFirstName(), 'Pinkman');
        $this->assertEquals($user->getLastName(), 'Snow');

    }

}
