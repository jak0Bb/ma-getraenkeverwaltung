<?php

/* master.html.twig */
class __TwigTemplate_4825e852a286377a54a88561eb6c35da4fadb4440cad0634537a2d3ac1d6e20e extends Twig_Template
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

        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"assets/css/logo-nav.css\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\"> 
\t\t
        ";
        // line 12
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('style', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <header>
            ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "        </header>

        <form action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sulu_search.website_search");
        echo "\" method=\"GET\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\" />
            <input type=\"submit\" value=\"Go\" />
        </form>

        <section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        </section>

        <aside>
            ";
        // line 50
        $this->displayBlock('aside', $context, $blocks);
        // line 51
        echo "        </aside>

        <footer>
            ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "        </footer>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "
    </body>
</html>
";
    }

    // line 12
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 14
    public function block_style($context, array $blocks = array())
    {
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"assets/img/logo.png\" alt=\"\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), array("main")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension']->getContentPath(twig_get_attribute($this->env, $this->source, $context["item"], "url", array())), "html", null, true);
            echo "\"
                                       title=\"";
            // line 31
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
        // line 34
        echo "                        </ul>
                    </div>
                </nav>Z
            ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    // line 50
    public function block_aside($context, array $blocks = array())
    {
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "                <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SULU</p>
            ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "
            <script src=\"assets/js/jquery.min.js\"></script>
            <script src=\"assets/js/bootstrap.min.js\"></script>

        ";
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
        return array (  175 => 60,  172 => 59,  165 => 55,  162 => 54,  157 => 50,  152 => 46,  145 => 34,  134 => 31,  130 => 30,  127 => 29,  123 => 28,  112 => 19,  109 => 18,  104 => 14,  99 => 12,  92 => 65,  90 => 59,  86 => 57,  84 => 54,  79 => 51,  77 => 50,  72 => 47,  70 => 46,  61 => 40,  57 => 38,  55 => 18,  50 => 15,  48 => 14,  45 => 13,  43 => 12,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "master.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\app\\Resources\\views\\master.html.twig");
    }
}
