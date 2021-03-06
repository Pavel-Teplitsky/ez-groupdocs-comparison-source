
<?php
/*
$FunctionList = array();
$FunctionList['list'] = array(
'name' => 'list',
'operation_types' => array( 'read' ),
'call_method' => array( 'include_file' => 'extension/groupdocsviewer/modules/groupdocscomparison/groupdocscomparisonfunctioncollection.php',
'class' => 'GroupdocsComparisonFunctionCollection',
'method' => 'fetchList' ),
'parameter_type' => 'standard',
'parameters' => array( array( 'name' => 'offset',
'required' => false,
'default' => false ),
array( 'name' => 'limit',
'required' => false,
'default' => false ) ) );
$FunctionList = array();
*/
// {fetch('modul1','list', hash('as_object', true()))|attribute(show)} 
$FunctionList['list'] = array( 'name' => 'list', 
                               'operation_types' => array( 'read' ), 
                               'call_method' => array( 'class' => 'GroupdocsComparisonFunctionCollection', 
                                                       'method' => 'fetchList' ), 
                               'parameter_type' => 'standard', 
                               'parameters' => array( array( 'name' => 'as_object', 
                                                             'type' => 'string', 
                                                             'required' => false ) ) 
                        );
 
//{fetch('modul1','count', hash())} 
/*
$FunctionList['count'] = array( 'name' => 'count', 
                                'operation_types' => array( 'read' ), 
                                'call_method' => array( 'class' => 'GroupDocsComparisonFunctionCollection', 
                                                        'method' => 'fetchJacExtensionDataListCount' ), 
                                'parameter_type' => 'standard', 
                                'parameters' => array() 
                        ); 
 */
?>