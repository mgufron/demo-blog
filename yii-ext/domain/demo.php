<?php

/* include the domain parser class */
include 'DomainParser.php';

/* domain that you want to parse */
$domain = 'this.is.my.domain.com';

$domainParser = new DomainParser($domain);

/* get the main domain */
print 'The main domain is: '.$domainParser['domain'];

/* get the sub domain */
print '<br/>The sub domain is: '.$domainParser['subdomain'];