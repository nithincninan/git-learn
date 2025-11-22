# git-learn
To learn Git

root@fbc19b33dd85:/var/www/mrpricemlss# php pub/laminas_ldap_test.php
=== Laminas LDAP Test Script ===
Connecting to LDAP...
LDAP bind successful!
Performing LDAP search...
Laminas\Ldap\Collection Object
(
    [iterator:protected] => Laminas\Ldap\Collection\DefaultIterator Object
        (
            [ldap:protected] => Laminas\Ldap\Ldap Object
                (
                    [connectString:Laminas\Ldap\Ldap:private] => ldap://ldap.forumsys.com:389
                    [options:protected] => Array
                        (
                            [host] => ldap.forumsys.com
                            [port] => 389
                            [useSsl] =>
                            [username] => cn=read-only-admin,dc=example,dc=com
                            [password] => password
                            [bindRequiresDn] => 1
                            [baseDn] => dc=example,dc=com
                            [accountCanonicalForm] =>
                            [accountDomainName] =>
                            [accountDomainNameShort] =>
                            [accountFilterFormat] =>
                            [allowEmptyPassword] =>
                            [useStartTls] =>
                            [optReferrals] =>
                            [tryUsernameSplit] => 1
                            [reconnectAttempts] => 0
                            [networkTimeout] =>
                            [saslOpts] =>
                        )

                    [resource:protected] => LDAP\Connection Object
                        (
                        )

                    [boundUser:protected] => cn=read-only-admin,dc=example,dc=com
                    [rootDse:protected] =>
                    [schema:protected] =>
                    [reconnectCount:protected] => 0
                    [reconnectsAttempted:protected] => 0
                    [lastConnectBindParams:protected] => Array
                        (
                            [Laminas\Ldap\Ldap::bind] => Array
                                (
                                    [username] =>
                                    [password] =>
                                )

                            [Laminas\Ldap\Ldap::connect] => Array
                                (
                                    [host] =>
                                    [port] =>
                                    [useSsl] =>
                                    [useStartTls] =>
                                    [networkTimeout] =>
                                )

                        )

                )

            [resultId:protected] => LDAP\Result Object
                (
                )

            [current:protected] =>
            [itemCount:protected] => 1
            [attributeNameTreatment:protected] => 1
            [entries:protected] => Array
                (
                    [0] => Array
                        (
                            [resource] => LDAP\ResultEntry Object
                                (
                                )

                            [sortValue] =>
                        )

                )

            [sortFunction:protected] => strnatcasecmp
        )

    [current:protected] => -1
    [cache:protected] => Array
        (
        )

)
Search Results:
Array
(
    [cn] => Array
        (
            [0] => Albert Einstein
        )

    [dn] => uid=einstein,dc=example,dc=com
    [mail] => Array
        (
            [0] => einstein@ldap.forumsys.com
        )

    [objectclass] => Array
        (
            [0] => inetOrgPerson
            [1] => organizationalPerson
            [2] => person
            [3] => top
        )

    [sn] => Array
        (
            [0] => Einstein
        )

    [telephonenumber] => Array
        (
            [0] => 314-159-2653
        )

    [uid] => Array
        (
            [0] => einstein
        )

)
root@fbc19b33dd85:/var/www/mrpricemlss#
root@fbc19b33dd85:/var/www/mrpricemlss#
root@fbc19b33dd85:/var/www/mrpricemlss#
root@fbc19b33dd85:/var/www/mrpricemlss# php pub/laminas_ldap_test.php
=== Laminas LDAP Test Script ===
Connecting to LDAP...
LDAP bind successful!
Performing LDAP search...
LDAP\Result Object
(
)
