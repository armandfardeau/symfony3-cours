<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b540404aeab9a48a4a94eb6f18db8f94cbfc282f202af1e096a1191ff7269ba1 extends Twig_Template
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
        $__internal_aace4c7dc702abb5101cd84244677c9139add5f317cf5c228cc9501ede952e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aace4c7dc702abb5101cd84244677c9139add5f317cf5c228cc9501ede952e51->enter($__internal_aace4c7dc702abb5101cd84244677c9139add5f317cf5c228cc9501ede952e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f63212d597726e20a6c1ca83903f3c8e00868982ef75f101bc572d7be077657c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63212d597726e20a6c1ca83903f3c8e00868982ef75f101bc572d7be077657c->enter($__internal_f63212d597726e20a6c1ca83903f3c8e00868982ef75f101bc572d7be077657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aace4c7dc702abb5101cd84244677c9139add5f317cf5c228cc9501ede952e51->leave($__internal_aace4c7dc702abb5101cd84244677c9139add5f317cf5c228cc9501ede952e51_prof);

        
        $__internal_f63212d597726e20a6c1ca83903f3c8e00868982ef75f101bc572d7be077657c->leave($__internal_f63212d597726e20a6c1ca83903f3c8e00868982ef75f101bc572d7be077657c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
