<?php

/* SuluCommunityBundle:Profile:profile-form.html.twig */
class __TwigTemplate_64ea2415f354e3811f6080d618812bb0496e9296c271dab9dfbe9897fbf6195a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "SuluCommunityBundle:Profile:profile-form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        if (($context["success"] ?? null)) {
            // line 7
            echo "        <p class=\"success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("save_profile_finished"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 11
        echo "    <div class=\"form-login form-profile box\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Profile:profile-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  52 => 11,  46 => 8,  43 => 7,  41 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Profile:profile-form.html.twig", "C:\\Users\\Lorenz\\Desktop\\Node\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Profile/profile-form.html.twig");
    }
}
