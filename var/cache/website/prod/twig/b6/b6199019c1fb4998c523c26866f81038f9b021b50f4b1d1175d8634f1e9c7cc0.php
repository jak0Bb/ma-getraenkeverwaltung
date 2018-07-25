<?php

/* SuluCommunityBundle:Password:forget-form.html.twig */
class __TwigTemplate_cc739c72773e4fcc4bd716b686390bd059a63b4cbad0f9e1dd2783549ee24c09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SuluCommunityBundle::master.html.twig", "SuluCommunityBundle:Password:forget-form.html.twig", 1);
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
            echo "\t\t<h1> Success </h1>
        <p>
We've sent you an email. Click the link in the email to reset your password. 
If you don't see the email, check other places it might be, like your junk, spam, social, or other folders. 
        </p>
    ";
        } else {
            // line 11
            echo "\t    <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password"), "html", null, true);
            echo "</h1>
\t\t";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SuluCommunityBundle:Password:forget-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  46 => 11,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SuluCommunityBundle:Password:forget-form.html.twig", "C:\\xampp\\htdocs\\ma-getraenkeverwaltung\\vendor\\sulu\\community-bundle/Resources/views/Password/forget-form.html.twig");
    }
}
