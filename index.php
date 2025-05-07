<?php

require_once "BankAccount.php";

$account1 = new BankAccount(-3000);


$account2 = new BankAccount(3000);
echo $account2->getBalance();

echo $account2->deposit(20);
echo $account2->getBalance();


echo $account2->withdraw(40);
echo $account2->getBalance();




echo $account2->deposit(-20);
echo $account2->getBalance();


echo $account2->withdraw(-40);
echo $account2->getBalance();

echo $account2->withdraw(4000);
echo $account2->getBalance();