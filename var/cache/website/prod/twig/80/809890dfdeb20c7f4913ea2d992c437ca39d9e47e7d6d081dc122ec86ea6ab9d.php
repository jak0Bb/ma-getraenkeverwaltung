<?php

/* SuluCommunityBundle:Password:reset-form.html.twig */
class __TwigTemplate_69ff41747ee325585ef2f8151dedb95442ba67567d41dd1f0342c8be25fb3083 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluCommunityBundle::master.html.twig", "SuluCommunityBundle:Password:reset-form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuluCommunityBundle::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "send"), "method") == "true")) {
            // line 5
            echo "        <script type=\"text/javascript\">
\t\t\twindow.location = '../login';
\t\t</script>
    ";
        } else {
            // line 9
            echo "        ";
            if (($context["form"] ?? null)) {
                // line 10
                echo "\t\t\t<h1> Enter New Password </h1>
            ";
                // line 11
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
                echo "
        ";
            } else {
                // line 13
                echo "            <h1> Error </h1>
\t\t\t<p> Your Reset Token Was Invalid </p>
        ";
            }
            // line 16
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Password:reset-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  55 => 13,  50 => 11,  47 => 10,  44 => 9,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Password:reset-form.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Password/reset-form.html.twig");
    }
}
