AirGramBundle
=====================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5650d234-1527-4365-b380-bbcf1fa0af67/small.png)](https://insight.sensiolabs.com/projects/5650d234-1527-4365-b380-bbcf1fa0af67) [![knpbundles.com](http://knpbundles.com/BranchBit/AirGramBundle/badge-short)](http://knpbundles.com/BranchBit/AirGramBundle)



### Step 1: Download BBITAirGramBundle using composer


```js
{
    "require": {
        "bbit/airgram-bundle": "dev-master",
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update bbit/airgram-bundle
```

Composer will install the bundle to your project's `vendor/BBIT` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new BBIT\AirGramBundle\BranchBitAirGramBundle(),
    );
}
```



### Step 3: Config


```js
branch_bit_air_gram:
    apis:
        default:
            key: airgramkey
            secret: airgramsecret
```



### Usage:

``` php
$send = $this->get('bbit_airgam')->subscribe('email@example.com');
$send = $this->get('bbit_airgam')->send('email@example.com', 'message');
```
