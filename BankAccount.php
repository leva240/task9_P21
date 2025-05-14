<?php

require_once("InsufficientFundsException.php");

require_once("InvalidAmountException.php");


class BankAccount{

    public float $balance;

    public function __construct(float $initialBalance){
        try{
            if($initialBalance <= 0){
                throw new InvalidAmountException("Исключение: ваш изначальный баланс отрицателен либо, равен нулю\n");
            }else{
                $this->balance = $initialBalance;
            }
        }
        catch(InvalidAmountException $e){
            echo $e->getMessage();
        }

    }

    public function getBalance(){
        echo "Ваш текущий баланс:" . $this->balance . "\n";
    }

    public function deposit(float $amount){
        try{
            if($amount<= 0){
                throw new InvalidAmountException("Исключение: депозит отрицателен, либо равен нулю\n");   
            }else{
                $this->balance += $amount;
                echo "";
            }
        }catch(InvalidAmountException $e){
            echo $e->getMessage();
        }
    }

    public function withdraw(float $amount){
        try{
            if($amount<= 0 || $amount > $this->balance){
                throw new InvalidAmountException("Исключение: вывод отрицателен, либо равен нулю. Возможно Вы ввели больше вашего баланса\n");   
            }else{
                $this->balance -= $amount;
                echo "";
            }
        }catch(InvalidAmountException $e){
            echo $e->getMessage();
        }
    }
}