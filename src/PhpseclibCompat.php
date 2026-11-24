<?php

/**
 * Backward-compatibility shim for the legacy phpseclib v2/v3 namespace.
 *
 * phpseclib v4 moved its classes into the "phpseclib4\" namespace. When v4 is
 * installed we alias the old "phpseclib\Math\BigInteger" name back onto the new
 * class so existing code keeps working unchanged. Under v3 the class already
 * exists natively, so nothing is done.
 */

if (!class_exists('phpseclib\\Math\\BigInteger')) {
    if (class_exists('phpseclib4\\Math\\BigInteger')) {
        class_alias('phpseclib4\\Math\\BigInteger', 'phpseclib\\Math\\BigInteger');
    }
}
