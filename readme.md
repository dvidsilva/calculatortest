# Technical test for job applicant: calculator

Your assignment is to write a calculator script.  To get you started, a very simple example is attached.

The calculator will ask for a calculation, read the input, do the calculation and return the result.  The important part
of the assignment is the calculation part.  This is why a headstart is given with the script itself so you don 't loose
time on reading input and parsing it.  The parsing of the calculation is a simple explode on a space character,
anything else is considered "out of scope".

The following calculations must be supported:

- addition
- substraction
- multiplication
- division
- modulus

*Important!*

This skill test will test your ability to properly structure programming logic into object oriented structures.
The important thing is that you are able to demonstrate a fair amount of object oriented programming knowledge even if
you don 't finish the program or if executing it fails.

You should also program using industry best practices, but without loosing too much time.  We want you to spend a 100%
of your time on the programming with zero overhead on setup.


# Example usage

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):
Just split the numbers from the operators in space
CALCULATION: 1 + 1 - 4 * 4
RESULT = -14

```

## Some examples


Addition

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 1 + 4
RESULT = 5

```

Substraction

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 8 - 9
RESULT = -1
```

Multiplication

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 3 * 9
RESULT = 27
```

Division

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 9 / 3
RESULT = 3
```

Modulus

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 5 % 2
RESULT = 1
```


## Notes

### Combined operations should be supported

```
$ php calculator_assignment.php

Enter a calculation and press enter to continue (empty line to quit):

CALCULATION: 4 + 5 % 2 + 50
RESULT = 55
```

### Precedence

Multiplication, division and modulus have precedance.

e.g. (2 + 4) * 2 = 12 and NOT 10

### There is no need to take brackets into account.

This is not allowed:

php calculator.php 4 + (5 + 2) * 0

### No eval()

You are not allowed to make use of the eval() function, like the example script does.
