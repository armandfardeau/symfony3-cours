<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c036bab99e8f92609225410de12ed0e51ce55b57e31b9041065b8285b82d0e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f4e4d3e9b9f172cd39394d73c5a75225da28a59960f9e5e3bf2efbd2caa1fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4e4d3e9b9f172cd39394d73c5a75225da28a59960f9e5e3bf2efbd2caa1fbf->enter($__internal_9f4e4d3e9b9f172cd39394d73c5a75225da28a59960f9e5e3bf2efbd2caa1fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_829f5f2aa15b34592186989a077ed3988eef16b39c7457d777e1aae3cbc6fa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829f5f2aa15b34592186989a077ed3988eef16b39c7457d777e1aae3cbc6fa1e->enter($__internal_829f5f2aa15b34592186989a077ed3988eef16b39c7457d777e1aae3cbc6fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9f4e4d3e9b9f172cd39394d73c5a75225da28a59960f9e5e3bf2efbd2caa1fbf->leave($__internal_9f4e4d3e9b9f172cd39394d73c5a75225da28a59960f9e5e3bf2efbd2caa1fbf_prof);

        
        $__internal_829f5f2aa15b34592186989a077ed3988eef16b39c7457d777e1aae3cbc6fa1e->leave($__internal_829f5f2aa15b34592186989a077ed3988eef16b39c7457d777e1aae3cbc6fa1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
