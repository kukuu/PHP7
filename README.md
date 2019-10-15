
# PHP 7 

PHP7 uses new Zend Engine 3.0 to improve application performance almost twice and 50% better memory consumption than PHP 5.6. It allows to serve more concurrent users without requiring any additional hardware. PHP 7 is designed and refactored considering today's workloads.

Note 
1. PHP breaks backwards compatibility

2. Secondly, PHP 7 has removed support for the mysql extension and affects the following: Any queries using a mysql_connect function will not function. PHP 7 only allows connections to a MySQL database using mysqli or PDO_MySQL.


## Most significant features of PHP 7


1. Improved performance − Having PHPNG code merged in PHP7, it is twice as fast as PHP 5.

2. Scalar type declarations.

3. Return type declarations.

4. Spaceship operator.

5. Constant arrays using define()

6. Anonymous classes.

7. Unicode codepoint escape syntax.

8. Closure: call()

9. Null coalescing operator.

10. Lower Memory Consumption − Optimized PHP 7 utilizes lesser resource.

11. Consistent 64-bit support − Consistent support for 64-bit architecture machines.

12. Improved Exception hierarchy − Exception hierarchy is improved.

13. Many fatal errors converted to Exceptions − Range of exceptions is increased covering many fatal error converted as exceptions.

14. Secure random number generator − Addition of new secure random number generator API.

15. Deprecated SAPIs and extensions removed − Various old and unsupported SAPIs and extensions are removed from the latest version.

16. Zero cost asserts − Support for zero cost assert added.


## What is deprecated PHP 7

PHP 4 style constructors (methods that have the same name as the class they are defined in) are deprecated, and will be removed in the future. PHP 7 will emit E_DEPRECATED if a PHP 4 constructor is the only constructor defined within a class. Classes that implement a __construct() method are unaffected.
