<?php

$eZTemplateOperatorArray = array();
$eZTemplateOperatorArray[] = array( 'script' => 'extension/ezwebin/autoloads/ezkeywordlist.php',
                                    'class' => 'eZKeywordList',
                                    'operator_names' => array( 'ezkeywordlist' ) );
$eZTemplateOperatorArray[] = array( 'script' => 'extension/ezwebin/autoloads/ezarchive.php',
                                    'class' => 'eZArchive',
                                    'operator_names' => array( 'ezarchive' ) );
$eZTemplateOperatorArray[] = array( 'script' => 'extension/ezwebin/autoloads/eztagcloud.php',
                                    'class' => 'eZTagCloud',
                                    'operator_names' => array( 'eztagcloud' ) );

?>