<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e015407930b448ce8e9af53b594b454e3f6bbe4ec5906f6ccbc7b88cf15750c0 extends Twig_Template
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
        $__internal_b827fe63e2ea2a7cca0adf3af9abe83aea0dfceed01a7da7bc22f577b4ca781f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b827fe63e2ea2a7cca0adf3af9abe83aea0dfceed01a7da7bc22f577b4ca781f->enter($__internal_b827fe63e2ea2a7cca0adf3af9abe83aea0dfceed01a7da7bc22f577b4ca781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_82cb2507a59bcb32dd3a81454d45cc3ea41c8e8df7eed61c8b26373405703439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb2507a59bcb32dd3a81454d45cc3ea41c8e8df7eed61c8b26373405703439->enter($__internal_82cb2507a59bcb32dd3a81454d45cc3ea41c8e8df7eed61c8b26373405703439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b827fe63e2ea2a7cca0adf3af9abe83aea0dfceed01a7da7bc22f577b4ca781f->leave($__internal_b827fe63e2ea2a7cca0adf3af9abe83aea0dfceed01a7da7bc22f577b4ca781f_prof);

        
        $__internal_82cb2507a59bcb32dd3a81454d45cc3ea41c8e8df7eed61c8b26373405703439->leave($__internal_82cb2507a59bcb32dd3a81454d45cc3ea41c8e8df7eed61c8b26373405703439_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
