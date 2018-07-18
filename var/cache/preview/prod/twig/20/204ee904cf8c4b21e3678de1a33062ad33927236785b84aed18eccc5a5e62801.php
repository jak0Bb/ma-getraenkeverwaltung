<?php

/* master.html.twig */
class __TwigTemplate_6319a1957dcb94c21b527a74b46071f22026d2eebc77e5b7db7dbb013dd06a47 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('style', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        </header>

        <form action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_search.website_search");
        echo "\" method=\"GET\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\" />
            <input type=\"submit\" value=\"Go\" />
        </form>

        <section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
            ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        </section>

        <aside>
            ";
        // line 39
        $this->displayBlock('aside', $context, $blocks);
        // line 40
        echo "        </aside>

        <footer>
            ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "        </footer>

        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 10
    public function block_style($context, array $blocks = array())
    {
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "                <nav>
                    <ul>
                        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentRootPath(), "html", null, true);
        echo "\">Homepage</a></li>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), array("main")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li>
                                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", array())), "html", null, true);
            echo "\"
                                   title=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </ul>
                </nav>
            ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "                <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SULU</p>
            ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  156 => 44,  153 => 43,  148 => 39,  143 => 35,  137 => 24,  126 => 21,  122 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 15,  104 => 14,  99 => 10,  94 => 8,  88 => 49,  86 => 48,  82 => 46,  80 => 43,  75 => 40,  73 => 39,  68 => 36,  66 => 35,  57 => 29,  53 => 27,  51 => 14,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "master.html.twig", "C:\\Users\\Lorenz\\Desktop\\MASSIVEART\\ma-getraenkeverwaltung\\app\\Resources\\views\\master.html.twig");
    }
}
