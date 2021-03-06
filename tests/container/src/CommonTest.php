<?php
namespace Aura\Auth\_Config;

use Aura\Di\_Config\AbstractContainerTest;

class CommonTest extends AbstractContainerTest
{
    protected function getConfigClasses()
    {
        return array(
            'Aura\Auth\_Config\Common'
        );
    }

    public function provideGet()
    {
        return array(
            array('aura/auth:auth', 'Aura\Auth\Auth'),
            array('aura/auth:login_service', 'Aura\Auth\Service\LoginService'),
            array('aura/auth:logout_service', 'Aura\Auth\Service\LogoutService'),
            array('aura/auth:resume_service', 'Aura\Auth\Service\ResumeService'),
            array('aura/auth:session', 'Aura\Auth\Session\Session'),
            array('aura/auth:adapter', 'Aura\Auth\Adapter\NullAdapter'),
        );
    }

    public function provideNewInstance()
    {
        return array(
            array('Aura\Auth\Adapter\HtpasswdAdapter'),
            array('Aura\Auth\Adapter\ImapAdapter'),
            array('Aura\Auth\Adapter\LdapAdapter'),
            array('Aura\Auth\Adapter\PdoAdapter', array('pdo' => new FakePDO)),
            array('Aura\Auth\Auth'),
            array('Aura\Auth\Service\LoginService'),
            array('Aura\Auth\Service\LogoutService'),
            array('Aura\Auth\Service\ResumeService'),
            array('Aura\Auth\Session\Timer'),
            array('Aura\Auth\Session\Session'),
        );
    }
}
