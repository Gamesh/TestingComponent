# Test helpers for Symfony projects

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/InterNations/TestingComponent?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/InterNations/TestingComponent.svg)](https://travis-ci.org/InterNations/TestingComponent) [![Dependency Status](https://www.versioneye.com/user/projects/5347af6afe0d070896000135/badge.png)](https://www.versioneye.com/user/projects/5347af6afe0d070896000135) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/InterNations/TestingComponent.svg)](http://isitmaintained.com/project/InterNations/TestingComponent "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/InterNations/TestingComponent.svg)](http://isitmaintained.com/project/InterNations/TestingComponent "Percentage of issues still open")

A collection of test helpers to ease testing of Symfony3 projects.


### The base test class

```php
<?php
use InterNations\Component\Testing\AbstractTestCase;

class MyTest extends AbstractTestCase
{
}
```

### Accessing restricted members
```php
<?php
use InterNations\Component\Testing\AccessTrait;


class MyTest ...
{
    use AccessTrait;

    public function testSomething()
    {
        $this->setNonPublicProperty($this->sut, 'privateProperty', 'value');
        $this->callNonPublicMethod($this->sut, 'protectedMethod', ['arg1', 'arg2']);
    }
}

```
