<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ca72b84f37db67f12fc962662172f940f9f4717b44681a7269609e78add844e2 extends Twig_Template
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
        $__internal_857463667f04f112689e12d841ad7317266cb02e9204ef4d8e3f2dadbde68663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857463667f04f112689e12d841ad7317266cb02e9204ef4d8e3f2dadbde68663->enter($__internal_857463667f04f112689e12d841ad7317266cb02e9204ef4d8e3f2dadbde68663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5cf4477fabfae9b8f49081be0ac3ba7b08b2e147637c576a9dd9fc6e597ef98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf4477fabfae9b8f49081be0ac3ba7b08b2e147637c576a9dd9fc6e597ef98d->enter($__internal_5cf4477fabfae9b8f49081be0ac3ba7b08b2e147637c576a9dd9fc6e597ef98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_857463667f04f112689e12d841ad7317266cb02e9204ef4d8e3f2dadbde68663->leave($__internal_857463667f04f112689e12d841ad7317266cb02e9204ef4d8e3f2dadbde68663_prof);

        
        $__internal_5cf4477fabfae9b8f49081be0ac3ba7b08b2e147637c576a9dd9fc6e597ef98d->leave($__internal_5cf4477fabfae9b8f49081be0ac3ba7b08b2e147637c576a9dd9fc6e597ef98d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
