<?php
/**
 * Created by PhpStorm.
 * User: vs
 * Date: 04/08/15
 * Time: 14:34
 */

namespace CreationalPatterns\Prototype;

require(__DIR__ . '/../../autoload.php');

class Client
{
    private $_market;
    private $_manage;
    private $_engineer;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->_market;
        $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "tess.png");
        $this->showEmployee($Tess);

        $Jacob = clone $this->_market;
        $this->setEmployee($Jacob, "Jacob Jones", 102, "jj101-2234", "jacob.png");
        $this->showEmployee($Jacob);

        $Ricky = $this->_manage;
        $this->setEmployee($Ricky, "Ricky Rodriguez", 203, "rr203-5634", "ricky.png");
        $this->showEmployee($Ricky);

        $Olivia = $this->_engineer;
        $this->setEmployee($Olivia, "Olivia Perez", 302, "op301-1278", "olivia.png");
        $this->showEmployee($Olivia);

        $John = clone $this->_engineer;
        $this->setEmployee($John, "John Jackson", 301, "jj302-1454", "john.png");
        $this->showEmployee($John);
    }

    private function makeConProto()
    {
        $this->_market = new Marketing();
        $this->_manage = new Management();
        $this->_engineer = new Engineering();
    }

    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic("pix/$px");
    }

    private function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getPic();
        echo $px . PHP_EOL;
        echo $employeeNow->getName() . PHP_EOL;
        echo $employeeNow->getDept() . PHP_EOL;
        echo $employeeNow->getId() . PHP_EOL;
    }
}

new Client();