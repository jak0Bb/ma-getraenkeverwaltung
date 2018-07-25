<?php

/* SuluContactBundle:Template:base.list.html.twig */
class __TwigTemplate_79fc28c8e0b1262437f40be75a297e6c62cc78b2abe0a4332e2cc1a51507e962 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'options' => array($this, 'block_options'),
            'list' => array($this, 'block_list'),
            'content' => array($this, 'block_content'),
            'dialog' => array($this, 'block_dialog'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('options', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('list', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('dialog', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('data', $context, $blocks);
    }

    // line 1
    public function block_options($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    <div id=\"list-toolbar-container\" class=\"list-toolbar-container\"></div>
";
    }

    // line 6
    public function block_list($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
    }

    // line 10
    public function block_dialog($context, array $blocks = array())
    {
        echo "<div id=\"dialog\"></div>";
    }

    // line 12
    public function block_data($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SuluContactBundle:Template:base.list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 10,  67 => 8,  62 => 6,  57 => 3,  55 => 2,  52 => 1,  48 => 12,  45 => 11,  43 => 10,  40 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluContactBundle:Template:base.list.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\sulu\\src\\Sulu\\Bundle\\ContactBundle/Resources/views/Template/base.list.html.twig");
    }
}
