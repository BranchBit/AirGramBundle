AirGramBundle
=====================




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
