<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
// This is the version of the plugin.                                                                                               
                                                                                                                                    
                                                                                                                                    
$plugin->component = 'theme_animated';                                                                                                 
$plugin->version   = 2023041800;
$plugin->requires  = 2023041800;                                                                                                         
// This is a list of plugins, this plugin depends on (and their versions).                                                          
$plugin->dependencies = [                                                                                                           
    'theme_animated' => '2023041800'                                                                                                   
];