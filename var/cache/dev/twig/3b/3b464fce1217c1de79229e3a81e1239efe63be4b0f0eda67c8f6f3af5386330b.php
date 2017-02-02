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
        $__internal_42882d6cdd39e816b28b719400add1e1757acdc8bf5f93b6719b06265be5a6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42882d6cdd39e816b28b719400add1e1757acdc8bf5f93b6719b06265be5a6a8->enter($__internal_42882d6cdd39e816b28b719400add1e1757acdc8bf5f93b6719b06265be5a6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6da85dffdaf09063b794795d1b432f46741b55bc518092c2fbc7f3228ee3e2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da85dffdaf09063b794795d1b432f46741b55bc518092c2fbc7f3228ee3e2ee->enter($__internal_6da85dffdaf09063b794795d1b432f46741b55bc518092c2fbc7f3228ee3e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_42882d6cdd39e816b28b719400add1e1757acdc8bf5f93b6719b06265be5a6a8->leave($__internal_42882d6cdd39e816b28b719400add1e1757acdc8bf5f93b6719b06265be5a6a8_prof);

        
        $__internal_6da85dffdaf09063b794795d1b432f46741b55bc518092c2fbc7f3228ee3e2ee->leave($__internal_6da85dffdaf09063b794795d1b432f46741b55bc518092c2fbc7f3228ee3e2ee_prof);

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
