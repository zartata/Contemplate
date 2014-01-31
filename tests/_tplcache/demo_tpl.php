<?php 
/* Contemplate cached template 'demo' */
if (!class_exists('Contemplate_demo_Cached'))
{
final class Contemplate_demo_Cached extends Contemplate
{    
    /* constructor */
    public function __construct($id=null, $__=null)
    {
        /* initialize internal vars */
        $this->id = null; 
        $this->data = null;
        $this->_renderFunction = null;
        $this->_parent = null;
        $this->_blocks = null;
        
        $this->id = $id;
        
        /* parent tpl assign code starts here */
        $this->setParent( 'base' );
        /* parent tpl assign code ends here */
    }    
    
    /* tpl-defined blocks render code starts here */
    
    
    /* tpl block render method for block 'Block3' */
    private function _blockfn_Block3($__instance__) 
    { 
        $__p__ = '';
         
        $__p__ .= '' . "\n" . "\n" . '    <strong>Block3 is overriden by the demo template</strong>' . "\n" . "\n" . '    <br /><br />' . "\n" . '    ' . "\n" . '    <strong>Functions</strong><br />' . "\n" . '    <ul>' . "\n" . '    <li>trim(__FOO__, _) = ' . ( Contemplate::trim("__FOO__", "_") ) . '</li>' . "\n" . '    <li>trim(  FOO  ) = ' . ( Contemplate::trim("  FOO  ") ) . '</li>' . "\n" . '    <li>lowercase(FOO) = ' . ( Contemplate::lowercase("FOO") ) . '</li>' . "\n" . '    <li>lowercase(fOo) = ' . ( Contemplate::lowercase("fOo") ) . '</li>' . "\n" . '    <li>uppercase(foo) = ' . ( Contemplate::uppercase("foo") ) . '</li>' . "\n" . '    <li>uppercase(FoO) = ' . ( Contemplate::uppercase("FoO") ) . '</li>' . "\n" . '    <li>camelcase(camel_case, _) = ' . ( Contemplate::camelcase("camel_case", "_") ) . '</li>' . "\n" . '    <li>camelcase(camelCase) = ' . ( Contemplate::camelcase("camelCase") ) . '</li>' . "\n" . '    <li>snakecase(snakeCase, _) = ' . ( Contemplate::snakecase("snakeCase", "_") ) . '</li>' . "\n" . '    <li>snakecase(snake_case) = ' . ( Contemplate::snakecase("snake_case") ) . '</li>' . "\n" . '    </ul>' . "\n" . '    ' . "\n" . '    <br /><br />' . "\n" . '    ' . "\n" . '    ';        
        if ( !empty($__instance__->data['users']) )
        {
            foreach ( $__instance__->data['users'] as $i=>$usergroup )
            {
                $__instance__->data['i'] = $i;
                $__instance__->data['usergroup'] = $usergroup;         
                $__p__ .= '' . "\n" . '        <!-- call a (sub-)template -->' . "\n" . '        ' . Contemplate::tpl( "sub",  array("i"=>$__instance__->data['i'], "users"=>$__instance__->data['users']) ); 
                 
                $__p__ .= '' . "\n" . '    ';            
            }
        }
         
        $__p__ .= '' . "\n" . "\n" . '';
        return $__p__;
    }
    
    /* tpl block render method for block 'Block2' */
    private function _blockfn_Block2($__instance__) 
    { 
        $__p__ = '';
         
        $__p__ .= '' . "\n" . "\n" . '    <strong>Block2 is overriden by the demo template</strong>' . "\n" . "\n" . '    <br /><br />' . "\n" . "\n" . '    <strong>A table</strong><br />' . "\n" . '    ' . Contemplate::htmltable($__instance__->data['table_data'], $__instance__->data['table_options']); 
         
        $__p__ .= '' . "\n" . "\n" . '    <br /><br />' . "\n" . '    ' . "\n" . '    <strong>A select box</strong><br />' . "\n" . '    ' . Contemplate::htmlselect($__instance__->data['select_data'], $__instance__->data['select_options']); 
         
        $__p__ .= '' . "\n" . "\n" . '    <br /><br />' . "\n" . '    ' . "\n" . '    <strong>A table with alternative format</strong><br />' . "\n" . '    ' . Contemplate::htmltable($__instance__->data['table_data'], array("header"=>true)); 
         
        $__p__ .= '' . "\n" . "\n" . '    <br /><br />' . "\n" . '    ' . "\n" . '    <strong>A select box with alternative format</strong><br />' . "\n" . '    ' . Contemplate::htmlselect($__instance__->data['select_data'], array(             "optgroups"=>array("group1", "group2", "group3"),             "selected"=>3,             "multiple"=>false,             "style"=>"width:200px;"         )); 
         
        $__p__ .= '' . "\n" . '    ' . "\n" . '    <br /><br />' . "\n" . '    <!-- include a (sub-)template file -->' . "\n" . '     <!-- print a localized date php-style -->' . "\n" . '<strong>A (localized) date, PHP-style</strong><br />' . "\n" . ( Contemplate::ldate("M, d", Contemplate::now()) ) . "\n" ; 
         
        $__p__ .= '' . "\n" . "\n" . '';
        return $__p__;
    }
    /* tpl-defined blocks render code ends here */
    
    /* render a tpl block method */
    public function renderBlock($block, $__instance__=null)
    {
        if ( !$__instance__ ) $__instance__ = $this;
        
        $method = '_blockfn_' . $block;
        
        if ( method_exists($this, $method) ) return $this->{$method}($__instance__);
        
        elseif ( $this->_parent ) return $this->_parent->renderBlock($block, $__instance__);
        
        return '';
    }
    
    /* tpl render method */
    public function render($data, $__instance__=null)
    {
        $__p__ = '';
        if ( !$__instance__ ) $__instance__ = $this;
        
        if ( $this->_parent )
        {
            $__p__ = $this->_parent->render($data, $__instance__);
        }
        else
        {
            /* tpl main render code starts here */
            $__p__ = '';
            /* tpl main render code ends here */
        }
        $this->data = null;
        return $__p__;
    }
}
}