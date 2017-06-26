### 1.4.0 (2013-04-15)

  * Added possibility to mark fields as unique, so that random values are generated uniquely
  * Added a logger option which can be a callable or PSR-3 logger and will receive basic progress information
  * Added support for symfony 2.3
  * Fixed caching of loader objects in the factory method to handle different options given for each loader

### 1.3.0 (2013-01-22)

  * Added support for multi and random references together with properties: `5x @user*->property`

### 1.2.0 (2013-01-06)

  * Added support for calling methods: `methodName: [arg, arg2, ..]`
  * Added support for passing constructor arguments: `__construct: [arg, arg2]`
  * Added possibility to bypass constructors by setting: `__construct: false`

### 1.1.0 (2012-12-05)

  * Added possibility to reference an object's properties via `@reference->property`

### 1.0.0 (2012-11-22)

  * Initial release
