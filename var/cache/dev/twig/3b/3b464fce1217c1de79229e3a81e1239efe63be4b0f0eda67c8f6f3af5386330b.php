<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cfccb0801fd73d1713afb113bc558fa5a62e5c0277ec6c9010457a2e53e1484c extends Twig_Template
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
        $__internal_8460219a8ee166808e60144233ff778e68a664b68a467a57d5b487aca09d7d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8460219a8ee166808e60144233ff778e68a664b68a467a57d5b487aca09d7d31->enter($__internal_8460219a8ee166808e60144233ff778e68a664b68a467a57d5b487aca09d7d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_76433f04566f9777fa13b490ade08411c0e51fdbb8a49d159b38a0ad62183a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76433f04566f9777fa13b490ade08411c0e51fdbb8a49d159b38a0ad62183a66->enter($__internal_76433f04566f9777fa13b490ade08411c0e51fdbb8a49d159b38a0ad62183a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8460219a8ee166808e60144233ff778e68a664b68a467a57d5b487aca09d7d31->leave($__internal_8460219a8ee166808e60144233ff778e68a664b68a467a57d5b487aca09d7d31_prof);

        
        $__internal_76433f04566f9777fa13b490ade08411c0e51fdbb8a49d159b38a0ad62183a66->leave($__internal_76433f04566f9777fa13b490ade08411c0e51fdbb8a49d159b38a0ad62183a66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
