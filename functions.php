<?php

/**
 * delete a value from an array using unset
 * @param $value
 * @param $array
 */
function array_delete( $value, $array )
{
    $key = array_search( $value, $array );

    if ( false !== $key ) {
        // unset leaves the index in place
        unset( $array[$key] );
    }

    // array_values is like "reindexing"
    return array_values( $array );
}

// ------------------ Methods 2 array_search & array_splice------------

/**
 * delete a value from an array using array_splice
 * @param  $value
 * @param  $array
 * @return array
 */
function array_delete2( $value, $array )
{
    $key       = array_search( $value, $array );
    $discarded = array_splice( $array, $key, 1 );

    return $array;
}

// -----------------------Methods 3 array_diff -------------------------

/**
 * delete a value from an array using array_diff
 * @param $value
 * @param $array
 */
function array_delete3( $value, $array )
{
    // make sure 2nd argument is an arrays
    return array_diff( $array, array( $value ) );
}
