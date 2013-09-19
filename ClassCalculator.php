<?php
 /**
 * TwitSpark OOP calculator
 *
 * PHP version 5
 *
 * @category CategoryName
 * @package  PackageName
 * @author   DvidSilva <contacto@dvidsilva.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://nothing.com
 */
 /**
 * This file implements an oop calculator for twitspark tech test
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the wtfpl license http://www.wtfpl.net/
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     DvidSilva <contacto@dvidsilva.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://nothing.com
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 *
 * @property array $parts
 * @property string $line
 * @property float  $result
 */
class Calculator
{
    private $_parts;
    private $_line; //userinput
    private $_result;

    public static $instance = null;

    /**
     * Called when initializing the object
     *
     * @param string $line the input from the user
     */
    private function __construct($line)
    {
        $this->_setLine($line);
        return true;
    }


    /**
     * Setter for the line variable
     *
     * @param string $line the input from the user
     *
     * @return null
     */
    private function _setLine($line)
    {
        $this->_line = $line;
        return true;
    }


    /**
     * Setter for the parts variable
     *
     * @param array $parts the input from the user
     *
     * @return null
     */
    private function _setParts($parts)
    {
        $this->_parts = $parts;
        return true;
    }


    /**
     * Read and parses the input from the user
     *
     * @return true
     */
    private function _parseLine()
    {
        $this->_setParts(explode(' ', $this->_line));
        return true;
    }

    /**
     * Process the input from the user and returns the result
     *
     * @return true
     */
    public function calculate()
    {
        $this->_parseLine();
        $result = $this->_parts[0];

        for ($i = 0; $i <= count($this->_parts); $i += 2) {
            if(!isset($this->_parts[$i+1]) ) break;
            // functions['+'=>_sum]
            // functions['^'=>_henry]
            // $this->functions[$parts[i]]();
            //
            //  new $calculation(param1, param2);
            //
            //  strategy design pattern // factory design pattern
            //  $calculator = new Calculator();
            //  $calculator->addCalculationFactory(new AdditionFactory());
            //  https://github.com/Seldaek/monolog
            //  review some libraries, symfony modules
            //  http://goo.gl/AlHPNu book oop patterns
            //  more patterns http://goo.gl/uSSG0u
            //  keep learning http://goo.gl/040g1e refactoring
            //
            switch ($this->_parts[$i+1]) {
                // options to replace switch statements, refactor
            case '+':
                $result = $this->_sum($result, $this->_parts[$i+2]);
                break;
            case '-':
                $result = $this->_substraction($result, $this->_parts[$i+2]);
                break;
            case '*':
                $result = $this->_multiplication($result, $this->_parts[$i+2]);
                break;
            case '/':
                $result = $this->_division($result, $this->_parts[$i+2]);
                break;
            case '%':
                $result = $this->_modulus($result, $this->_parts[$i+2]);
                break;
            }
        }
        return $result;
    }


    /**
     * Instantiates the class or returns the instantiated class
     *
     * @param string $line the exploded terms
     *
     * @return instance
     */
    public static function getInstance($line)
    {
        if (!isset(self::$instance) ) {
            self::$instance = new Calculator($line);
        }
        self::$instance->_setParts($line);
        return self::$instance;
    }


    /**
     * calculate a sum between two numbers
     *
     * @param int $s1 the first number
     * @param int $s2 the second number
     *
     * @return sum
     */
    private function _sum($s1, $s2)
    {
        return $s1 + $s2;
    }


    /**
     * calculate a substraction between two numbers
     *
     * @param int $s1 the first number
     * @param int $s2 the second number
     *
     * @return substraction
     */
    private function _substraction($s1, $s2)
    {
        return $s1 - $s2;
    }


    /**
     * calculate a multiplication between two numbers
     *
     * @param int $s1 the first number
     * @param int $s2 the second number
     *
     * @return multiplication
     */
    private function _multiplication($s1, $s2)
    {
        return $s1 * $s2;
    }


    /**
     * calculate a division between two numbers
     *
     * @param int $s1 the first number
     * @param int $s2 the second number
     *
     * @return division
     */
    private function _division($s1, $s2)
    {
        return $s1 / $s2;
    }

    /**
     * calculate a modulus between two numbers
     *
     * @param int $s1 the first number
     * @param int $s2 the second number
     *
     * @return modulus
     */
    private function _modulus($s1, $s2)
    {
        return $s1 % $s2;
    }


}
