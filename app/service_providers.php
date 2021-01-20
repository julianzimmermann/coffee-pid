<?php

use JzIT\Config\ConfigServiceProvider;
use JzIT\Db\DbServiceProvider;
use JzIT\Http\HttpServiceProvider;
use JzIT\Pid\PidServiceProvider;
use JzIT\PidApi\PidApiServiceProvider;
use JzIT\Serializer\SerializerServiceProvider;

$serviceProviders[] = new SerializerServiceProvider();
$serviceProviders[] = new ConfigServiceProvider();
$serviceProviders[] = new HttpServiceProvider();
$serviceProviders[] = new DbServiceProvider();
$serviceProviders[] = new PidServiceProvider();
$serviceProviders[] = new PidApiServiceProvider();
